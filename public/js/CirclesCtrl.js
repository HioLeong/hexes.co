hexApp.controller('CirclesCtrl', ['$scope', '$http', 'loginService',
        function($scope, $http, loginService) {
            $scope.getAllCircles = function() {
                loginService.getLoginId(function(id) {
                    $http.get('circle/getAllCircles/'+id)
                    .success(function(data, status, header, config) {
                        $scope.activities = data;
                        console.log(data);
                    });
                });
            };

            $scope.removeRow = function(id) {
                $('#'+id).remove();
            };
            $scope.getAllCircles();
        }
]);
