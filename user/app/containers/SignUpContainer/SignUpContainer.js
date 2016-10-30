import {connect} from 'react-redux';
import SignUpComponent from '../../components/SignUpComponent/SignUpComponent.js';
import {signUp} from '../../actions/initialLoadingActions.js';
const mapStateToProps = (state) => {

	return {
	

	};
};

const mapDispatchToProps = (dispatch) => {

	return {

		"signUp" : (payload) => {

			dispatch(signUp (payload));
		}

	};

};


export default connect(mapStateToProps, mapDispatchToProps)(SignUpComponent);
