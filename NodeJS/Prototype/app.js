//var j = require("./Phonebook.js");
//var ooo = new j();

var Phonebook = require("./Phonebook.js");

var ooo = new Phonebook();



ooo.addContact( { name: 'Alex', phone: '050'} );
ooo.addContact( { name: 'Dana', phone: '051'} );

ooo.searchByName('Alex');


//ooo.print();