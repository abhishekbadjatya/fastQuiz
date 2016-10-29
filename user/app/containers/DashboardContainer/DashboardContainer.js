import {connect} from 'react-redux';
import DashboardComponent from '../../components/DashboardComponent/DashboardComponent.js';
import {changeGameComponentScreenType} from '../../actions/gameActions.js';

const mapStateToProps = (state) => {
	return {
	};
};

const mapDispatchToProps = (dispatch) => {

	return {

		changeGameComponentScreenType : (screen) => {


			dispatch(changeGameComponentScreenType (screen));


		}
		

	};

};


export default connect(mapStateToProps, mapDispatchToProps)(DashboardComponent);
