var a = 1;
var b = 1;
var c;

var n = 15;

for(var i=1; i <= n; i++) {
	
	if(i == 1) {
		console.log(a);
		console.log(b);		
				
		i++;	//	skip next itteration, because of 1 1		
	}
	else {

		c = a + b;
	
		console.log(c);
	
		a = b;
		b = c;
		
	}
}