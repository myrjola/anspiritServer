
	module.exports.processSpeech = function(speech, cb){
	    var toRet = {done:false};
	    cb(toRet);
	}
	module.exports.processActionFromSpeech = function(action, parameters, speech, emotion, cb){
	     var toRet = {done:false};
			 if(action != null){
				 if(action.contains('smarthome')){
					 $.ajax({
						 type: 'post',
						 url: 'http://localhost:3000/hub/1',//"http://api.anspirit.net:3000/hub/1",
						 data: {task: {action: action, parameters: parameters}, secret: global.qapi.getUserSecret(), user: global.qapi.getUserId(), hubId: 1},
						 success: function(data){
							 console.log("Sent request to hub!");
							 console.log(data);
							 toRet.done = true;
							 cb(toRet);
						 },
						 error: function(a, error) {
								cb(toRet);
							 console.error(error);
						 }
					 });
				 }else{
						cb(toRet);
				 }
			 }else{
				 cb(toRet);
			 }
	}

	//TODO get hub id for user
