var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("assets/service.json").then(function (response) {
      $scope.myData = response.data.records;
      $scope.firstname = "John";
  });
});

