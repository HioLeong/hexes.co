hexApp.config(['$routeProvider', 
        function($routeProvider) {
            $routeProvider.
            when('/:id', {
                    templateUrl: 'partials/viewUserProfile.html',
                    controller: 'ProfileCtrl'
            });
}]);

hexApp.controller('ProfileCtrl', ['$scope', '$http', '$routeParams',
        function($scope, $http, $routeParams) {
            $scope.user;

            $scope.getUser = function() {
                    $http.post('/getUser/' + $routeParams.id)
                    .success(function(data, status, headers, config) {
                        $scope.user = data;
                        console.log(data);
                    });
            };
        }
]);
