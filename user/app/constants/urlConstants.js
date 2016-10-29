

let urlConstants = () => {

	let baseUrl = "http://localhost/sampleASE/api/services/public/"
	return {

		"login" : baseUrl + 'login',
		"newGame" : baseUrl + 'newGame'
	};


};

export default urlConstants();