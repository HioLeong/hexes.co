hexApp.controller('SettingsCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {
            $scope.userDetails = {};

            $scope.init = function() {
                var genderWidth = $('.email').width();
                $scope.populateDate();
                genderWidth = (genderWidth / 2)*0.98;
                $(".register>form>fieldset>#leftProfile>.toggle>.toggle-label").css('width',genderWidth);

                $('.switchToggle').click(function(e){
                  e.preventDefault(); // The flicker is a codepen thing
                  $(this).toggleClass('toggle-on');
                });
                
                loginService.getLoginId(function(id) {
                    if (id != 'Error') {
                        $http.get('profile/getUserDetails/'+id)
                        .success(function(data, status, headers, config) {
                                $scope.userDetails = data;
                                $http.get('/profile/getUserDetails/' + data.idUser)
                                .success(function(data, status, headers, config) {
                                    $scope.user = data;
                                    $('.profpic .hexagon-in2').css('background','url("'+data.picture_url+'")');
                                    $('.profpic .hexagon-in2').css('background-position','50%');
                                    $('.profpic .hexagon-in2').css('background-size','200%');
                                    //$scope.getSchoolName();
                                });


                        });
                    }
                });
            };

            $scope._convertDate = function(dateOfBirth) {
                return dateOfBirth.year + '-' + dateOfBirth.month + '-' + dateOfBirth.day;
            };

            $scope.updateUserDetails = function(userDetails) {
                if (!userDetails) {
                    $scope.status = 'error';
                    return;
                }

                userDetails.dateOfBirth = {};
                userDetails.dateOfBirth.day = $('#dayList').find(':selected').val();
                userDetails.dateOfBirth.month = $('#monthList').find(':selected').val();
                userDetails.dateOfBirth.year = $('#birthYearList').find(':selected').val();
                userDetails.dateOfBirth = $scope._convertDate(userDetails.dateOfBirth);
                userDetails.relStatus = $('#relStatus').find(':selected').val();
                userDetails.gender = $('#genderToggle').find(':checked').val();

                var data = JSON.stringify(userDetails);
                $.post('settings/updateUserDetailsFromPost', 'data='+data, function(data) {
                    location.href="home#/profile"
                });
            };

            $scope.populateDate = function() {
                var cur_year=new Date().getFullYear();
                var obj1=document.getElementById("birthYearList");
                var obj2=document.getElementById("yearList");
                var obj4=document.getElementById("dayList");

                for (var i=2014; i > 1900; i--) {  
                    opt = document.createElement("option");
                    opt.value = i;
                    opt.text=i;
                    obj2.appendChild(opt);
                }
                for (var i=2009; i > 1900; i--) {  
                    opt = document.createElement("option");
                    opt.value = i;
                    opt.text=i;
                    obj1.appendChild(opt);
                }
                for (var i=1; i < 32; i++) {  
                    opt = document.createElement("option");
                    opt.value = i;
                    opt.text=i;
                    obj4.appendChild(opt);
                }
            };

            $scope.init();
        }
]);
