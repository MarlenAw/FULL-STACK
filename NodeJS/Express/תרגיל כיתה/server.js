var express = require('express');

//	Create a Server with Express
var server = express();

//	Set a public html directroy
server.use( express.static('www/'));


//	Data Model
var myContacts = [
	{name: 'Alex', phone: '050' },
	{name: 'Dana', phone: '051' },
	{name: 'Joe', phone: '052' }
];

//	Simple Route
server.get("/",function(request, response){
	response.send('Hello from Server');
});

server.get("/data/getContacts",function(request, response){
	
	//	Send array of contacts as a stringified JSON
	response.json(myContacts);
	
});

//	Start the Server
server.listen(3000,function(){
	console.log('Server started ' + new Date().toString()); 
});