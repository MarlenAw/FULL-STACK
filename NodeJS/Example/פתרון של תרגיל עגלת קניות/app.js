var Product = require('./Product.js');
var Cart = require('./Cart.js');


var myCart = new Cart();

myCart.on('addToCart',function(itemName){
	console.log('Item ' + itemName + ' successfully added to the cart');
});

myCart.on('updateCart',function(itemId){
	console.log('Item id ' + itemId + ' updated');
});

var myProduct = new Product();

myProduct.id = 1;
myProduct.name = 'Bamaba';
myProduct.price = 5;
myCart.add( myProduct );


var myProduct = new Product();	//	try remove this line
myProduct.id = 2;
myProduct.name = 'Bisli';
myProduct.price = 8;
myCart.add( myProduct );


//	This will only update the qty
myCart.add( myProduct );


//	This will also update the qty, 
//	because x and myProduct are references of 
//	the SAME product (same instance)
var x = myProduct;
myCart.add(x);	


//	This will ADD a product
//	because myProduct is a DIFFERENT product (different instance)
//	even though both instances hold the same details
var myProduct = new Product();	//	try remove this line
myProduct.id = 2;
myProduct.name = 'Bisli';
myProduct.price = 8;
myCart.add( myProduct );





//	Refering a Product inside a JSON
//var obj = { x: myProduct };
//myProduct.print();
//obj.x.print();	//	Works!


//	Trying to add an object that is not a Product data type
//	var x = { id: 3, name: 'Milki', price: 3.5 };
//	myCart.add( x );	//	Will throw an Error because x is not a Product

//	Print Cart Items
myCart.print();
