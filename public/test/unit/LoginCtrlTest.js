(function() {
        describe('LoginCtrl Test', function(){
            var scope, httpBackend;

            beforeEach(angular.mock.module('hexApp'));
            beforeEach(angular.mock.inject(function($rootScope, $controller, $httpBackend){
                httpBackend = $httpBackend;
                $httpBackend.when('POST', 'login').respond('success');
                scope = $rootScope.$new();
                $controller('LoginCtrl', {$scope: scope});
            }));

            it('Check user details validity - Success', function() {
                var loginDetails = {
                    username : 'username',
                    password : 'password'
                };

                scope.checkLogin(loginDetails);
                httpBackend.flush();
                expect(scope.status).toBe('success');
            });

            it('Check user details validity - Error', function() {
                var loginDetails;

                scope.checkLogin(loginDetails);
                expect(scope.status).toBe('error');
            });
        })
})();
