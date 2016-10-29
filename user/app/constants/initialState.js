let initialState = () => {

	return {

		"userInfo" : {

			"username" : null,
			"isLoggedIn" : false,
		},
		"game" : {

			status : {
				'isLevelFetched' :false,
				'currentLevel' : null,
				'currentQuestionId' : null,
				'gameComponentScreenType' : null,
				

			},
			levels : []


		},

	};

};


export default initialState ();