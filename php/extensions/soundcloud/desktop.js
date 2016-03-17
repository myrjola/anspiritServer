module.exports.processSpeech = function(speech, callback) {
  var toRet = {
    'done': false
  };
  if (speech.contains("music")){

    //Debug
    var scSearch = require('soundcloud-search-node');
    toRet.done = true;
    scSearch.getTracks("Avicii", 10, function callback(tracks){
      for(var i = 0; i < tracks.length; i++){
          console.log(tracks[i].genre);
      }
    });
    //Debug end
    /**
    if(speech.contains("pause")){
      //Pause music
    }else{
      var SoundCloudAudio = require('https://github.com/voronianski/soundcloud-audio.js/blob/master/');
      var scSearch = require('soundcloud-search-node');

      //Get music type  //
      //else            // Get song/playlist url
      //Play some music //
      var playlist = null;
      var song = null;

      if(speech.contains("piano")){

      }else if(speech.contains("pop")) {

      }else if(speech.contains("acoustic")) {

      }

      // create new instance of audio
      var scPlayer = new SoundCloudAudio('f0c91d25e71d247e0f73e4b24e0f8b90');

      if(song != null){
        //Play song
        scPlayer.resolve(song, function (err, track) {
            // do smth with track object
            // e.g. display data in a view etc.
            console.log(track);

            // once track is loaded it can be played
            scPlayer.play();

            // stop playing track and keep silence
            scPlayer.pause();
        });
      }else if(playlist != null){
        //Play playlist
        scPlayer.resolve(playlist, function (err, playlist) {
            // do smth with array of `playlist.tracks` or playlist's metadata
            // e.g. display playlist info in a view etc.
            console.log(playlist);

            // once playlist is loaded it can be played
            scPlayer.play();

            // for playlists it's possible to switch to another track in queue
            // e.g. we do it here when playing track is finished
            scPlayer.on('ended', function () {
                scPlayer.next();
            });
        });
      }
    }*/
  }

  callback(toRet);
}
module.exports.processActionFromSpeech = function(action, parameters, speech, emotion, callback) {
  var toRet = {
    'done': false
  };
  //if done is false, rule search will be continued.
  //if done is true, action must be performed, because rule search/executing will be done.
  callback(toRet);
}
module.exports.onStart = function(callback) {
  //This will be executed during first loading
  console.log("Hello from SoundCloud");
  var npm = require('npm');
  npm.load(function(err) {
    // install module ffi
    npm.commands.install(['soundcloud-search-node'], function(er, data) {
      // log errors or data
      //callback();
      if(!er){
        console.log("soundcloud-search-node installed");
      }else {
        console.error(er);
      }
    });
  });
}
