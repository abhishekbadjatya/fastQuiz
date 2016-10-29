

let urlConstants = () => {

	let baseUrl = "http://localhost/sampleASE/api/services/public/"
	return {

		"login" : baseUrl + 'login',
		"newGame" : baseUrl + 'newGame',
		"submitLevel" : baseUrl + 'submitLevel'
	};


};

export default urlConstants();