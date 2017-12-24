var middleware = {
	
		logger: function(request, response, next){
		
		var logData = [];
		
		logData.push( new Date().toString() );
		logData.push( request.method );
		logData.push( request.connection.remoteAddress );	//	client ip
		logData.push( request.url );		
		
		console.log( logData.join(' ') );		
		
		next();	
		
	}
}

module.exports = middleware;