import urlConstants from '../constants/urlConstants.js';
import {serialize} from '../util/util.js';
import actionConstants from '../constants/actionConstants.js';
import {hashHistory} from 'react-router';
import _ from 'lodash';

export function fetchNewGame (username, password) {


	return function (dispatch, getState) {

		fetch(urlConstants.newGame)
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