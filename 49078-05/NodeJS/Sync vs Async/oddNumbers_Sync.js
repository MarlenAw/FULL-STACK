function oddNumbers( numbers ) {
	
	var arr = [];
	
	for(index in numbers)
		if(numbers[index] % 2)
			arr.push( numbers[index] );
	
	return arr;
}

var numbers = [1,2,3,4,5,6,7,8,9,10];

console.log('Program started');
console.log( oddNumbers( numbers ) );
console.log('Program ended');