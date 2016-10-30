import React from 'react';
import CSSModules from 'react-css-modules';
import EndGameComponentStyles from './assets/EndGameComponent.scss';
import {hashHistory} from 'react-router';


class EndGameComponent extends React.Component {

	constructor (props) {

		super(props);

	}

	

	onClickDashboardHandler () {

		this.props.actions.clearStatusesFlags();
		this.props.actions.clearLevels();
		hashHistory.push('dashboard');
	}
	render () {
		let {totalScore} = this.props.status;
		return (
			<div>
				<div>
					Your game has ended.
				</div>
				<div>
					Total Score =  {totalScore}
				</div>
				<div>
					<input type = 'button' className = 'btn btn-primary' value = "Go to Dashboard" 
					onClick = {()=>this.onClickDashboardHandler()}

					 />
				</div>
			</div>
			);
		

	}
}

export default CSSModules(EndGameComponent, EndGameComponentStyles);
