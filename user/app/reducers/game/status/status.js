import initialState from '../../../constants/initialState.js';
import actionConstants from '../../../constants/actionConstants';
import _ from 'lodash';



const status = (state = initialState.game.status, action) => {

	switch (action.type) {

		case actionConstants.SET_GAME_STATUS_FLAGS : return setGameStatusFlags (state, action);
		

		default: 
		return state
	}



};



function setGameStatusFlags (state, action) {


	let newState =  Object.assign({},state, action.flags);
	return newState;

}	




export default status;