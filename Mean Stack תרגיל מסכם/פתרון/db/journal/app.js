var app = angular.module('phonix',['ngRoute']);

var aContacts = [];

app.config(function($routeProvider){
	$routeProvider
		.when('/',{ templateUrl: 'views/list.html', controller: 'ctrl_List' })
		.when('/addContact', { templateUrl: 'views/form.html', controller: 'ctrl_Add' })
		.when('/editContact/:id', { templateUrl: 'views/form.html', controller:'ctrl_Edit'})
	
});