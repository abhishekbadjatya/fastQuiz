import urlConstants from '../constants/urlConstants.js';
import {serialize} from '../util/util.js';
import actionConstants from '../constants/actionConstants.js';
import {hashHistory} from 'react-router';

export function fetchNewGame (username, password) {


	return function (dispatch, getState) {

		fetch(urlConstants.newGame)
		.then((response) => {
			return response.json();
		}).then((json)=> {


			if (!json.error) {

				dispatch ({
					type : actionConstants.SET_GAME_STATUS_FLAGS,
					flags : {
						isLevelFetched : true,
						currentLevel : json.level,
						currentQuestionId : json.questions[0].questionId
					}
				});


				dispatch ({

					type : actionConstants.ADD_NEW_LEVEL,
					payload : json
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