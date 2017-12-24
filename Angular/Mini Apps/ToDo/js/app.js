var app = angular.module("ToDo",[]);

//	Data
var aTasks = [];


app.controller("addTaskController",function($scope){
	
	console.log("addTaskController started");
	
	
	$scope.addNewTask = function() {
		
		console.log("addNewTask activated");
		
		aTasks.push({
			title: $scope.title,
			description: $scope.description,
			priority: $scope.priority
		});
		
	}
	
});

app.controller("listTasks",function($scope){
	
	$scope.tasks = aTasks;
	
});