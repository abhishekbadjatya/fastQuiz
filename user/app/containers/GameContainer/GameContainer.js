import {connect} from 'react-redux';
import GameComponent from '../../components/GameComponent/GameComponent.js';
import {fetchNewGame, selectedOption, nextQuestion} from '../../actions/gameActions.js';


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
			}


		}
		


		

	};

};


export default connect(mapStateToProps, mapDispatchToProps)(GameComponent);
