var mongodb = require("mongodb");
var ObjectId = mongodb.ObjectId;

var config = {
	http_port: 3000,
	db_host: 'localhost',
	db_port: '27017'
}

//	Create a reference to our database
var db = mongodb.Db("work", new mongodb.Server( config.db_host, config.db_port ) );


var idToFind = '58ff837c40679d1895188b4e';
var _idToFind = new ObjectId( idToFind );

//	Connect to the database
db.open(function(error){
	
	if(!error) {
		
		//	Connected
		console.log('Connected to MongoDB');
		
		
		db.collection("employees",function(error, collection){
			
			if(!error) {
				
				//	Collcation recieved
				
				collection.findOne({ _id: _idToFind }, function( error, obj ){
					
					if(!error) {
						
						//	All is good
						
						console.log( obj.name );
							
					}												
					else {
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