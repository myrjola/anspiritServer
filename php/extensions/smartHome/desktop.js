	exports.processSpeech = function(speech, callback){
	    var toRet = {'done':false};
	    callback(toRet);
	}
	exports.processActionFromSpeech = function(action, parameters, speech, emotion, callback){
	     var toRet = {'done':false};
			 if(action.contains('smarthome')){
				 $.ajax({
					 type: 'get',
					 url: "http://api.anspirit.net:3030/hub/1",
					 data: {task: {action: action, parameters: parameters}, secret: qapi.getUserSecret(), user: qapi.getUserId()},
					 success: function(data){
						 console.log("Sent request to hub!");
						 console.log(data);
						 toRet['done'] = true;
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
