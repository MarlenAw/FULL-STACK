var stream = require('stream');
var fs = require('fs');

//	Create a Readable stream instance
var readableFibonacci = stream.Readable();
	
//	Implement fibonacci as a readable stream
readableFibonacci._read = function() {

	var a = 1;
	var b = 1;
	var c;

	var n = 20;



	for(var i=1; i <= n; i++) {

		if(i == 1) {
			this.push(a.toString() + '\n');
			this.push(b.toString() + '\n');		

			i++;	//	skip next itteration, because of 1 1		
		}
		else {

			c = a + b;

			this.push(c.toString() + '\n');

			a = b;
			b = c;

		}
	}
	
	
	//	end of stream
	this.push(null);
	
}



myWritableStream = process.stdout;
myWritableStream = fs.createWriteStream('fibonacci.txt');


readableFibonacci.pipe( myWritableStream );