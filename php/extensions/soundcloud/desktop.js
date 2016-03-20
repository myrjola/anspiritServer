module.exports.processSpeech = function(speech, callback) {
  var toRet = {"done":false};
  callback(toRet);
}
module.exports.processActionFromSpeech = function(action, parameters, speech, emotion, callback) {
  var toRet = {"done":false};
  if(action.contains("media.music")){
    toRet.done = true;
    //Get music type  //
    //else            // Get song/playlist url
    //Play some music //
    var playlist = null;
    var song = null;
    global.qapi.loadScript("http://anspirit.org/php/extensions/soundcloud/scSearch.js", function() {
      console.log("script loaded");
      scSearch("Avicii", 1, function callback(tracks){
            //URI tracks[i].uri
            //title tracks[i].title
            song = tracks[0].uri;
            console.log(song);
            var embded = '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="';
            var url = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/34019569&color=0066cc";
            embded = embded + updateURLParameter(url, 'url', song);
            embded = embded + '"></iframe>';
            newCard(embded);
      });
    });
  }else{
    callback(toRet);
  }
}
module.exports.onStart = function(callback) {
  console.log("Hello from SoundCloud");
  callback();
}
function updateURLParameter(url, param, paramVal){
    var newAdditionalURL = "";
    var tempArray = url.split("?");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";
    if (additionalURL) {
        tempArray = additionalURL.split("&");
        for (i=0; i<tempArray.length; i++){
            if(tempArray[i].split('=')[0] != param){
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    }

    var rows_txt = temp + "" + param + "=" + paramVal;
    return baseURL + "?" + newAdditionalURL + rows_txt;
}


/**
if (speech.contains("music")){
  //Debug
  console.log("Here is your favourite music!");
  global.qapi.loadScript("http://anspirit.org/php/extensions/soundcloud/scSearch.js", function() {
    global.qapi.loadScript("http://anspirit.org/php/extensions/soundcloud/scPlayer.js", function(){
      toRet['done'] = true;
      global.qapi.say("Here is your favourite music!");
      console.log("Here is your favourite music!");
      scSearch("Avicii", 10, function callback(tracks){
        for(var i = 0; i < tracks.length; i++){
            console.log(tracks[i]);
            //URI tracks[i].uri
            //title tracks[i].title
        }
      });
      callback(toRet);
    });
  });
}else{
  callback(toRet);
}


var toRet = {"done":false};
if(action.contains("media.music")){
  toRet.done = true;
  callback(toRet);
}else{
  callback(toRet);
}


global.qapi.loadScript("http://anspirit.org/php/extensions/soundcloud/scPlayer.js", function(){
  scSearch("Avicii", 1, function callback(tracks){
        //URI tracks[i].uri
        //title tracks[i].title
        song = tracks[0].uri;
        console.log(song);
        playMusic();
  });
});

function playMusic(){
    // create new instance of audio
    var mainScPlayer = new scPlayer('f0c91d25e71d247e0f73e4b24e0f8b90');

    if(song != null){
      //Play song
      mainScPlayer.resolve(song, function (err, track) {
          // do smth with track object
          // e.g. display data in a view etc.
          console.log(track);

          // once track is loaded it can be played
          mainScPlayer.play();

          callback(toRet);

          // stop playing track and keep silence
          //mainScPlayer.pause();
      });
    }else if(playlist != null){
        //Play playlist
        mainScPlayer.resolve(playlist, function (err, playlist) {
            // do smth with array of `playlist.tracks` or playlist's metadata
            // e.g. display playlist info in a view etc.
            console.log(playlist);

            // once playlist is loaded it can be played
            mainScPlayer.play();

            // for playlists it's possible to switch to another track in queue
            // e.g. we do it here when playing track is finished
            mainScPlayer.on('ended', function () {
                mainScPlayer.next();
            });

            callback(toRet);
        });
      }else{
        global.qSay("Sorry, can`t find music for you", function(){
          callback(toRet);
        });
      }
    }
*/
