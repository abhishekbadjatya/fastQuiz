import urlConstants from '../constants/urlConstants.js';
import {serialize} from '../util/util.js';
import actionConstants from '../constants/actionConstants.js';
import {hashHistory} from 'react-router';
import _ from 'lodash';
import {kfetch} from '../util/util.js';


export function getLeaderboard () {


	return function (dispatch, getState) {

		kfetch(urlConstants.leaderboard)
		.then((response) => {
			return response.json();
		}).then((json)=> {


			if (!json.error) {

				dispatch ({

					type : actionConstants.SET_LEADERBOARD,
					payload : json
				});
				
			}
			

		}).catch(() => {
			
		});


	};


}

