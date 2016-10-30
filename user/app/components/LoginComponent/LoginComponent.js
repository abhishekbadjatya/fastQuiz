import React from 'react';
import CSSModules from 'react-css-modules';
import LoginStyle from './assets/LoginComponent.scss';
import {hashHistory} from 'react-router';

class LoginComponent extends React.Component {

	constructor (props) {

		super(props);
		this._handleKeyPress = this._handleKeyPress.bind(this);
		this.onClickOfLoginButton = this.onClickOfLoginButton.bind(this);
		this.usernameRefSave = this.usernameRefSave.bind(this);
		this.passwordRefSave = this.passwordRefSave.bind(this);
		this.onClickOfGoToSignUp = this.onClickOfGoToSignUp.bind(this);
	}

	onClickOfGoToSignUp () {

		hashHistory.push('signUp');

	}

	_handleKeyPress (e) {

		if (e.key === 'Enter') {
			this.onClickOfLoginButton();
		}
	}
	usernameRefSave(ref) {
		this.usernameRef = ref;
	}


	passwordRefSave (ref) {
		this.passwordRef = ref;
	}
	onClickOfLoginButton () {
		let username = this.usernameRef.value; 
		let password = this.passwordRef.value;
		let {login} = this.props;
		login (username, password);
	}

	render () {
		return (
			<div  className = 'col-md-12'>
				<div>

					<strong>Username</strong>:  <input type='text' 
					ref = {this.usernameRefSave} 
					onKeyPress = {this._handleKeyPress} />
				</div>
				<div>
					<strong>Password</strong>:  <input type ='password' 
					 ref = {this.passwordRefSave}
				 	onKeyPress = {this._handleKeyPress} />
				</div>
				 <input type = 'button' onClick = {this.onClickOfLoginButton}
				  className = 'btn btn-primary' value = 'login' /> 
				  <div>
				  		<br/>
					  <input type = 'button' onClick = {this.onClickOfGoToSignUp}
					  className = 'btn btn-primary' value = 'New User' />
				  </div>
			</div>



			);
		

	}
}

export default CSSModules(LoginComponent, LoginStyle);
