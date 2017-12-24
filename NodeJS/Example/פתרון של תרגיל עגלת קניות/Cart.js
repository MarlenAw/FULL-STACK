var Product = require('./Product.js');
var EventEmitter = require('events').EventEmitter;	//	to be able to emit events
var util = require('util');							//	for the inheritance

var Cart = function() {
	
	//	{ product: ref, qty: 1 }
	
	this.list = [];
}

//	Extend Cart
util.inherits(Cart, EventEmitter);

Cart.prototype.add = function( product ) {
	
	//	Is already exist
	var isExist = false;
	
	//	Cache this
	var that =this;
	
	//	Is product already exist
	this.list.forEach(function(item){
		if(item.product === product) {
			//	Found
			
			//	Update Quantity
			item.qty++;
			
			//	Makr as Exist
			isExist = true;
			
			//	Emit
			//	that is 'this' of the add function
			that.emit('updateCart', item.product.id);
		}		
	});
	
	
	//	If NOT already exist, add to list
	if(!isExist) {
		
		var item = { product: product, qty: 1 }

		if(product instanceof Product) {
			this.list.push( item );
			this.emit('addToCart', item.product.name);
		}
		else
			throw new Error('add() must get a Product item');		
	}

}

Cart.prototype.print = function(){
	this.list.forEach(function( item ){		
		
		item.product.print();
		
		console.log('QTY: ' + item.qty);
		console.log('-----------------');
	});
}

module.exports = Cart;