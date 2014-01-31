var hexApp = angular.module('hexApp',[]);

hexApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('((');
    $interpolateProvider.endSymbol('))');
});

hexApp.controller('LoginCtrl', ['$scope', 
        function($scope) {
            $scope.temp = '1';
            $scope.fun = function() {
                $scope.temp = 'clicked';
            }
        }
]);
