var express = require('express');
var bodyParser = require('body-parser');
var fs = require('fs');
var middleware = require('./middleware.js');

var config = JSON.parse( fs.readFileSync('config.json') ); 

var data = {
	
	Contacts: [{ id: 1, name: "Alex", phone: "050" },
			   { id: 2, name: "Dana", phone: "051" },
			   { id: 3, name: "Joe", phone: "052" }
			  ],
	
	Grades: [],
	
	nextId: 4
	
}

var server = express();

//	Use Middleware

server.use( bodyParser.json() );		//	Allow post of JSONs

server.use( middleware.logger );	//	Log all requests to console

//	Use Public Folder
server.use( express.static( config.public_html ) );

//	Routing
server.get('/data/getContacts',function(request,response){
	
	//	response.json automatically converts a json object
	//	or an array of jsons to stringified json 		
	
	response.json(data.Contacts);
	
});

server.post('/data/addContact',function(request, response){
	
	var newContact = request.body;
	
	newContact.id = data.nextId++;
		
	//	Add new contact to array of contacts
	data.Contacts.push(newContact);
	
	//response.json(newContact);
	response.send('Hakol Beseder');
	
});

//	EXAMPLE - Read query string parameters
server.get('/data/test/',function(request, response){
	
	//	client will access this route through
	//	/data/test/?fullname=Alex&phone=050
	
	var fullname = request.query.fullname;
	var phone = request.query.phone;
	
	response.send('Hello ' + fullname + ' ' + phone);
	
});

//	EXAMPLE - Read parameters as "Friendly" url
server.get('/data/test/:id',function(request,response){
	
	//	:id is a variables passed as if it was a directory
	//	example: /data/test/3
	var id = request.params.id;
	
	response.send(st);
	
});

//	EXAMPLE - Read JSON data
server.post('/data/addObj',function(request, response){
	
	//var newObj = { "name": "Yuval" , "phone": "051-123" };
	
	var newContact = request.body.contact;	
	
	console.log(request.body.contact.name);
	
	
	response.send(newContact);
	
});





server.listen( config.port, function(){
	console.log('Server of ' + config.appTitle + ' is listening to port ' + config.port);
} );