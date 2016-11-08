var app =  angular.module(
    'main-App',
    ['ngRoute','angularUtils.directives.dirPagination']
    );

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'plare/home.html',
                controller: 'AdminController'
            }).
            when('/list', {
                templateUrl: 'plare/usuarios.html',
                controller: 'UsuariosController'
            });
}]);

app.value('apiUrl', 'http://demoa.local/plare/usuarios/all');