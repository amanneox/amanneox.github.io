var app = angular.module("myApp", ['ngRoute','angular-loading-bar'])
app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
    cfpLoadingBarProvider.includeSpinner = false;
    cfpLoadingBarProvider.latencyThreshold = 10;
  }]);
app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "data.php?type=java"
  })
  .when("/c", {
    templateUrl : "data.php?type=c"
  })
  .when("/python", {
    templateUrl : "data.php?type=python"
  })
  .when("/java", {
    templateUrl : "data.php?type=java"
  })
  .when("/script", {
    templateUrl : "data.php?type=script"
  });

});
app.controller("MyCtrl", function($scope) {
  $scope.activity = [
    { name: "latest",   count: 20 },
    { name: "trending",   count: 55 },
    { name: "most viewed",   count: 20 }
  ];
});
