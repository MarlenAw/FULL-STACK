var People = [{
	name: 'Alex', 
	phone: '050',
	email: 'alex@buganimsystems.com',
	address: {
		street: 'Histadrut 30',
		city: 'Tel Aviv',
		zip: '12345',
		country: 'Israel'
	},
	hobbies: ['swimming','reading'],
	cars: [{
		model: 'BMW',
		color: 'red',
		multimedia: { mp3: true, touchScreen: false }
	},{
		model: 'Fiat',
		color: 'white'		
	}]
},{
	name: 'Dana',
	email: 'dana@gmail.com',
	address: {
		city: 'Haifa',
		country: 'Israel'
	},
	hobbies: ['dancing']
},{
	name: 'Shimshon',
	email: 'shimi@gmail.com',
	hobbies: ['car racing','reading'],
	address: {
		city: 'Haifa'
	},
	cars: [{
		model: 'Golf GTI',
		color: 'Pink Metal',
		mutlimedia: { mp3: true, touchScreen: true }		
	}]
}];


var stringifiedJSON = JSON.stringify(People);

console.log(stringifiedJSON);



//	EX2
//for( index in People) {
//	
//	var person = People[index];
//	
//	var country = person["address"]
//	
//	if(country != undefined) {
//		
//		//	person has an address registry
//		
//		var city = country["city"];
//		
//		if(city == 'Haifa') {
//			
//			console.log( person.name );
//		}
//		
//	}
//}


//	EX3

//var counter = 0;
//
//for( i in People) {
//	var person = People[i];
//	
//	if(person["email"] != undefined) 
//		counter++;
//}
//
//console.log(counter);


//	EX3 Option B
//var found = [];
//
//for( i in People) {
//	var person = People[i];
//	
//	if(person["email"] != undefined) 
//		found.push(person);
//}
//
//console.log( found );
