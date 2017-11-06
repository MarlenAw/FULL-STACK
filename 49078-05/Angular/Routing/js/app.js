var app = angular.module('myApp',['ngRoute']);

var db = [
	{ name: 'Alex', phone: '052', id: 1 },
	{ name: 'Dana', phone: '053', id: 2 },
	{ name: 'James', phone: '054', id: 3 }
];

//	Routing Configuration
app.config(function($routeProvider){
	
	console.log('Configuring routing..');
	
	
	$routeProvider
		.when('/',{
			templateUrl: 'views/home.html',
			controller: 'homeController'
		})
		.when('/add',{
			templateUrl: 'views/add.html',
			controller: 'addController'
		})
		.when('/edit/:id',{
			templateUrl: 'views/edit.html',
			controller:	 'editController'
	})
	
});