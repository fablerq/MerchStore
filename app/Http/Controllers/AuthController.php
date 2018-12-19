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

            $user->is_verified = 1;
            $user->save();

            DB::table('user_verifications')->where('token', $verification_code)->delete();

            return response()->json([
                'message'=> 'Вы успешно верифицировали свой аккаунт.',
            ]);
        }

        return response()->json(['error'=> 'Такого проверочного кода не существует.']);
    }

    public function getuser()
    {
        if (Auth::guest()) {
            return response()->json(['userdata'=> 'никто не в системе']);
        }
        $currentuserid = Auth::user();

        return response()->json(['userdata'=> $currentuserid]);
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        if (Auth::attempt($validated, true)) {
            $user = Auth::user();
            $user->makeVisible(['remember_token']);
            Auth::login($user);

            return response()->json(['message'=> 'работает', 'userdata' => $user]);
        } else {
            return response()->json(['error'=> 'Не правильный логин или пароль']);
        }
    }

    public function logout(Request $request)
    {
        if (Auth::user()) {
            Auth::logout();

            return response()->json(['error'=> 'Вышли успешно']);
        } else {
            return response()->json(['error'=> 'Чтобы разлогиниться надо сначала авторизироваться']);
        }
    }
}
