var util = require('util');
var EventEmitter = require('events').EventEmitter;

function Phonebook() {
	this.list = [];
}

//	Extend Phonebook - Make Phonebook inherit EventEmiiter capabilities
util.inherits(Phonebook, EventEmitter);


//	Add further methods to Phonebook

Phonebook.prototype.addContact = function( contact ) {
	
	//	add contact to list of Phonebook
	//	assuming contact is a JSON object like { name: '', phone: '' }
	this.list.push( contact );
	
	
	//	Raise an event
	this.emit('newContact', contact.name);
}

Phonebook.prototype.print = function() {
	
	for(index in this.list) {
		
		//	console.log( this.list[index].name + " " + this.list[index].phone );
		
		var currentContact = this.list[index];
		
		console.log( currentContact.name + " " + currentContact.phone );
	}
		
	
}

Phonebook.prototype.searchByNameSync = function( name ) { 
	
	console.log('Looking for ' + name);
	
	var phone = null;
	
	for(index in this.list)	
		if(this.list[index].name === name) {
			phone = this.list[index].phone;			
			break;
		}
		
	//	if reached this line, then name not found
	return phone;
	
}


Phonebook.prototype.searchByNameAsync = function(name, f) {
	
	var phone = this.searchByNameSync(name);
			
	f(phone);
}


//	Export Phonebook so that it could be used outside of this file
module.exports = Phonebook;

