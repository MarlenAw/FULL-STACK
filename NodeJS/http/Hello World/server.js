var http = require('http');

//	create an instance of an HTTP server
//	var server is a reference of that instance
var server = http.createServer();	

server.on('request',function(request, response){
	
	
	//	Log request
	console.log(request.method, request.url);
	
	//	Output some data to the browser
	response.write('<h1>Hello from NodeJS Server</h1>');
	
	
	//	End (of stream)
	response.end();
	
});

//	Start the server
server.listen(80);
console.log('Server started at port 80');


//	Shutdown server after 5 second
setTimeout(function(){
	
	console.log('Server shutdown after 5 seconds');
	//server.close();
	
},5*1000);