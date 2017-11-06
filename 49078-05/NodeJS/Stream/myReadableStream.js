var stream = require('stream');

//	Create a "Readable" stream
var myReadableStream = stream.Readable();

//	Define your own readable stream function
myReadableStream._read = function() {
	
	var i = 1;
	while(i <= 10) {
		this.push(i.toString());	
		i++;
	}
	
	//	EOF
	this.push(null);	//	null means End of Stream - or- End Of File
	
}

module.exports = myReadableStream;

//
//
//myReadableStream.pipe(process.stdout);
//
//
////	VS Sync
//
//function oneToTen(){
//	var st = '';
//	var i = 1;
//	while(i <= 10) {
//		st += i;
//		i++;
//	}
//	
//	return st;
//}
//
//console.log( oneToTen() );
//console.log('This must wait');
//
////	VS	Async
//
//function oneToTen(cb) {
//	var st = '';
//	var i = 1;
//	while(i <= 10) {
//		st += i;
//		i++;
//	}
//	
//	cb(st);	
//}
//
//oneToTen(function(output){
//	console.log(output);
//});
//
//console.log('This will continue');
