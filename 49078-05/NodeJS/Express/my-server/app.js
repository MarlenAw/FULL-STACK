var express = require('express');
var middleware = require('./middleware.js');
var server = express();

//	Middleware
server.use( middleware.doSomething );
server.use( middleware.logger );


//	Static Routing

server.use( express.static(__dirname + '/public_html/') );

//	Routes
server.get("/",function(request, response){
	response.send('<h1>Hello Express!</h1>');
});


server.get('/aboutUs',function(request, response){
	response.send('<h1>About Us - GET Request</h1>');
});

server.post('/aboutUs',function(request, response){
	response.send('<h1>About Us - POST Request</h1>');
});

server.get('/stam.html',function(req,res){
	res.sendFile(__dirname + '/' + 'stam.html');
});



server.listen(3000);