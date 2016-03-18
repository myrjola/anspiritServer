module.exports.processSpeech = function(speech, callback) {
  var toRet = {
    'done': false
  };
  callback(toRet);
}
module.exports.processActionFromSpeech = function(action, parameters, speech, emotion, callback) {
  var toRet = {'done': false};

  if (speech.contains("music")){
    toRet['done'] = true;
    global.qapi.say("Here is your favourite music!");
    callback(toRet);
  }else{
    callback(toRet);
  }
}
module.exports.onStart = function(callback) {
  console.log("Hello from SoundCloud");
  callback();
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


if(speech.contains("pause")){
  //Pause music
}else{
  //Get music type  //
  //else            // Get song/playlist url
  //Play some music //
  var playlist = null;
  var song = null;

  if(speech.contains("piano")){
    //search for music
  }else if(speech.contains("pop")) {
    //search for music
  }else if(speech.contains("acoustic")) {
    //search for music
  }else{
    //search for random music
  }

  // create new instance of audio
  var mainScPlayer = new SoundCloudAudio('f0c91d25e71d247e0f73e4b24e0f8b90');

  if(song != null){
    //Play song
    mainScPlayer.resolve(song, function (err, track) {
        // do smth with track object
        // e.g. display data in a view etc.
        console.log(track);

        // once track is loaded it can be played
        mainScPlayer.play();

        // stop playing track and keep silence
        mainScPlayer.pause();
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
    });
  }
}*/
