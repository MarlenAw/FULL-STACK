var mongodb = require("mongodb");

var config = {
	http_port: 3000,
	db_host: 'localhost',
	db_port: '27017'
}

//	Create a reference to our database
var db = mongodb.Db("work", new mongodb.Server( config.db_host, config.db_port ) );


//	Connect to the database
db.open(function(error){
	
	if(!error) {
		
		//	Connected
		console.log('Connected to MongoDB');
		
		
		db.collection("employees",function(error, collection){
			
			if(!error) {
				
				//	Collcation recieved
				
				collection.find({}, function( error, cursor ){
					
					if(!error) {
						
						//	All is good
						
						cursor.toArray( function( error, arr ) { 
						
							if(!error) {
								
//								arr.forEach( employee ) {
//									console.log( employee.name );
//								}								
								
								arr.forEach( function( employee ) {
									
									console.log( employee.name );
									
								});
								
							} else {
								
								//	There was a problem converting cursor to array
								console.log('Could not convert cursor to an array');
								console.log( error.message );
							}
							
						} );
						
						
					} else {
						console.log('There was a problem with find');
						console.log( error.message );
					}
					
				});
				
			} else {
				
				//	Could not access the required collection
				console.log('There was an error accessing the collection');
				console.log( error.message );
				
			}
			
		});
		
		
		//	Close connection (afer done using)
		db.close();
	}
	else {
		
		//	Could not connect
		console.log('There was a problem connecting to MongoDB');
		console.log(error.message);
	}
		
});