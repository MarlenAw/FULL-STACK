var fs = require('fs');

var myReadableStream = fs.createReadStream('myData.txt');

myReadableStream.pipe(process.stdout);

myReadableStream.pipe(response);

response