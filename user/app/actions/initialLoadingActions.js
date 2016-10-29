import urlConstants from '../constants/urlConstants.js';
import {serialize} from '../util/util.js';
import actionConstants from '../constants/actionConstants.js';
import {hashHistory} from 'react-router';

export function login (username, password) {


	return function (dispatch, getState) {

		fetch(urlConstants.login, {

			method :'POST',
			headers: {
				'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
			},
			body: serialize({})
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


	};


}