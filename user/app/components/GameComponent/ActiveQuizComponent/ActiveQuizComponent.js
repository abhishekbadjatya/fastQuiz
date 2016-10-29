import React from 'react';
import CSSModules from 'react-css-modules';
import ActiveQuizComponentStyle from './assets/ActiveQuizComponent.scss';
import QuestionComponent from './QuestionComponent/QuestionComponent.js';

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

			console.log(activeLevel);
			let activeQuestion = null;
			 _.each (activeLevel.questions, (singleQuestion) => {


					if (singleQuestion.questionId == currentQuestionId) {

						activeQuestion = singleQuestion;
						return false;
					}

			});

			console.log(activeQuestion);
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
			let {selectedOption, nextQuestion} = this.props.actions;
			return (
			<div>
				<div className = 'col-xs-12 text-center'>
					Level {status.currentLevel}
				</div>

				<div className = 'col-xs-12'>

					<QuestionComponent nextQuestion = {nextQuestion} selectedOption = {selectedOption} {...activeQuestionProps} />

				</div>
			</div>



			);
		



		}

		

	}
}

export default CSSModules(ActiveQuizComponent, ActiveQuizComponentStyle);
