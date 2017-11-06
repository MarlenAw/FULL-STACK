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
		
		//	Insert a new document to db
		
		//	Create a new object
		var emp = { name: 'Gilad', dept: 'finance', salary: 20000 };
		
		//	Access a collection
		db.collection("employees", function( error, collection ){
			
			collection.insert( emp );
			
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