//var x = require('./List.js');
//
//var myList = new x();

//	util is core feature of NodeJS  (built-in)
var util = require('util');

//	List is a generic prototype
var List = require('./List.js');

//	Phonebook is "our own implementation" of List
function Phonebook() {
	this.arr = [];
}

//	Let Phonebook "inherits" List methods
util.inherits(Phonebook, List);


//	Use Phonebook as List
var myBook = new Phonebook();

myBook.add( { name: 'Alex', phone: '050' } );
myBook.add( { name: 'Dana', phone: '051' } );

console.log(  myBook.size() );

