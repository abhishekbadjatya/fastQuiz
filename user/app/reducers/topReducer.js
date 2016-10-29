import {combineReducers} from 'redux';
import userInfo from './userinfo/userInfo.js';
import game from './game/game.js';


export default combineReducers({

	userInfo,
	game

});


