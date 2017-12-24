var Phonebook = require('./Phonebook.js');


var myBook = new Phonebook();

myBook.on('newContact',function( contactName ){
	
	console.log('Contact added ' + contactName);
	
});


myBook.addContact( { name: 'Alex', phone: '050' }); 

myBook.print();




console.log('End of Program');