import {connect} from 'react-redux';
import GameComponent from '../../components/GameComponent/GameComponent.js';
import {fetchNewGame} from '../../actions/gameActions.js';


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


			}


		}
		


		

	};

};


export default connect(mapStateToProps, mapDispatchToProps)(GameComponent);
