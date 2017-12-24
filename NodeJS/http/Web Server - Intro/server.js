var config = { port: 80, timeoutSeconds: 5 }

var http = require('http');
var fs = require('fs');

//	create an instance of an HTTP server
//	var server is a reference of that instance
var server = http.createServer();	

server.on('request',function(request, response){
	
	
	//	Log request
	console.log(request.method, request.url);
	
	////	Output some data to the browser
	//	response.write('<h1>Hello from NodeJS Server</h1>');
		
	////	End (of stream)
	//	response.end();
	
	
	console.log('TEST: ' + request.url.indexOf('myScript.js'));
	
	if(request.url.indexOf('myScript.js') != -1 ) {
		var readableStream = fs.createReadStream('myScript.js');
	}
	
	else {
	//	Send an HTML file, as a stream, to the browser
	var readableStream = fs.createReadStream('myHTML.html');
	}
	
	readableStream.pipe(response);
	
});

//	Start the server
server.listen( config.port );

console.log('Server started');
console.log('Listening on port ' + config.port);
console.log('Server will close within ' + config.timeoutSeconds + ' seconds');


//	Shutdown server after 5 second
setTimeout(function(){
	
	server.close(function(){
		console.log('Closing server');
		
		//	Absolutely exit NodeJS
		process.exit(0);
	});	
	
}, config.timeoutSeconds *1000);