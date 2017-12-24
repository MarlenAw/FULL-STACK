var middleware = {

	doSomething: function(request, response, next) {
		
		console.log('Doing something upon request');
		
		//	Bring next chunk
		next();
	},
	
	logger: function(request, response, next) {
	
	
	
		console.log(request.method + ' ' + request.url + ' ' + new Date().toString());

	
		//	Bring next chunk (of request)
		next();
	}
	
}

module.exports = middleware;


////	Using a JSON key as a function
////
//var myFirned = { 
//	name: 'Alex', 
//	age: 25, 
//	sayHi: function() {
//		return 'Hi, my name is ' + this.name;
//	}  
//}
//
//console.log(myFirned.sayHi());



