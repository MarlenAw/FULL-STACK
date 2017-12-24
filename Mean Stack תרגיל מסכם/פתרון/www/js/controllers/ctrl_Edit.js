app.controller('ctrl_Edit',function($scope,$http, $location, $routeParams){
		
	console.log('ctrl_Edit loaded');
	
	var id = $routeParams.id;
	
	var obj;
	
	console.log('Requesting object of id', id);
	
	$http.get('/getContact/' + id).then(function(response){
		
		obj = response.data;
		
		console.log('Object recevied', obj);
		
		$scope.name = obj.name;
		$scope.phone = obj.phone;
			
		
		// 	OK	
	}, function(response){
		
		//	error
		console.log( response.statusText );
		
	});
	
	
	$scope.save = function() {
		
		obj.name = $scope.name;
		obj.phone = $scope.phone;
		
		console.log('Updating object', obj);
		
		$http.post('/updateContact', obj).then(function(response){
			
			//	OK
			console.log('ACK!');
			$location.path('/');
			
		}, function(response){
			
			//	Error
			console.error( response.statusText);
		})
		
		
	}
})