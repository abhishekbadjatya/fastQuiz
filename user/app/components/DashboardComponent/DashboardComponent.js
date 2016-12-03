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
				<div className = 'col-xs-10'>
					<div styleName = 'dashboard-heading'>
						Dashboard
					</div>
					Fastquiz is a multilevel quiz game in which the player attempts to answer questions correctly. User continues to next level when he scores more 50%.

				</div>
				<div className = 'col-xs-2 text-right'>

					<input type = 'button' onClick = {() => this.onClickNewGame()} className ='btn btn-success' value = 'New Game' />
				</div>

			</div>

			);
		

	}
}

export default CSSModules(DashboardComponent, DashboardStyles);
