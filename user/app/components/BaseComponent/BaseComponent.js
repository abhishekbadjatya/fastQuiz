import React from 'react';
import CSSModules from 'react-css-modules';
import BaseStyle from './assets/BaseComponent.scss';

class BaseComponent extends React.Component {

	constructor (props) {

		super(props);
		
	}

	
	

	render () {

		let {isLoggedIn} = this.props;

		return (
			<div >
				<div styleName = 'base-header'  className = 'col-xs-12'>
					<div className = 'col-xs-3'>
						Fast Quiz
					</div>
					<div className = 'col-xs-9 text-right'>
							{
								(isLoggedIn) ? 
									(<input type = 'button' 
										onClick = {() => this.props.logout()}
										className = 'btn btn-primary' value = "Logout" />)
									:
									(null)

							}
					</div>
				
				</div>

				<div className = 'col-md-12'>

					{this.props.children}

				</div>

			</div>



			);
		

	}
}

export default CSSModules(BaseComponent, BaseStyle);
