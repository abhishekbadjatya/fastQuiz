import {combineReducers} from 'redux';
import userInfo from './userinfo/userInfo.js';
import game from './game/game.js';
import notifConfig from './notifConfig/notifConfig.js';

export default combineReducers({

	userInfo,
	game,
	notifConfig

});


