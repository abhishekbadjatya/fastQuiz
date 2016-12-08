import React from 'react';
import CSSModules from 'react-css-modules';
import LoginStyle from '../LeaderboardComponent/assets/LeaderboardComponent.scss';
import {hashHistory} from 'react-router';
import _ from 'lodash';



class LeaderboardComponent extends React.Component {

	constructor (props) {

		super(props);
	}

	componentWillMount () {
		this.props.getLeaderboard();
	}

	render () {
		let tableContent=this.props.leaderboard.map(
			(singleUser)=> {
				return (
						<tr key={singleUser.userId}>
							<td>{singleUser.userName}</td>
							<td>{singleUser.maxLevelReached}</td>
							<td>{singleUser.maxScore}</td>
						</tr>
					);	
			}
		)

		return (
		<div>
			<h1> Leaderboard </h1>
			<table>
				<thead>
				  <tr>
				    <th>Username</th>
				    <th>Max Level Reached</th> 
				    <th>Max Score</th>
				    </tr>
				</thead>
				<tbody>
				  {tableContent}
				</tbody>
			</table>
		</div>
			);
		

	}
}



export default CSSModules(LeaderboardComponent, LoginStyle);
