const express = require('express');
const mongodb = require('mongodb');
const bodyParser = require('body-parser');
const config = require('./config.js');
const ObjectId = mongodb.ObjectId;

const server = express();

var middleware = {
	
	logger: function(request, response, next) {
		
		var aLog = [];
		aLog.push( new Date().toString() );
		aLog.push( request.method );
		aLog.push( request.url );
		
		console.log( aLog.join(' ') );
		
		next();
		
	}
}

/*	Create a database reference  */
var mongoServer = new mongodb.Server( config.db_host, config.db_port);
var db = new mongodb.Db( config.db_name, mongoServer);

/*	Middle ware */
server.use( middleware.logger );
server.use( bodyParser.json() );

//	Last Line - Static Route 
server.use( express.static('www/'));

/*	Routes */

server.get('/getContacts',function(request, response){
	
	db.open(function(error){
		if(!error) {
			
			db.collection('contacts', function(error, collection){
				
				collection.find({},function(error,cursor){
					cursor.toArray(function(error,arr){
						if(!error)
							response.send( arr );							
					});
				});
				
			});
			
		} else {
			console.log(error.message);
		}
		
		db.close();
	});
		
});

server.post('/addContact', function(request, response){
	
	var obj = request.body;
	
	console.log('obj recieved', obj);
	
	//	validate obj
	
	//	store in db
	
	db.open(function(error){
		if(!error) {
			db.collection('contacts', function(error, collection){
				if(!error)
					collection.insert( obj, function(){
						console.log('inserted to db', obj);
						response.send( obj );
					} );
			});
		}
		
		db.close();
	});
	
});

server.get('/getContact/:id', function(request, response){
	
	var id = request.params.id;
	
	console.log('Requested object id: ', id);
	
	db.open(function(error){
		
		console.log('connected');
		
		if(!error) {
			db.collection('contacts',function(error,collection){
				
				console.log('contacts reached');
				
				if(!error) {					
					
					collection.findOne({ _id: new ObjectId(id)}, function(error, obj){
						
						console.log('found', obj);
						
						response.send( obj );
					});
					
				}
			});
		}
		else {
			console.log('There was an error accesing the db');
		}
		
		db.close();
	});
	
	
	
});

server.post('/updateContact', function(request, response){
	
	var obj = request.body;
	
	console.log('Recevied obj', obj);
	
	//	Add ObjectId to obj according to its existing id
	var _id = new ObjectId( obj._id );
	obj._id = _id;
	
	db.open(function(error){
		
		if(!error)
			db.collection('contacts',function(error,collection){
				
				console.log('About to save', obj);
				
				collection.save(obj);
				response.send('OK!');
			})
		
		db.close();
	})
	
	
	
	
});

/*	Start Server */
server.listen(config.port, function(){
	console.log('Server started');
	console.log('Listening to port', config.port);
	
});