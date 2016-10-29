import initialState from '../../../constants/initialState.js';
import actionConstants from '../../../constants/actionConstants';
import _ from 'lodash';



const levels = (state = initialState.game.levels, action) => {

	switch (action.type) {

		case actionConstants.ADD_NEW_LEVEL : return addNewLevel (state, action);
											break;

		

		default: 
		return state
	}



};


function addNewLevel (state, action) {

	let newState = state.map (()=> {
		return level;

	});

	newState.push(action.payload);

	return newState;
}


export default levels;