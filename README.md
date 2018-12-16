# MerchStore
[![Build Status](https://travis-ci.org/fablerq/MerchStore.svg)](https://travis-ci.org/fablerq/MerchStore)
[![StyleCI](https://github.styleci.io/repos/159022107/shield?style=plastic)](https://github.styleci.io/repos/159022107)
## STILL IN DEVELOPMENT STAGE, NOT READY
## Description
Singlepage app build with Vuejs on frontend and Laravel on backend. Data is collected with backend API from Postgres database on Heroku. We are also using Travis CI for continuous integration and deployment to our hosting
## Features 
### 2v1 release. 13/12/12
> 1) The end of global redesign (except team page) :sunglasses:
### 2v0 release. 11/12/12
> 1) uploading images with front and back validation
> 2) half part of global redesign with material design
> 3) ready many-to-many connection product_user
> 4) ability to add several products to an order
> 5) user-friendly faq (admin panel)
> 6) fixing bags and some other small features
## Installation
#### First part
> 1) set .env in normal view
> 2) delete 'postinstall' string in package.json and also a comma at the end of the string above
> 3) delete register() body in app/Providers/AppServiceProvider.php
#### Second part, do the following commands in console
> 1) npm install 
> 2) composer install  
> 3) php artisan key:generate 
> 4) php artisan migrate:fresh
> 5) npm run watch
## Team
some text
## API documentation
#### models
#### template

