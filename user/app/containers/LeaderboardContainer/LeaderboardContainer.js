import {connect} from 'react-redux';
import LeaderboardComponent from '../../components/LeaderboardComponent/LeaderboardComponent.js';
import {getLeaderboard} from '../../actions/leaderboardActions.js';


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
