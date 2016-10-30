

let urlConstants = () => {

	let baseUrl = "http://localhost/sampleASE/api/services/public/"
	return {

		"login" : baseUrl + 'login',
		"newGame" : baseUrl + 'newGame',
		"submitLevel" : baseUrl + 'submitLevel',
		"init" : baseUrl + 'init',
		"signUp" : baseUrl + 'signUp',
		"logout" : baseUrl + 'logout'
	};


};

export default urlConstants();