import React from 'react';
import CSSModules from 'react-css-modules';
import QuestionComponentStyle from './assets/QuestionComponent.scss';


class QuestionComponent extends React.Component {

	constructor (props) {

		super(props);
		this.onClickOptionsHandler = this.onClickOptionsHandler.bind(this);
		this.onNextClickButtonHandler = this.onNextClickButtonHandler.bind(this);
		this.onSubmitClickButtonHandler = this.onSubmitClickButtonHandler.bind(this);
		this.state = {
			'optionSelected' : false,
			'timer' : 10
		};
		this.tick = this.tick.bind(this);
	}
	onClickOptionsHandler (e) {

		let optionSelected = e.target.value;
		this.props.selectedOption(optionSelected);
		this.setState({
			optionSelected : true
		});


	}

	onNextClickButtonHandler () {

		if (this.state.optionSelected) {

			this.props.nextQuestion ();
			this.setState({
				"optionSelected" : false,
				timer:10

			});

		} else {

			this.props.triggerNotification({

				"level" : "error",
				"message" : "Please, select an option."


			});

		}
		


	}

	onSubmitClickButtonHandler () {
		if (this.state.optionSelected) {

			this.props.submitCurrentLevelAnswers ();

			this.setState({
				"optionSelected" : false,
				timer:10

			});

		} else {

			this.props.triggerNotification({

				"level" : "error",
				"message" : "Please, select an option."


			});

		}
		
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
	tick () {

		this.setState({timer: this.state.timer -1});
		if (this.state.timer <=0) {
			
			clearInterval(this.interval);
			this.setState({timer:10});
			this.interval = setInterval(this.tick, 1000);
			
			if (this.props.isLastQuestionOfLevel) {
				this.props.submitCurrentLevelAnswers();

			} else {
				this.props.nextQuestion();
			}

		}
	}

	componentDidMount() {
		this.interval = setInterval(this.tick, 1000);
	}
	componentWillUnmount() {

		clearInterval(this.interval);
	}
	

	render () {
		let {questionText, options, isLastQuestionOfLevel} = this.props;
		let optionsDOM = this.getOptionsDOM(options);
		return (

			<div>
				<div styleName = 'question-text'>
					Q. {questionText}

				</div>
				<div styleName = 'options' >
					{optionsDOM}
				</div>

				<div>
					{
						(isLastQuestionOfLevel) ? 

					(<input type = 'button' onClick = {this.onSubmitClickButtonHandler} 
					className = 'btn btn-primary' value = "Submit"/>)
						:

					<button type = 'button' onClick = {this.onNextClickButtonHandler} 
					className = 'btn btn-primary' value = "Next">Next
					 	<span className="glyphicon glyphicon-chevron-right"></span>
					 </button>
					}
				</div>
				<div>
					Timer : {this.state.timer}
				</div>
			</div>
			);

		

	}
}

export default CSSModules(QuestionComponent, QuestionComponentStyle);
