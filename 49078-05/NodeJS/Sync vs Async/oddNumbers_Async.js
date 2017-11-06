function oddNumber( numbers , cb) {
	
	setTimeout(function(){
		
		var arr = [];

		for(index in numbers)
			if(numbers[index] % 2)
				arr.push( numbers[index] );

		cb( arr );
		
	},50);
	
}


var myNumbers = [1,2,3,4,5,6,7,8,9,10];

console.log('Program started');

oddNumber(myNumbers, function(result){
	console.log(result);
});

console.log('Program continuing');