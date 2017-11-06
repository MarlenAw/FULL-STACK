var Product = function(id=0,name='',price=0){
	this.id = id;
	this.name = name;
	this.price = price;
}

Product.prototype.print = function() {
	
	console.log(this.id, this.name, this.price);
	
}

module.exports = Product;