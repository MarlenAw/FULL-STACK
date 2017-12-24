var n = 5;

function factorial(n) {
	var result=1;
	
	for(var i=1; i <= n; i++)
		result *=  i;
	
	return result;
}

function recursiveFactorial(n) {
	if(n==0)
		return 1;
	else
		return n * recursiveFactorial(n-1);
}

//console.log(factorial(0));	//	1
//console.log(factorial(1));	//	1
//console.log(factorial(2));	//	2
//console.log(factorial(3));	//	6
//console.log(factorial(4));	//	24
//console.log(factorial(5));	//	120


//console.log(recursiveFactorial(0));	//	1
//console.log(recursiveFactorial(1));	//	1
//console.log(recursiveFactorial(2));	//	2
//console.log(recursiveFactorial(3));	//	6
//console.log(recursiveFactorial(4));	//	24
//console.log(recursiveFactorial(5));	//	120
