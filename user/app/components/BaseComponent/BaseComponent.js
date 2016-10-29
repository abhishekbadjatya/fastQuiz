import React from 'react';
import CSSModules from 'react-css-modules';
import BaseStyle from './assets/BaseComponent.scss';

class BaseComponent extends React.Component {

	constructor (props) {

		super(props);
		
	}

	
	

	render () {

		return (
			<div>
				<div styleName = 'base-header' className = 'col-md-12'>
					Fast Quiz
				</div>
				<div className = 'col-md-12'>

					{this.props.children}

				</div>

			</div>



			);
		

	}
}

export default CSSModules(BaseComponent, BaseStyle);
