var mongo = require("mongodb");

var db_host = 'localhost';
var db_port = 27017;

//	Create a db reference
var db = mongo.Db("work", new mongo.Server(db_host,db_port));

//	Connect
db.open(function(error){
	
	if(!error) {
		
		console.log('Connected');
		
		//	Insert
		db.collection("employees", function(error, collection){
			
			if(!error) {
				
				var newEmployee = {					
					name: 'Alexander',
					dept: 'db'				
				}
				
				//addEmployee( collection, newEmployee );
				getEmployees( collection, function( error, result ) {
					
					if(!error) {
						
						var answerArray = result;
						
						answerArray.forEach( function( document ) {
							
							console.log( document.name, document.salary );
							
							
							//	Close connection
							db.close();
							
						});
						
					}
					
				} );
			}
			else 
				console.log( error.message );
			
		});
		
		
	} else { 
		console.log('There was a problem');
		console.log( error.message );
				
	}
	
	
	
});

function addEmployee( collection,  employee ) {
	
	collection.insert( employee );
	console.log('Added!');
}

function getEmployees( collection, cb ) {
	
	//console.log( collection.find({}) );
	
	collection.find({}, function( error, cursor ){
		
		if(!error) {
			
			cursor.toArray( function(error, arr) { 
				
				var answer = arr;
				
				cb( error, answer );
				
			});
			
		} else 
			console.log(error.message);
		
	});
}