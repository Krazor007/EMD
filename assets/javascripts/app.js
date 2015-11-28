var app = angular.module('navapp', ['ngRoute','ngSanitize']);

var path = 'assets/templates/';

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: path + 'home.html',
        controller: 'HomeCtrl'
      }).
      when('/contactus', {
        templateUrl: path + 'contactus.html',
        controller: 'ContactCtrl'
      }).
      when('/aboutus', {
        templateUrl: path + 'aboutus.html',
        controller: 'AboutCtrl'
      }).
      when('/products', {
        templateUrl: path + 'products.html',
        controller: 'ProductCtrl'
      }).
      when('/admin', {
        templateUrl: path + 'admin.html',
        controller: 'AdminCtrl'
      }).
      otherwise({
        redirectTo: '/'
      });
}]);