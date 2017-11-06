//	Create the phonebook Angular App
var app = angular.module("phonebook",[]);


//	Data
var aContacts = [];



//	CONTROLLERS -----------------------------

app.controller("addContact",function( $scope ){
	
	console.log("addContact controller started");
	
	$scope.addNew = function(){
		
		
//		var contact = {
//			name: $scope.name ,
//			phone: $scope.phone
//		};
//		
//		aContacts.push( contact  );
		
		aContacts.push({
			name: $scope.name,
			phone: $scope.phone
		});
		
	}
	
});


app.controller("listContacts",function($scope){
	
	console.log("listContacts controller started");
			
	$scope.aContacts = aContacts;
	
});
