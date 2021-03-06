import urlConstants from '../constants/urlConstants.js';
import {serialize} from '../util/util.js';
import actionConstants from '../constants/actionConstants.js';
import {hashHistory} from 'react-router';
import {triggerNotification} from './notificationActions.js';
import {kfetch} from '../util/util.js';


export function checkInit () {

	return function (dispatch, getState) {

		if (!getState().userInfo.isLoggedInChecked) {

			return kfetch(urlConstants.init)
			.then((response) => {

				return response.json();

			}).then((json) => {
				
				dispatch ({

					'type' : actionConstants.SET_USER_INFO,
					payload: {isLoggedInChecked:true}
				});

				if (!json.error) {

					json.isLoggedIn = true;
					
					dispatch ({

						'type' : actionConstants.SET_USER_INFO,
						payload: json
					});


					return Promise.resolve('USER_LOGGED_IN');

				} else {
					if (json.error == 'SESSION_DOES_NOT_EXIST') {

						return Promise.resolve(json.error);
					}
				}

			});
		} else {

			if (getState().userInfo.isLoggedIn) {

				return Promise.resolve('USER_LOGGED_IN');
			} else {

				return Promise.resolve('USER_NOT_LOGGED_IN');

			}
		}




	}



}



export function login (username, password) {


	return function (dispatch) {

		

			kfetch(urlConstants.login, {

				method :'POST',
				headers: {
					'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
				},
				body: serialize({userName : username, password})
			}).then((response) => {
				return response.json();
			}).then((json)=> {



				if (!json.error) {

					json.isLoggedIn = true;


					dispatch ({

						'type' : actionConstants.SET_USER_INFO,
						payload: json
					});

					hashHistory.push('dashboard');



				} else {

					if (json.error == "INCORRECT_CREDENTIALS") {

						dispatch (triggerNotification({
							message : 'Incorrect Crendentials',
							level: 'error'
						}));

					}
				}


			}).catch(() => {

			});



		

		


	};


}



export function signUp (payload)  {

	return function (dispatch)  {
		
		payload.userName = payload.username;
		payload.emailId = "sample";
		payload.maxScore = 0;
		payload.maxLevelReached = 1;
		delete payload["username"];

		kfetch(urlConstants.signUp, {

			method :'POST',
			headers: {
				'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
			},
			body: serialize (payload)
		}).then((response) => {
			return response.json();
		}).then((json)=> {



			if (!json.error) {

				json.isLoggedIn = true;
				


				dispatch ({

					'type' : actionConstants.SET_USER_INFO,
					payload: json
				});

				hashHistory.push('dashboard');



			} else {
				if (json.error == "USERNAME_TAKEN") {
					dispatch(triggerNotification({

						"level" : "error",
						"message" : "Username is taken"


					}));
				}
			}
			

		}).catch(() => {
			
		});



	}

}

export function logout () {

	return function (dispatch)  {

		kfetch(urlConstants.logout)
		.then((response) => {
			location.reload();
			return response.json();
		}).then((json)=> {



			console.log('here');
			//TODO- CHECK FOR 200
			

			
			

		}).catch(() => {
			
		});



	}
}