import {combineReducers} from 'redux';
import status from './status/status.js';
import levels from './levels/levels.js';
import previous from './previous/previous.js';



export default combineReducers({

	status,
	levels,
	previous

});


