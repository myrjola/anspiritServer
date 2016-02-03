var http = require('http')
var port = process.env.PORT || 1337;

http.createServer(function(req, res) {
  res.writeHead(200, { 'Content-Type': 'text/json' });
  var result = {'status' : 200, 'done' : true}
  res.end(result);
}).listen(port);
