var app = angular.module('Phono', ['ngRoute']);

app.config(function ($routeProvider, $locationProvider) {

    $routeProvider
        .when('/', {
            templateUrl: '../templates/index.html',
            controller: 'ThreadListController'
        })

        .when('/register', {
            templateUrl: '../templates/register.html',
            controller: 'RegisterController'
        });


    // configure html5 to get links working on jsfiddle
    $locationProvider.html5Mode({enabled: true, requireBase: false});
});

app.controller('RegisterController', function () {

});

app.controller('ThreadListController', function () {

});