var http = require('http')
var port = 1337;
//var port = process.env.PORT || 1337;
http.createServer(function(req, res) {
  res.writeHead(200, { 'Content-Type': 'text/plain' });
  res.end('Hello Bro\n');
}).listen(port);
