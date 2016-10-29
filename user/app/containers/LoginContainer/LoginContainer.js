import {connect} from 'react-redux';
import LoginComponent from '../../components/LoginComponent/LoginComponent.js';
import {login} from '../../actions/initialLoadingActions.js';
const mapStateToProps = (state) => {

	return {
	

	};
};

const mapDispatchToProps = (dispatch) => {

	return {

		login : (username, password) => {

			dispatch(login(username, password));

		}
		

	};

};


export default connect(mapStateToProps, mapDispatchToProps)(LoginComponent);
