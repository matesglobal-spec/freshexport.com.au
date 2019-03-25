var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);
app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/blog', {
               templateUrl: "templates/blog.php"
                
            }).
            when('/contact', {
                templateUrl: 'templates/contact.php'
               
            }).
            when('/',{templateUrl: "templates/index.php"}).
            when('/product',{templateUrl: 'templates/product.php'}).
            when('/single',{templateUrl: 'templates/single.php'});
}]);