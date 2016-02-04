var http   = require('http');
var qs         = require('querystring');
var nodemailer = require('nodemailer');

var server = http.createServer(function(req, res) {
  if (req.method === 'POST' && req.url === '/') {
    var body = '';
    req.on('data', function (data) {
      body += data;
    });

    req.on('end', function () {
      var mail = qs.parse(body);
    });
  }
  res.end();
});

server.listen(1337);