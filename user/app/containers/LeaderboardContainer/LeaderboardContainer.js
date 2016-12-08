import {connect} from 'react-redux';
import LeaderboardComponent from '../../components/LeaderboardComponent/LeaderboardComponent.js';
import {triggerNotification} from '../../actions/notificationActions.js';
import {getLeaderboard} from '../../actions/leaderboardActions.js';
import {fetchNewGame, selectedOption, nextQuestion,
 submitCurrentLevelAnswers, clearStatusesFlags, clearLevels, changeGameComponentScreenType} from '../../actions/gameActions.js';


const mapStateToProps = (state) => {

	return {

		leaderboard:state.leaderboard
		

	};
};

const mapDispatchToProps = (dispatch) => {

	return {

		getLeaderboard : () => {

			dispatch(getLeaderboard())
		}

	};

};


export default connect(mapStateToProps, mapDispatchToProps)(LeaderboardComponent);
