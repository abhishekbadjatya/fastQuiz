import React from 'react';
import CSSModules from 'react-css-modules';
import ActiveQuizComponentStyle from './assets/ActiveQuizComponent.scss';

class ActiveQuizComponent extends React.Component {

	constructor (props) {

		super(props);

	}

	render () {


		let {isLevelFetched} = this.props.game.status;


		if (!isLevelFetched) {

			return (
				<div>
					Loading...
				</div>

				);
		} else {

			return (
			<div>
				This is the ActiveQuizComponent.
			</div>



			);
		



		}

		

	}
}

export default CSSModules(ActiveQuizComponent, ActiveQuizComponentStyle);
