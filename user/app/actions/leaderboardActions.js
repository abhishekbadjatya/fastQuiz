import urlConstants from '../constants/urlConstants.js';
import actionConstants from '../constants/actionConstants.js';
import {kfetch} from '../util/util.js';


export function getLeaderboard () {


	return function (dispatch) {

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

