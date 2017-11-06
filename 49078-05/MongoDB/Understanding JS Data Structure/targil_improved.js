var fs = require('fs');

var data = JSON.parse( fs.readFileSync('data.json') );

var People = data.People;


console.log(new Date());
console.log('' + new Date());
console.log(new Date().toString());

console.log('' + JSON.stringify(People) );
