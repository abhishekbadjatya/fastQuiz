import React from 'react';
import ReactDOM from 'react-dom';
import {Route, hashHistory, IndexRoute} from 'react-router';
import {Provider} from 'react-redux';
import store  from './store/store.js';

ReactDOM.render(

	<Provider store = {store}>

		<Route path = '/'  >
		
			<Route path = 'login' component = {} />
		
		</Route>

	</Provider>




	,document.getElementById('app'));