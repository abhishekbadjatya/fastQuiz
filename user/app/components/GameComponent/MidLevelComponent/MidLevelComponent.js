import React from 'react';
import CSSModules from 'react-css-modules';
import MidLevelComponentStyles from './assets/MidLevelComponent.scss';
import {hashHistory} from 'react-router';


import {getPreviousAnswers} from '../../../util/util.js';

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

	getView (previousLevelObject) {

		return previousLevelObject.questions.map ((singleQuestion) => {

			return (
				<div styleName = 'card' key = {singleQuestion.questionId}>
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

		let {hasQualified, previousScore, totalNoOfQuestionsInCurrentLevel} = this.props.status

		let previousLevelObject = getPreviousAnswers (this.props.levels, this.props.previous);
		let previousAnswersDOM = this.getView (previousLevelObject);

		return (

			<div>

				{

					(!hasQualified) ?
						(<div>

							Sorry, you have not qualified.
							Score {previousScore}/{totalNoOfQuestionsInCurrentLevel}
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
								Score {previousScore}/{totalNoOfQuestionsInCurrentLevel}


								<div>
									<input type = 'button' className = 'btn btn-primary' 
									onClick = {()=> this.onClickNextLevelHandler()}
									value = 'Next Level' />
								</div>


							</div>


							)




				}
				<div>
					<div styleName = 'center'>
						Review
					</div>
					
					<div>
					{previousAnswersDOM}
					</div>
				</div>
				
			</div>
		);
		

	}
}

export default CSSModules(MidLevelComponent, MidLevelComponentStyles);
