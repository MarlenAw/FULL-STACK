function Phonebook() {
	this.list = [];
}


Phonebook.prototype.addContact = function( contact ) {
	
	//	add contact to list of Phonebook
	//	assuming contact is a JSON object like { name: '', phone: '' }
	this.list.push( contact );
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

