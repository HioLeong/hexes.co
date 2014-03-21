hexApp.controller('ActivitiesLogCtrl', ['$scope', '$http', 
        function ($scope, $http) {
            $scope.activities;

            $scope.init = function() {
                $scope.getAllActivities();
            };

            $scope.getAllActivities = function() {
                $http.get('profile/getAllActivities') 
                .success(function(data, status, header, config) {
                    $scope.activities = data;
                    console.log(data);
                });
            };

            $scope.init();

        }
]);

