

let urlConstants = () => {

	let baseUrl = "http://localhost/fastQuiz/api/services/public/"
	return {

		"login" : baseUrl + 'authz/login',
		"newGame" : baseUrl + 'newGame',
		"submitLevel" : baseUrl + 'submitLevel',
		"init" : baseUrl + 'authz/getsession',
		"signUp" : baseUrl + '/authz/signup',
		"logout" : baseUrl + '/authz/logout',
        "leaderboard" : 'http://localhost:5000/leaderboard',
        "updatePassword": "http://localhost:5000/userupdate"
	};


};

export default urlConstants();