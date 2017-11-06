app.controller('ctrl_Add', function( $scope, $http, $location ){
	
	console.info('ctrl_Add loaded');
	
	$scope.save = function(){
		
		var obj = { 
			name: $scope.name,
			phone: $scope.phone
		}
		
		console.log('Sending', obj);
		
		$http.post('/addContact',obj).then(function(response){

			//	OK						
			console.log('Accepted');
			
			//	add to aContacts ( not necessary if ctrl_list access the db every time it's been loaded)
			//aContacts.push( response.data );
			
			//	back to list
			$location.path('/');
			
		},function(response){
			//	error
			console.error( response.statusText );
		});
		
	}
	
});