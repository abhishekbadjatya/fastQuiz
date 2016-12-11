import React from 'react';
import CSSModules from 'react-css-modules';
import ActiveQuizComponentStyle from './assets/ActiveQuizComponent.scss';
import QuestionComponent from './QuestionComponent/QuestionComponent.js';
import EndGameButtonComponent from './EndGameButtonComponent/EndGameButtonComponent.js';

class ActiveQuizComponent extends React.Component {

	constructor (props) {

		super(props);

	}

	getQuestionProps (props) {

		let {currentLevel, currentQuestionId} = props.game.status;

		let activeLevel = null;

		_.each (props.game.levels, (singleLevel) => {

			if (singleLevel.level == currentLevel) {

				activeLevel =  singleLevel;
				return false;
			}


		});
		
		

		if (activeLevel) {

			let activeQuestion = null;
			 _.each (activeLevel.questions, (singleQuestion) => {


					if (singleQuestion.questionId == currentQuestionId) {

						activeQuestion = singleQuestion;
						return false;
					}

			});

			return activeQuestion;


		}

		

		


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

			let {status, levels} =  this.props.game;
			let activeQuestionProps = this.getQuestionProps (this.props);
			let {selectedOption, nextQuestion, submitCurrentLevelAnswers} = this.props.actions;
			return (
			<div>
				<div styleName = 'level-heading' className = 'col-xs-12 text-left'>
					Level {status.currentLevel}
				</div>
				<EndGameButtonComponent submitCurrentLevelAnswers = {submitCurrentLevelAnswers}/>

				<div className = 'col-xs-12'>

					<QuestionComponent
					triggerNotification = {this.props.actions.triggerNotification}
					submitCurrentLevelAnswers = {submitCurrentLevelAnswers}
					isLastQuestionOfLevel = {status.isLastQuestionOfLevel}
					nextQuestion = {nextQuestion}
					selectedOption = {selectedOption} {...activeQuestionProps} />

				</div>
			</div>



			);
		



		}

		

	}
}

export default CSSModules(ActiveQuizComponent, ActiveQuizComponentStyle);
