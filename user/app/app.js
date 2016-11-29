import React from 'react';
import ReactDOM from 'react-dom';
import {Route, hashHistory, IndexRoute,Router, IndexRedirect} from 'react-router';
import {Provider} from 'react-redux';
import store  from './store/store.js';
import BaseContainer from './containers/BaseContainer/BaseContainer.js';
import LoginContainer from './containers/LoginContainer/LoginContainer.js';
import DashboardContainer from './containers/DashboardContainer/DashboardContainer.js';
import GameContainer from './containers/GameContainer/GameContainer.js';
import SignUpContainer from './containers/SignUpContainer/SignUpContainer.js';
import LeaderboardContainer from './containers/LeaderboardContainer/LeaderboardContainer.js';
import UpdatePasswordContainer from './containers/UpdatePasswordContainer/UpdatePasswordContainer.js';
import {loginCheck, dashboardCheck, newGameCheck, leaderboardCheck} from './checks/checks.js';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';

ReactDOM.render(

	<Provider store = {store}>
		<Router history = {hashHistory} >
			<Route path = '/' component = {BaseContainer}  >
				<IndexRedirect to = '/login' />
				<Route onEnter = {loginCheck} path = 'login' component = {LoginContainer} />
				<Route onEnter = {dashboardCheck} path = 'dashboard' component = {DashboardContainer} />
				<Route onEnter = {newGameCheck} path = 'new-game' component = {GameContainer} />
				<Route path = "signUp" component = {SignUpContainer} />
				<Route onEnter = {leaderboardCheck} path = "leaderboard" component = {LeaderboardContainer} />
				<Route onEnter = {leaderboardCheck} path = "updatePassword" component = {UpdatePasswordContainer} />
			</Route>
		</Router>

	</Provider>




	,document.getElementById('app'));