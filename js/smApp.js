//Define an angular module for our app
var app = angular.module('smApp', []);
 
//Define Routing for app
app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
    when('/', {
        templateUrl: 'views/Home.html',
        controller: 'MainController'
	}).
	when('/Services/', {
        templateUrl: 'views/Services.html',
        controller: 'MainController'
	}).
	when('/Profile/', {
        templateUrl: 'views/Profile.html',
        controller: 'MainController'
	}).
	when('/AboutUs/', {
        templateUrl: 'views/AboutUs.html',
        controller: 'MainController'
	}).
	when('/Careers/', {
        templateUrl: 'views/Careers.html',
        controller: 'ContactUsController'
    }).
    when('/ContactUs/', {
        templateUrl: 'views/ContactUS.php',
        controller: 'ContactUsController'
    }).
    otherwise({
        redirectTo: '/'
    });
}]);
 
app.controller('MainController', function($scope, $routeParams) {
     
});
 
app.controller('ContactUsController', function($scope, $routeParams) {

});