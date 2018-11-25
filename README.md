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

#### Users
```
GET all users: GET to api/users
GET specific user: GET to api/users/{id}
CREATE user: POST to api/users/
DELETE specific user: GET to api/users/{id}
```
#### Orders
```
GET all orders: GET to api/orders
GET specific order: GET to api/orders/{id}
CREATE order: POST to api/orders/
DELETE specific order: GET to api/orders/{id}
```
#### Product
```
GET all products: GET to api/products
GET specific product: GET to api/products/{id}
CREATE product: POST to api/products/
DELETE specific product: GET to api/products/{id}
```
#### Faculty
```
GET all faculties: GET to api/faculties
GET specific faculty: GET to api/faculties/{id}
CREATE faculty: POST to api/faculties/
DELETE specific faculty: GET to api/faculties/{id}
```
#### Photo
```
GET all photos: GET to api/photos
GET specific photo: GET to api/photos/{id}
CREATE photo: POST to api/photos/
DELETE specific photo: GET to api/photos/{id}
```
#### Size
```
GET all sizes: GET to api/sizes
GET specific size: GET to api/sizes/{id}
CREATE size: POST to api/sizes/
DELETE specific size: GET to api/sizes/{id}
```
#### Status
```
GET all statuses: GET to api/statuses
GET specific status: GET to api/statuses/{id}
CREATE status: POST to api/statuses/
DELETE specific status: GET to api/statuses/{id}
```
#### Type
```
GET all types: GET to api/types
GET specific type: GET to api/types/{id}
CREATE type: POST to api/types/
DELETE specific type: GET to api/types/{id}
```
