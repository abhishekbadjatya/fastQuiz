import initialState from '../../../constants/initialState.js';
import actionConstants from '../../../constants/actionConstants';



const status = (state = initialState.game.status, action) => {

	switch (action.type) {

		case actionConstants.SET_GAME_STATUS_FLAGS : return setGameStatusFlags (state, action);

		case actionConstants.CLEAR_STATUS_FLAGS : return clearStatusFlags (state, action);

		default: 
		return state
	}



};



function setGameStatusFlags (state, action) {
	let newState =  Object.assign({},state, action.flags);
	return newState;

}	


function clearStatusFlags (state, action) {

	return Object.assign ({}, initialState.game.status);
}

export default status;