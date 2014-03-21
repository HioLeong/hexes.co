hexApp.controller('PhotosCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {
            $scope.options = {
                target: '#output',
                beforeSubmit: $scope.beforeSubmit,
                afterSuccess: $scope.afterSuccess,
                uploadProgress: $scope.OnProgress,
                resetForm: true
            };

            $scope.uploadPhoto = function() {
                var file = document.getElementById('UploadFile').files[0];
                $.post('photos/uploadPhoto', 'id='+file, function(data) {
                    console.log(data);
                });
            };

            $scope.errorHandler = function(data) {
                console.log('error');
                console.log(data);
            };

            $scope.beforeSubmit = function() {
            };

            $scope.afterSuccess = function(data) {
                console.log(data);
            };

            $scope.OnProgress = function(event, position, total, percentComplete) {
            };

            $scope.init = function() {
                $("#fileuploader").uploadFile({
                        method: 'POST',
                        url:"http://localhost:8888/photos/uploadPhoto",
                        fileName:"file",
                        onSuccess: function(files, data, xhr, pd) {
                            console.log(data);
                        }

                });
            }

            $scope.init();
        }
]);

hexApp.controller('UploadProfilePictureCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {
            $scope.uploadProfilePicture = function() {
                $("#fileuploader").uploadFile({
                        method: 'POST',
                        url:"http://localhost:8888/photos/uploadProfilePicture",
                        fileName:"file",
                        onSuccess: function(files, data, xhr, pd) {
                            console.log(data);
                        }

                });

            };

            $scope.uploadProfilePicture();
    }
]);
