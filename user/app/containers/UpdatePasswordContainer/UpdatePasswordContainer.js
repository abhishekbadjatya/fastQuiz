import {connect} from 'react-redux';
import UpdatePasswordComponent from '../../components/UpdatePasswordComponent/UpdatePasswordComponent.js';
import {updatePassword} from '../../actions/userManagementActions.js';
import {triggerNotification} from '../../actions/notificationActions.js';
const mapStateToProps = (state) => {

	return {
	

	};
};

const mapDispatchToProps = (dispatch) => {

	return {

		updatePassword : (oldpassword, newpassword) => {

			dispatch(updatePassword(oldpassword, newpassword));

		},
		triggerNotification : (config) => {

			dispatch(triggerNotification(config));


		}

	};

};


export default connect(mapStateToProps, mapDispatchToProps)(UpdatePasswordComponent);
