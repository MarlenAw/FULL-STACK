const fs = require('fs');

//	Read a file synchronously
//	means, NodeJs will wait until it loads the entire file data

fs.readFile('myData.txt',function(err, myData){
	
	if(err)
		console.log('There was an error');
	
	else
	//	myData is a Buffer
	//	convert it to string by using .toString()

		console.log(myData.toString());
	
});


console.log('See this line?');
