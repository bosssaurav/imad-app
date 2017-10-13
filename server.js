var express = require('express');
var morgan = require('morgan');
var http = require('http').Server(app);
var path = require('path');
var app = express();
app.use(morgan('combined'));


var sys = require("sys"),
http = require("http");

var phpServer = require('node-php-server');
 
// Create a PHP Server 
phpServer.createServer({
    port: 80,
    hostname: '127.0.0.1',
    base: '.',
    keepalive: false,
    open: false,
    bin: 'php',
    router: __dirname + '/server.php'
});
 
// Close server 
phpServer.close();



app.get('/ui/style.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'login', 'reset.css'));
});

// Do not change port, otherwise your app won't run on IMAD servers
// Use 8080 only for local development if you already have apache running on 80

var port = 80;
app.listen(port, function () {
  console.log(`IMAD course app listening on port ${port}!`);
});
