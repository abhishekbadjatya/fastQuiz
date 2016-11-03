# fastQuiz

To set up the project make sure that **composer** and **node** are installed on your system globally. Also make sure you have valid **mysql** and **apache** servers installation.

Run the setup.sh file

```
bash ./setup.sh
```

Edit the following configurations according to your system - 
* `baseUrl` to the location of folder in `api/services/public`  in `url/constants/urlConstants.js`

* Create a DB. Change  `
DB_DATABASE,
DB_USERNAME,
DB_PASSWORD` in `.env` accordingly.


Run the database.sh file for migration and seeding.
```
bash ./database.sh
```


To run environment - 
```sh
$ cd user
$ npm run dev
```

and open http://localhost:8080/public/#/login
