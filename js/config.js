var app = angular.module("APP", []);

app.controller("StoreCtrl", ['$scope', '$http', function($scope, $http){

    $scope.productQuery = {
        "action" : "getListing"
    };

    $http({
        method  : 'POST',
        url     : 'php/products.php',
        data    : $.param($scope.productQuery),
        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).success(function(data){
        $scope.products = data;
    })
}]);