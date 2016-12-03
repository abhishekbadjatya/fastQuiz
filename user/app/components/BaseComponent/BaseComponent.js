import React from 'react';
import CSSModules from 'react-css-modules';
import BaseStyle from './assets/BaseComponent.scss';
import NotificationSystem from 'react-notification-system';
import {hashHistory} from 'react-router';
import urlConstants from '../../constants/urlConstants.js';


class BaseComponent extends React.Component {

	constructor (props) {

		super(props);
		
	}

	
	componentWillReceiveProps (nextProps) {

		if (this.props.notifConfig.isTriggered != nextProps.notifConfig.isTriggered) {

			if (nextProps.notifConfig.isTriggered) {

				this.notificationRef.addNotification({
						"level" : nextProps.notifConfig.level,
						"message" : nextProps.notifConfig.message
				});
			}
		}
	

	}
	onClickLeaderboardHandler () {
		hashHistory.push('leaderboard');
	}

	onClickUserManagementHandler(){
		hashHistory.push('updatePassword');
	}

	onClickDashboardHandler(){
		hashHistory.push('dashboard');
	}

	render () {

		let {isLoggedIn} = this.props;
		return (
			<div >
				<div styleName = 'base-header'  className = 'col-xs-12'>
					<div styleName = 'app-name' className = 'col-xs-3'>
						FastQuiz
					</div>
					<div className = 'col-xs-9 text-right'>
							{
								(isLoggedIn) ? 
									(<input type = 'button' 
										onClick = {() => this.props.logout()}
										className = 'btn btn-primary' value = "Logout" />)
									:
									(null)

							}
					</div>
				<NotificationSystem ref={(ref) => this.notificationRef = ref} />
				</div>

				<div className = 'col-xs-12'>


					{
									(isLoggedIn) ? 
										(
											<div className = 'col-xs-2'>
												<div styleName ='pointer' onClick = {() => this.onClickDashboardHandler()}>
													Dashboard
												</div>
												<div styleName ='pointer' onClick = {() => this.onClickLeaderboardHandler()}>
													Leaderboard
												</div>
												<div styleName ='pointer' onClick = {() => this.onClickUserManagementHandler()}>
													User Management
												</div>
											</div>
										)
										:
										(null)

					}
					
					<div className = 'col-xs-10'>
						{this.props.children}
					</div>

					

				</div>

			</div>



			);
		

	}
}

export default CSSModules(BaseComponent, BaseStyle);
