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

Phonebook.prototype.searchByName = function( name ) { 
	
	console.log('Looking for ' + name);
	
	for(index in this.list)	
		if(this.list[index].name === name) {
			console.log(this.list[index].phone);
			return;
		}
	
	
	//	if reached this line, then name not found
	console.log('Not found');
	
}

//	Export Phonebook so that it could be used outside of this file
module.exports = Phonebook;
