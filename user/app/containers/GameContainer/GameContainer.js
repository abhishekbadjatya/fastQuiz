import {connect} from 'react-redux';
import GameComponent from '../../components/GameComponent/GameComponent.js';
import {triggerNotification} from '../../actions/notificationActions.js';
import {fetchNewGame, selectedOption, nextQuestion,
 submitCurrentLevelAnswers, clearStatusesFlags, clearLevels, changeGameComponentScreenType} from '../../actions/gameActions.js';


const mapStateToProps = (state) => {

	return {

		game:state.game
	

	};
};

const mapDispatchToProps = (dispatch) => {

	return {

		"gameActions" : {

			fetchNewGame : () => {

				dispatch(fetchNewGame ());


			},

			selectedOption : (optionId) => {

				dispatch (selectedOption(optionId));


			},
			nextQuestion : () => {

				dispatch (nextQuestion ());
			},
			submitCurrentLevelAnswers : () => {

				dispatch (submitCurrentLevelAnswers());
			},
			clearStatusesFlags : () => {

				dispatch (clearStatusesFlags());
			},
			clearLevels : () => {

				dispatch(clearLevels());
			},
			changeGameComponentScreenType : () => {

				dispatch(changeGameComponentScreenType());
			},
			triggerNotification : (config) => {

			dispatch(triggerNotification(config));


		}


		}
		


		

	};

};


export default connect(mapStateToProps, mapDispatchToProps)(GameComponent);
