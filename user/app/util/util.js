import _ from 'lodash';
export  function serialize (obj, prefix) {
	var str = [];
	for(var p in obj) {
		if (obj.hasOwnProperty(p)) {
			var k = prefix ? prefix + '[' + p + ']' : p, v = obj[p];
			str.push(typeof v === 'object' ?
serialize(v, k) :
encodeURIComponent(k) + '=' + encodeURIComponent(v));
		}
	}
	return str.join('&');
}


export function kfetch (url, optionsInit) {

	let init = Object.assign ({}, {credentials:'include'}, optionsInit);
	return fetch(url, init);
}

export function getPreviousAnswers (levels, previous) {

		

	let previousLevelObject = _.find(levels, function(singleLevel) { return singleLevel.level == previous.level; });

	previousLevelObject =  _.cloneDeep(previousLevelObject);

	

	previousLevelObject.questions.map((singleQuestion) => {

		singleQuestion['chosenOptionText'] = _.find(singleQuestion.options, (singleOption) => { 

			return singleQuestion.chosenOptionId == singleOption.optionId
		});


	});

	let correctAnswerHash = {};

	previous.correctAnswers.map ((singleQuestion) => {

		correctAnswerHash[singleQuestion.questionId] = singleQuestion.correctAnswerOptionId


	});


	previousLevelObject.questions.map((singleQuestion) => {

		singleQuestion['correctOptionText'] = _.find(singleQuestion.options, (singleOption) => { 

			return correctAnswerHash[singleQuestion.questionId] == singleOption.optionId
		});


	});

	return previousLevelObject;

}