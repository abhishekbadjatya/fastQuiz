# fastQuiz

To set up the project make sure **composer**, **node**, **npm** and **webpack** installed on your system globally.

Steps to backend install dependencies - 
   

```sh
$ cd api/services
$ composer install
```
To run static anaylysis on backend code - 
```sh
$ cd api/services
$ ./vendor/bin/phpmd ./app/ text codesize,unusedcode,naming --exclude /app/tests/TestCase.php
```


Steps to front end install dependencies - 
   

```sh
$ cd user
$ npm install
```



To run development environment - 
```sh
$ cd user
$ npm run dev
```


To build production bundle.js with static anaylysis file for front end - 
```sh
$ cd user
$ npm run build
```