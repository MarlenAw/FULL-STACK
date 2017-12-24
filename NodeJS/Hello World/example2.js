var myFile = require('./example1.js');

//console.log( y );


console.log( myFile.y );
//	myFile.y is available because of 
//	exports.y = y in example1.js

console.log(z);
console.log( global.x );