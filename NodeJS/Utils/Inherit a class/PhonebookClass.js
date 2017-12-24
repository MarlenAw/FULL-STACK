var EventEmitter = require('events').EventEmitter;

class Phonebook extends EventEmitter {
	
	constructor() {
		
		super();	//	call super class constructor first thing
		
		this.list = [];
	}
	
	addContact(contact) {
		this.list.push(contact);
		
		this.emit('newContact', contact.name);
	}
}

var x = new Phonebook();

x.on('newContact',function( somebody ){
	console.log(somebody + ' added');
});

x.addContact({ name:'Alexa', phone: '123' });
x.addContact({ name:'Dan', phone: '345' });

