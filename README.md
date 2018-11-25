# MerchStore
### Installing

After you have cloned this repo execute the following commands:

```
npm install
composer install
php artisan key:generate
```


After that edit some strings in '.env.example' and also renamed it to '.env'

```
DB_DATABASE="your db"
DB_USERNAME="your username" (defult: root)
DB_PASSWORD="your password" (defult: )
```

Some final steps in the console:
```
php artisan migrate:fresh
npm run watch
```

Fill you db with data and enjoy

### API documentation
...
