app.controller('homeController', function($scope){
	
	console.log('homeController loaded');
	
	$scope.db = db;
	
});

app.controller('addController', function($scope){
	
	console.log('addController loaded');
	
	$scope.db = db;
	
});

app.controller('editController', function($scope, $routeParams, $location){
	
	console.log('editController loaded');
	
	$scope.db = db;
	$scope.id = $routeParams.id;
	
	$scope.Save = function() {
		
		//	Save changes
		//
		
		//	Go back to start page
		$location.path("/");
	}
	
});