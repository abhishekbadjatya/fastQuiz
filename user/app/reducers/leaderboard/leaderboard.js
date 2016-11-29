import initialState from '../../constants/initialState.js';
import actionConstants from '../../constants/actionConstants';
import _ from 'lodash';



const leaderboardInfo = (state = initialState.leaderboard, action) => {

	switch (action.type) {

		case actionConstants.SET_LEADERBOARD  : {

			return setLeaderboard (state, action.payload);
		}

		default: 
		return state
	}



};



function setLeaderboard (state, payload) {

	return payload;
	//return Object.assign({},state);
	//return Object.assign({}, state, payload);

}

export default leaderboardInfo;