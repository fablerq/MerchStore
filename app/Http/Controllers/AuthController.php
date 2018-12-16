<?php

namespace App\Http\Controllers;

//use Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class AuthController extends Controller
{
    /**
     * API Register.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $login = $validated['login'];
        $email = $validated['email'];
        $password = $validated['password'];
        $role_id = '1';

        $user = User::create(['login' => $login, 'email' => $email, 'password' => Hash::make($password), 'role_id' => $role_id]);

        $verification_code = str_random(30);

        DB::table('user_verifications')->insert(['user_id'=>$user->id, 'token'=>$verification_code]);

        $subject = 'Верификация нового пользователя.';

        $fromAddress = env('MAIL_FROM_ADDRESS', 'merchodmen@gmail.com');

        Mail::send('email.verify', ['login' => $login, 'verification_code' => $verification_code],
            function ($mail) use ($email, $login, $subject, $fromAddress) {
                $mail->from($fromAddress);
                $mail->to($email, $login);
                $mail->subject($subject);
            });

        return response()->json(['message'=> 'Благодарим за регистрацию! Проверьте пожалуйста почту с письмом для подтверждения']);
    }

    /**
     * API Verify User.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function verifyUser($verification_code)
    {
        $check = DB::table('user_verifications')->where('token', $verification_code)->first();
        if (!is_null($check)) {
            $user = User::find($check->user_id);
            if ($user->is_verified == 1) {
                return response()->json([
                    'error'=> 'Аккаунт уже верифицирован.',
                ]);
            }

            $user->update(['is_verified' => 1]);
            DB::table('user_verifications')->where('token', $verification_code)->delete();

            return response()->json([
                'message'=> 'Вы успешно верифицировали свой аккаунт.',
            ]);
        }

        return response()->json(['error'=> 'Такого проверочного кода не существует.']);
    }

    public function getuser(Request $request)
    {
        if (Auth::guest()) {
            return response()->json(['userdata'=> 'никто не в системе']);
        }
        $currentuserid = Auth::user()->id;

        return response()->json(['userdata'=> $currentuserid]);
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        // create our user data for the authentication
        $userdata = [
        'login'     => $validated['login'],
        'password'  => $validated['password'],
    ];

//     if (Auth::check())
        // {
//     return response()->json(['error'=> "молодой, ты уже зареган"]);
        // } else {
//     return response()->json(['error'=> "нэт"]);
        // }

        if (Auth::attempt($userdata, true)) {
            return response()->json(['message'=> 'работает', 'userdata' => Auth::user()]);
        } else {
            return response()->json(['error'=> 'Не правильный логин или пароль']);
        }
    }

    /**
     * API Recover Password.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function recover(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $error_message = 'Your email address was not found.';

            return response()->json(['success' => false, 'error' => ['email'=> $error_message]], 401);
        }

        try {
            Password::sendResetLink($request->only('email'), function (Message $message) {
                $message->subject('Your Password Reset Link');
            });
        } catch (\Exception $e) {
            //Return with error
            $error_message = $e->getMessage();

            return response()->json(['success' => false, 'error' => $error_message], 401);
        }

        return response()->json([
            'success' => true, 'data'=> ['message'=> 'A reset email has been sent! Please check your email.'],
        ]);
    }

    public function logout(Request $request)
    {
        if (Auth::user()) {
            return response()->json(['error'=> 'Вышли успешно']);
            Auth::logout();
        } else {
            return response()->json(['error'=> 'Чтобы разлогиниться надо сначала авторизироваться']);
        }
    }
}
