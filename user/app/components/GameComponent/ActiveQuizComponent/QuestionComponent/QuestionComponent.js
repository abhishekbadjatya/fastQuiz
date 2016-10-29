import React from 'react';
import CSSModules from 'react-css-modules';
import QuestionComponentStyle from './assets/QuestionComponent.scss';


class QuestionComponent extends React.Component {

	constructor (props) {

		super(props);
		this.onClickOptionsHandler = this.onClickOptionsHandler.bind(this);
		this.onNextClickButtonHandler = this.onNextClickButtonHandler.bind(this);
	}
	onClickOptionsHandler (e) {

		let optionSelected = e.target.value;
		this.props.selectedOption(optionSelected);


	}

	onNextClickButtonHandler () {

		this.props.nextQuestion ();


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
		let {questionText, options} = this.props;
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
					<input type = 'button' onClick = {this.onNextClickButtonHandler} className = 'btn btn-primary' value = "Next"/>

				</div>
			</div>
			);

		

	}
}

export default CSSModules(QuestionComponent, QuestionComponentStyle);
