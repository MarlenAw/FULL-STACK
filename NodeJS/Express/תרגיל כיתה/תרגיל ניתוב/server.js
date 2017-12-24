var express = require('express');
var bodyParser = require('body-parser');

var Products = [];

Products.push({ id: 1, name: "Bamba", price: 5.5 });
Products.push({ id: 2, name: "Bisli", price: 6.5 });
Products.push({ id: 3, name: "Milki", price: 7.5 });
//	Create a server
var server = express();


//	Use Middleware
server.use( bodyParser.json() );
//server.use( bodyParser.urlencoded({ extended: false }) );

//	1

server.get('/getProducts',function(req,res){
	
	//res.send( JSON.stringify(Products) );
	res.json( Products );
	
});

server.post('/sendProduct',function(req,res){
	
	var newProduct = req.body;
	
	Products.push( newProduct );
	
	res.send('All is good');
});



//	Start Server
server.listen(3000);