import {combineReducers} from 'redux';
import status from './status/status.js';
import levels from './levels/levels.js';



export default combineReducers({

	status,
	levels

});


