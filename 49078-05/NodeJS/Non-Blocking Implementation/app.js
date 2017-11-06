//var j = require("./Phonebook.js");
//var ooo = new j();

var Phonebook = require("./Phonebook.js");

var ooo = new Phonebook();



ooo.addContact( { name: 'Alex', phone: '050'} );
ooo.addContact( { name: 'Dana', phone: '051'} );

//	Calling Sync Search, Option one:
var phone = ooo.searchByNameSync('Alex');
console.log(phone);

//	Calling Sync Search, Option two:
console.log( ooo.searchByNameSync('Dana') );


//	Calling Async Search, Option one (and only)

ooo.searchByNameAsync('Alex', function( phone ){
	
	console.log(phone);
});



ooo.searchByNameAsync('Dana', function( phone ){
	
	console.log(phone);
});


//	 Additional Action
console.log('Further things to do.. ');


//ooo.print();