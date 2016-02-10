
	exports.processSpeech = function(qapi, speech, callback){
	    var toRet = {done:false};
	    callback(toRet);
	}
	exports.processActionFromSpeech = function(qapi, action, parameters, speech, emotion, callback){
			 var qapi = require('../api/qapi.js');
	     var toRet = {done:false};
			 if(action.contains('smarthome')){
				 $.ajax({
					 type: 'get',
					 url: 'http://localhost:3000/hub/1',//"http://api.anspirit.net:3000/hub/1",
					 data: {task: {action: action, parameters: parameters}, secret: qapi.getUserSecret(), user: qapi.getUserId()},
					 success: function(data){
						 console.log("Sent request to hub!");
						 console.log(data);
						 toRet.done = true;
						 callback(toRet);
					 },
					 error: function(a, error) {
						 	callback(toRet);
						 console.error(error);
					 }
				 });
			 }else{
				 	allback(toRet);
			 }
	}
