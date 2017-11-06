app.controller('ctrl_List', function($scope, $http, $location){
	
	console.info('ctrl_List loaded');	
	
	//	load sContacts from Server	
	
	console.log('Requesting /getContacts');
	
	$http.get('/getContacts').then(function(response){
		
		//	OK		
		console.log('Received', response.data);
		aContacts = response.data;
		
		$scope.arr = aContacts;		//	Why the view was not updated after aContacts update
		
	} , function(response){
		
		//	error
		console.error( response.statusText );
		
	});
	
	
	$scope.goToAddContact = function(){
		
		$location.path('/addContact');
		
		//	WRONG -> window.location.href = ''
	}
	
	$scope.editContact = function( id ){ 
		
		console.log('Switching to edit form of id', id);
		
		$location.path('/editContact/' + id);
		
		
	}

});
