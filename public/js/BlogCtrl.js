hexApp.controller('BlogCtrl', ['$scope', '$http', 
        function($scope, $http) {
            $scope.blogs;

            $scope.title;
            $scope.content;

            $scope.addBlog = function() {
                var data = {};
                data.title = $scope.title;
                data.content = $scope.content;
                $.post('blog/addBlog', 'data='+JSON.stringify(data), function(data) {
                    console.log(data);
                    $scope.getAllBlogs();
                });
            };

            $scope.getAllBlogs = function() {
                $http.get('blog/getAllBlogs')
                .success(function(data, status, header, config) {
                    $scope.blogs = data;
                    console.log(data);
                });
            };

            $scope.getAllBlogs();
        }
]);
