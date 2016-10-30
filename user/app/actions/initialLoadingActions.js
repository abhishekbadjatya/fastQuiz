import urlConstants from '../constants/urlConstants.js';
import {serialize} from '../util/util.js';
import actionConstants from '../constants/actionConstants.js';
import {hashHistory} from 'react-router';
import {triggerNotification} from './notificationActions.js';



export function checkInit () {

	return function (dispatch, getState) {

		if (!getState().userInfo.isLoggedInChecked) {

			return fetch(urlConstants.init)
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


function checkAndDispatchIfFieldsEmpty (username, password, dispatch) {

	if (!username || !password ) {

		dispatch (triggerNotification({
			message : 'Fill out all fields',
			level: 'error'
		}));

		return false;
	} else {
		return true;
	}
}


export function login (username, password) {


	return function (dispatch, getState) {

		if (checkAndDispatchIfFieldsEmpty(username, password, dispatch)) {

			fetch(urlConstants.login, {

				method :'POST',
				headers: {
					'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
				},
				body: serialize({username, password})
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



		} 

		


	};


}


function checkAndDispatchIfFieldsEmptyForSignUp (payload, dispatch) {


	
}

export function signUp (payload)  {

	return function (dispatch, getState)  {

		fetch(urlConstants.signUp, {

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



			}
			

		}).catch(() => {
			
		});



	}

}

export function logout () {

	return function (dispatch, getState)  {

		fetch(urlConstants.logout)
		.then((response) => {
			return response.json();
		}).then((json)=> {



			if (!json.error) {

				location.reload();

			}
			

		}).catch(() => {
			
		});



	}
}