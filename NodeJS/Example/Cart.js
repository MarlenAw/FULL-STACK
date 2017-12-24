var Product = require('./Product.js');

var Cart = function() {
	this.list = [];
}

Cart.prototype.add = function( product ) {
	
	if(product instanceof Product)
		this.list.push(product);
	else
		throw new Error('add() must get a Product item');
	
}

Cart.prototype.print = function(){
	this.list.forEach(function( product ){		
		product.print();
	});
}

module.exports = Cart;