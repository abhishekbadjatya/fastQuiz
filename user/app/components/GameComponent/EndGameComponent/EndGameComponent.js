import React from 'react';
import CSSModules from 'react-css-modules';
import EndGameComponentStyles from './assets/EndGameComponent.scss';
import {hashHistory} from 'react-router';

import {getPreviousAnswers} from '../../../util/util.js';


class EndGameComponent extends React.Component {

	constructor (props) {

		super(props);

	}

	

	onClickDashboardHandler () {

		this.props.actions.clearStatusesFlags();
		this.props.actions.clearLevels();
		hashHistory.push('dashboard');
	}

	getView (previousLevelObject) {

		return previousLevelObject.questions.map ((singleQuestion) => {

			return (
				<div key = {singleQuestion.questionId}>
					<div>
						{singleQuestion.questionId} : {singleQuestion.questionText}

					</div>

					<div>
					You Answered : { (singleQuestion.chosenOptionText) ? singleQuestion.chosenOptionText.optionLabel : "Not attempted."}

					</div>

					<div>
						Correct Answer : {singleQuestion.correctOptionText.optionLabel}

					</div>
				</div>


				);


		});
	}
	
	render () {
		let {totalScore} = this.props.status;
		let previousLevelObject = getPreviousAnswers (this.props.levels, this.props.previous);
		let previousAnswersDOM = this.getView (previousLevelObject);
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
				<div>
					Review
					<div>
					{previousAnswersDOM}
					</div>
				</div>
			</div>
			);
		

	}
}

export default CSSModules(EndGameComponent, EndGameComponentStyles);
