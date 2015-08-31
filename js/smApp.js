var app = angular.module("smApp",[]);

app.config(['$routeProvider',function($routeProvider) {}]);

app.controller('sm-controller', function($scope, $http){
	$scope.firstname= "shibu";
	$scope.lastname = "manoharan";
	$scope.fullname = $scope.firstname + " " + $scope.lastname;
	$http.get("http://www.w3schools.com/angular/customers_mysql.php").success(function(response){
		$scope.countries = response.records;
	});
	$scope.master = {name:"shibu", age:36};
	$scope.reset = function(){
		$scope.copy = angular.copy($scope.master);
	}
	$scope.reset();
	$scope.$watch('password1', function(){
		$scope.valid = ($scope.password1 != $scope.password2);
	})
	
});

