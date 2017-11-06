var Product = require('./Product.js');
var Cart = require('./Cart.js');

var myCart = new Cart();

var myProduct = new Product();

myProduct.id = 1;
myProduct.name = 'Bamaba';
myProduct.price = 5;
//myProduct.print();
myCart.add( myProduct );


var myProduct = new Product();	//	try remove this line
myProduct.id = 2;
myProduct.name = 'Bisli';
myProduct.price = 8;
//myProduct.print();
myCart.add( myProduct );
myCart.print();


//var p1 = new Product();
//p1.print();
//
//var p2 = new Product('1','Bamba',5);
//p2.print();
//
//var p3 = new Product('2');
//p3.name = 'Bisli';
//p3.price = 8;
//p3.print();
