var EventEmitter = require('events').EventEmitter;

//	e is a reference of a new instance of EventEmitter
var e = new EventEmitter();

e.on('eventName',function(){
	
	console.log('Do something because of eventName');
	
});


e.on('newOrder',function(orderNumber){
	console.log('Save order #' + orderNumber + ' details to db');
});

e.on('newOrder',function(orderNumber){
	console.log('Send confirmation email of order #' + orderNumber);
});


e.once('newOrder',function(orderNumber){
	console.log('Loolololololololo!');
});


console.log('doing further things...');
console.log('bla bla bla...');

//	Announcinig an event
e.emit('newOrder',1000);
e.emit('newOrder',1001);
e.emit('newOrder',1002);
e.emit('HackerDetected');