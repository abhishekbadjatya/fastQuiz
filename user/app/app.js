import React from 'react';
import ReactDOM from 'react-dom';
import {Route, hashHistory, IndexRoute,Router} from 'react-router';
import {Provider} from 'react-redux';
import store  from './store/store.js';
import BaseContainer from './containers/BaseContainer/BaseContainer.js';
import LoginContainer from './containers/LoginContainer/LoginContainer.js';
import DashboardContainer from './containers/DashboardContainer/DashboardContainer.js';
import GameContainer from './containers/GameContainer/GameContainer.js';

import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
ReactDOM.render(

	<Provider store = {store}>
		<Router history = {hashHistory} >
			<Route path = '/' component = {BaseContainer}  >
				
				<Route path = 'login' component = {LoginContainer} />
				<Route path = 'dashboard' component = {DashboardContainer} />
				<Route path = 'new-game' component = {GameContainer} />

			</Route>
		</Router>

	</Provider>




	,document.getElementById('app'));