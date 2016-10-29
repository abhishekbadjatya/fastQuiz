import React from 'react';
import CSSModules from 'react-css-modules';
import QuestionComponentStyle from './assets/QuestionComponent.scss';


class QuestionComponent extends React.Component {

	constructor (props) {

		super(props);
		this.onClickOptionsHandler = this.onClickOptionsHandler.bind(this);
		this.onNextClickButtonHandler = this.onNextClickButtonHandler.bind(this);
		this.onSubmitClickButtonHandler = this.onSubmitClickButtonHandler.bind(this);
	}
	onClickOptionsHandler (e) {

		let optionSelected = e.target.value;
		this.props.selectedOption(optionSelected);


	}

	onNextClickButtonHandler () {

		this.props.nextQuestion ();


	}

	onSubmitClickButtonHandler () {

		this.props.submitCurrentLevelAnswers ();
	}

	getOptionsDOM (options) {

		let alloptions =  options.map ((singleOption)=>{


			return (

				
					<div key = {singleOption.optionId}>
						<input onClick = {this.onClickOptionsHandler} type ="radio" name ="options" value = {singleOption.optionId} /> {singleOption.optionLabel}
					</div>

				



				);


		});

		return (

			<div>
				{alloptions}
			</div>
			);

	}
	

	render () {
		let {questionText, options, isLastQuestionOfLevel} = this.props;
		let optionsDOM = this.getOptionsDOM(options);
		return (

			<div>
				<div className = 'col-xs-12'>
					{questionText}

				</div>
				<div>
					{optionsDOM}
				</div>

				<div>
					{
						(isLastQuestionOfLevel) ? 

					(<input type = 'button' onClick = {this.onSubmitClickButtonHandler} 
					className = 'btn btn-primary' value = "Submit"/>)
						:

					<input type = 'button' onClick = {this.onNextClickButtonHandler} 
					className = 'btn btn-primary' value = "Next"/>
					}
				</div>
			</div>
			);

		

	}
}

export default CSSModules(QuestionComponent, QuestionComponentStyle);
