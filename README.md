# fastQuiz

To set up the project make sure **composer** and **node** installed on your system globally. Also make sure you have valid **mysql** and **apache** servers installation.

Run the setup.sh file

```
./setup.sh
```

Edit the following configurations according to your system - 
* `baseUrl` to the location of folder in `api/services/public`  in `url/constants/urlConstants.js`

* Create a DB. Change  `
DB_DATABASE,
DB_USERNAME,
DB_PASSWORD` in `.env` accordingly.



To run environment - 
```sh
$ cd user
$ npm run dev
```

and open http://localhost:3000#login