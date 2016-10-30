import React from 'react';
import CSSModules from 'react-css-modules';
import SignUpComponentStyles from './assets/SignUpComponent.scss';

class SignUpComponent extends React.Component {

	constructor (props) {

		super(props);
		this._handleKeyPress = this._handleKeyPress.bind(this);
		this.onClickOfSignUButton = this.onClickOfSignUButton.bind(this);

	}

	_handleKeyPress (e) {

		if (e.key === 'Enter') {
			this.onClickOfSignUButton();
		}
	}
	
	onClickOfSignUButton () {

		this.props.signUp({

			username : this.usernameRefSave.value,
			password : this.passwordRefSave.value
		});
		
	}

	render () {
		return (
			<div  className = 'col-md-12'>
				<div>

					<strong>Username</strong>:  <input type='text' 
					ref = {(ref) => this.usernameRefSave = ref} 
					onKeyPress = {this._handleKeyPress} />
				</div>
				<div>
					<strong>Password</strong>:  <input type ='password' 
					 ref = {(ref) => this.passwordRefSave = ref}
				 	onKeyPress = {this._handleKeyPress} />
				</div>

				<div>
					<strong>Re-Enter Password</strong>:  <input type ='password' 
					 ref = {(ref) => this.passwordCopyRefSave = ref}
				 	onKeyPress = {this._handleKeyPress} />
				</div>
				 <input type = 'button' onClick = {this.onClickOfSignUButton}
				  className = 'btn btn-primary' value = 'Sign Up' />
			</div>



			);
		

	}
}

export default CSSModules(SignUpComponent, SignUpComponentStyles);
