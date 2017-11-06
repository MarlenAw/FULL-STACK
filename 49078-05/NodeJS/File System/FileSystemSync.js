const fs = require('fs');

//	Read a file synchronously
//	means, NodeJs will wait until it loads the entire file data

var myData = fs.readFileSync('myData.txt');

//	myData is a Buffer
//	convert it to string by using .toString()

console.log(myData.toString());

console.log('See this line?');


