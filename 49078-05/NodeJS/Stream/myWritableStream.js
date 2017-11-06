//var stream = require('stream');
//var myWritableStream =  stream.Writable();

var myReadableStream = require('./myReadableStream.js');

var myWritableStream = require('stream').Writable();

myWritableStream._write = function(chunk, encoding, next ) {
	
	console.log( chunk.toString() );
	
	next();
}

myReadableStream.pipe( myWritableStream );