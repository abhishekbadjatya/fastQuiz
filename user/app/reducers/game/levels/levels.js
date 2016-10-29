import initialState from '../../../constants/initialState.js';
import actionConstants from '../../../constants/actionConstants';
import _ from 'lodash';



const levels = (state = initialState.game.levels, action) => {

	switch (action.type) {

		case actionConstants.ADD_NEW_LEVEL : return addNewLevel (state, action);
											break;

		
		case actionConstants.SELECTED_OPTION : return selectedOption (state, action);
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




function selectedOption (state, action) {

	let newState = _.cloneDeep (state); //TODO- FIX IT LATER
	let {currentLevel, currentQuestionId, optionId} = action.payload;

	_.each(newState, (singleLevel) => {

		if (singleLevel.level == currentLevel) {

			_.each (singleLevel.questions, (singleQuestion) => {

				if (singleQuestion.questionId == currentQuestionId) {

					singleQuestion.chosenOptionId = optionId;
				}

			});
		}


	});
	return newState;
}


export default levels;