import React from 'react';
import CSSModules from 'react-css-modules';
import MidLevelComponentStyles from './assets/MidLevelComponent.scss';
import {hashHistory} from 'react-router';

class MidLevelComponent extends React.Component {

	constructor (props) {

		super(props);

	}

	onClickDashboardHandler() {

		this.props.actions.clearLevels();
		this.props.actions.clearStatusesFlags();
		hashHistory.push('dashboard');


	}
	onClickNextLevelHandler () {

		this.props.actions.changeGameComponentScreenType ("ACTIVE_QUIZ");
	}

	
	render () {

		let {hasQualified, previousScore} = this.props.status
		return (

			<div>

				{

					(!hasQualified) ?
						(<div>

							Sorry, you have not qualified.
							Score {previousScore}
							<div>
								<input type = 'button' className = 'btn btn-primary' 
								onClick = {()=> this.onClickDashboardHandler()}
								value = 'Go to Dashboard' />
							</div>
						</div>)

						:
						(
							<div>
								Congratulations, you have qualified for the next level.
								Score {previousScore}
								<input type = 'button' className = 'btn btn-primary' 
								onClick = {()=> this.onClickNextLevelHandler()}
								value = 'Next Level' />
							</div>


							)




				}

				
			</div>
		);
		

	}
}

export default CSSModules(MidLevelComponent, MidLevelComponentStyles);
