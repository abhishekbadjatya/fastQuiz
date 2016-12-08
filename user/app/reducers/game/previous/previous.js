import initialState from '../../../constants/initialState.js';
import actionConstants from '../../../constants/actionConstants';



const previous = (state = initialState.game.previous, action) => {

	switch (action.type) {

		case actionConstants.SET_PREVIOUS_ANSWERS : return setPreviousAnswers(state,action);
													
		default: 
		return state
	}



};



function setPreviousAnswers(state,action) {

	return action.payload;

}

export default previous;