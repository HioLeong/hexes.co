hexApp.config(['$routeProvider', 
        function($routeProvider) {
            $routeProvider.
            when('/', {
                    templateUrl: 'partials/viewUserProfile.html',
                    controller: 'ProfileCtrl'
            });
}]);

hexApp.controller('ProfileCtrl', ['$scope', '$http',
        function($scope, $http) {
        }
]);
