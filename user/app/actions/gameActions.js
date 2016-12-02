import urlConstants from '../constants/urlConstants.js';
import {serialize} from '../util/util.js';
import actionConstants from '../constants/actionConstants.js';
import {hashHistory} from 'react-router';
import _ from 'lodash';
import {kfetch} from '../util/util.js';


export function fetchNewGame (username, password) {


	return function (dispatch, getState) {

		kfetch(urlConstants.newGame)
		.then((response) => {
			return response.json();
		}).then((json)=> {


			if (!json.error) {

				dispatch ({

					type : actionConstants.ADD_NEW_LEVEL,
					payload : json
				});

				dispatch ({
					type : actionConstants.SET_GAME_STATUS_FLAGS,
					flags : {
						isLevelFetched : true,
						currentLevel : json.level,
						currentQuestionId : json.questions[0].questionId
					}
				});


				

				
			}
			

		}).catch(() => {
			
		});


	};


}


export function changeGameComponentScreenType (screen) {


	return function (dispatch, getState) {
		dispatch ({
			type : actionConstants.SET_GAME_STATUS_FLAGS,
			flags : {
				gameComponentScreenType : screen
			}
		});
	}
}



export function selectedOption (optionId) {

	return function (dispatch, getState) {

		let store = getState();
		let {currentLevel, currentQuestionId} = store.game.status;

		dispatch({

			type : actionConstants.SELECTED_OPTION,
			payload : {
				currentLevel, currentQuestionId, optionId
			}

		});


	};
}

export function nextQuestion () {

	return function (dispatch, getState) {

		let store = getState ();
		let {currentLevel, currentQuestionId} = store.game.status;
		let levels = store.game.levels;
		let nextQuestionId = null;
		_.each (levels, (singleLevel) => {

			if (singleLevel.level == currentLevel) {

				for (var i = 0; i <singleLevel.questions.length ; i++) {

					if (singleLevel.questions[i].questionId == currentQuestionId) {

						nextQuestionId = singleLevel.questions[i+1].questionId;
						if (i+1 == singleLevel.questions.length-1) {

							dispatch ({
								type : actionConstants.SET_GAME_STATUS_FLAGS,
								flags : {
									isLastQuestionOfLevel : true
								}
							});


						}

						break;
					}


				}
				


			}


		});

		dispatch ({
			type : actionConstants.SET_GAME_STATUS_FLAGS,
			flags : {
				currentQuestionId : nextQuestionId
			}
		});

	}
}


export function submitCurrentLevelAnswers () {

	return function (dispatch, getState) {

		let store = getState ();
		let {levels} = store.game;
		let currentLevel = store.game.status.currentLevel;

		let currentLevelObject = null;
		_.each (levels, (singleLevel) => {

			if (singleLevel.level == currentLevel ) {

				currentLevelObject = singleLevel;

			}


		});

		let answers = currentLevelObject.questions.map ((singleQuestion) => {

			return {

				"questionId" : singleQuestion.questionId,
				"optionId" : singleQuestion.chosenOptionId


			};

		});

		let payload = {

			answers,
			level: currentLevel

		};

		dispatch ({
			type : actionConstants.SET_GAME_STATUS_FLAGS,
			flags : {
				isLevelFetched :false
			}
		});

		kfetch(urlConstants.submitLevel, {

			method :'POST',
			headers: {
				'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
			},
			body: serialize(payload)
		}).then((response) => {
			return response.json();
		}).then((json)=> {



			if (!json.error) {


				if (!json.isGameOver) {

					if (!json.hasQualified) {

						dispatch({

							type: actionConstants.SET_GAME_STATUS_FLAGS,
							flags : {
								hasQualified: false,
								gameComponentScreenType: "MID_LEVEL",
								previousScore: json.score
							}
						});


					} else {

						dispatch ({

							type : actionConstants.CLEAR_STATUS_FLAGS,

						});
						dispatch ({

							type : actionConstants.ADD_NEW_LEVEL,
							payload : json.next
						});

						dispatch ({
							type : actionConstants.SET_GAME_STATUS_FLAGS,
							flags : {

								hasQualified: true,
								gameComponentScreenType: "MID_LEVEL",
								previousScore: json.score,
								isLevelFetched : true,
								currentLevel : json.next.level,
								currentQuestionId : json.next.questions[0].questionId
							}
						});
					}



				} else {

					dispatch ({
							type : actionConstants.SET_GAME_STATUS_FLAGS,
							flags : {
								
								gameComponentScreenType: "END_GAME",
								previousScore: json.score,
								totalScore : json.totalScore
							}
						});


				}
			}
			

		}).catch(() => {
			
		});




	};
}


export function clearStatusesFlags () {

	return function (dispatch, getState) {


		dispatch ({

			type : actionConstants.CLEAR_STATUS_FLAGS,

		});


	};
}

export function clearLevels () {

	return function (dispatch, getState) {

		dispatch ({
			type : actionConstants.SET_GAME_STATUS_FLAGS,
			flags : {
				isLevelFetched :false
			}
		});
		dispatch ({

			type : actionConstants.CLEAR_LEVELS,

		});


	};


}