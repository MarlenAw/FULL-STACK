//	Create AngularJS app
var app = angular.module("contactsApp",[]);


//	Create a GLOBAL Contacts DB (Array)
var aContacts = [];

app.controller("contactForm", function( $scope ){
	
	console.log('contactForm Controller started!');
	
	// Create a new Contact Add function
	$scope.addNew = function() {
		
		var newContact = { 
			name: $scope.name,
			phone: $scope.phone
		};
		
		
		//	Add newContact to array of Contacts
		aContacts.push( newContact );
	}
	
	
	
})