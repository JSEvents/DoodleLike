var http   = require('http');
var qs         = require('querystring');
var nodemailer = require('nodemailer');

var transporter = nodemailer.createTransport({
  service: 'Gmail',
  auth: {
    user: 'silhris@gmail.com',
    pass: 'naruto1992'
  }
});

//var server = http.createServer(function(req, res) {
    console.log('here');
    // create reusable transporter object using the default SMTP transport
    var transporter = nodemailer.createTransport('smtps://user%40gmail.com:pass@smtp.gmail.com');

    // setup e-mail data with unicode symbols
    var mailOptions = {
      from: 'Fred Foo 👥 <silhris@gmail.com>', // sender address
      to: 'silhris@gmail.com', // list of receivers
      subject: 'Hello ✔', // Subject line
      text: 'Hello world 🐴', // plaintext body
      html: '<b>Hello world 🐴</b>' // html body
    };

    // send mail with defined transport object
    transporter.sendMail(mailOptions, function(error, info){
      if(error){
          return console.log(error);
      }
      console.log('Message sent: ' + info.response);
    });
//});

//server.listen(1337);