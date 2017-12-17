var app = angular.module('Phono', ['ngRoute']);

app.config(function ($routeProvider, $locationProvider) {

    $routeProvider
        .when('/', {
            templateUrl: '/templates/index.html',
            controller: 'ThreadListController'
        })

        .when('/login', {
            templateUrl: '/templates/login.html',
            controller: 'APIController'
        })

        .when('/#', {
            templateUrl: '/templates/logged_in.html'
        })

        .when('/register', {
            templateUrl: '/templates/register.html',
            controller: 'RegisterController'
        });


    // configure html5 to get links working on jsfiddle
    $locationProvider.html5Mode({enabled: true, requireBase: false});
});

var token = localStorage.getItem('token') || "",
    name = localStorage.getItem('name') || "",
    authenticated = token;

var api = "http://www.phonoright.com";
var api_t = "http://localhost:8000";

app.controller('RegisterController', function ($scope, $http) {
    $http.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    $http.defaults.headers.common.Authorization = "Bearer  " + token      ;
    $http.defaults.withCredentials = true;

    console.log("Die Seite ist zu sehen!");

});

app.controller('ThreadListController', function ($scope, $http, $routeParams) {
    $http.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    $http.defaults.headers.common.Authorization = "Bearer " + token      ;
    $http.defaults.withCredentials = true;

    console.log("Die Seite ist zu sehen!");

});

//LOGIN LOGOUT
app.controller('APIController', function ($scope, $http, $window) {
    $http.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    $http.defaults.headers.common.Authorization = "Bearer " + token      ;
    $http.defaults.withCredentials = true;

    $scope.login = function () {
        $http.post(api_t +'/login', {firstname: $scope.vorname, lastname: $scope.nachname, password: $scope.password})
            .then(function (response) {
                console.log('response', response);

                if (response.data.token) {
                    $scope.authenticated = true;
                    token = response.data.token;
                    name = response.data.user.name;

                    localStorage.setItem('token', token);
                    localStorage.setItem('name', name);
                }
            });
    };

    $scope.logout = function () {
        $http.post(api_t + '/logout')
            .then(function (response) {
                console.log('success', response);
                $window.location.href = '/';
                $window.location.reload(true);

                localStorage.removeItem('token');
            }, function (error) {
                console.log('error', error);
                // Force Angular to reload itself from the server
                // and trigger redirection to the login screen
                $window.location.href = '/';
                $window.location.reload(true);

                localStorage.removeItem('token');
            });
    }

    $scope.authenticated = authenticated;
    $scope.name = name;
});