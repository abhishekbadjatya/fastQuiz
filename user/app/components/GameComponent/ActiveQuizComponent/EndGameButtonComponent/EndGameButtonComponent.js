import React from 'react';
import CSSModules from 'react-css-modules';
import EndGameButtonComponentStyle from './assets/EndGameButtonComponent.scss';
import Modal from 'react-bootstrap/lib/Modal';

class EndGameButtonComponent extends React.Component {

	constructor (props) {

		super(props);
		this.state = {
			showModal: false
		};

	}
	

	onClickEndButton () {
		this.setState({showModal:true});
	}

	closeButtonModal () {
		this.props.submitCurrentLevelAnswers();
	}
	closeModal () {
		this.setState({showModal:false});
	}

	render () {

		return (

		<div>

			<button styleName = 'end-button' className = 'btn btn-danger' onClick = {() => this.onClickEndButton()}>
				End
			</button>
			<Modal show={this.state.showModal} onHide={()=>this.closeModal()}>
				<Modal.Header closeButton>
	            <Modal.Title>End Game</Modal.Title>
	          </Modal.Header>
	          <Modal.Body>
	          	Are you sure you want to end this game?
	          </Modal.Body>
	          <Modal.Footer>
	            <button className = 'btn btn-danger' onClick={()=>this.closeButtonModal()}>Yes</button>
	            <button className = 'btn btn-success' onClick={()=>this.closeModal()}>Cancel</button>
	          </Modal.Footer>
        	</Modal>

		</div>);


		

	}
}

export default CSSModules(EndGameButtonComponent, EndGameButtonComponentStyle);
