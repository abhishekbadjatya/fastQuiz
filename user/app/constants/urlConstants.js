

let urlConstants = () => {

	let baseUrl = "http://localhost/fastQuiz/api/services/public/"
	return {

		"login" : baseUrl + 'authz/login',
		"newGame" : baseUrl + 'newGame',
		"submitLevel" : baseUrl + 'submitLevel',
		"init" : baseUrl + 'authz/getsession',
		"signUp" : baseUrl + '/authz/signup',
		"logout" : baseUrl + '/authz/logout',
        "leaderboard" : baseUrl+'getLeaderboard',
        "updatePassword": baseUrl + 'changePassword'
	};


};

export default urlConstants();