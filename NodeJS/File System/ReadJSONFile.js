var fs = require('fs');

fs.readFile('myJSON.json',function(e,data){
	
	var arr = JSON.parse(data);
	
	console.log( arr.length );
	
});