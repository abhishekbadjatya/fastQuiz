import React from 'react';
import CSSModules from 'react-css-modules';
import DashboardStyles from './assets/DashboardComponent.scss';
import {hashHistory} from 'react-router';

class DashboardComponent extends React.Component {

	constructor (props) {

		super(props);
		
	}

	
	onClickNewGame () {
		
		this.props.changeGameComponentScreenType("ACTIVE_QUIZ");
		hashHistory.push ('new-game');
	}

	render () {

		return (
			<div className = 'col-md-12'>
				<div className = 'col-xs-6'>
					This is the Dashboard Component

				</div>
				<div className = 'col-xs-6'>

					<input type = 'button' onClick = {() => this.onClickNewGame()} className ='btn' value = 'New Game' />
				</div>

			</div>

			);
		

	}
}

export default CSSModules(DashboardComponent, DashboardStyles);
