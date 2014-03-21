hexApp.config(['$routeProvider', 
        function($routeProvider) {
            $routeProvider.
            when('/profile/:id', {
                    templateUrl: 'partials/viewUserProfile.html',
                    controller: 'ProfileCtrl'
            })
            .when('/profile', {
                    templateUrl: 'partials/viewUserProfile.html',
                    controller: 'ProfileCtrl'
            })
            .when('/messages/:id', {
                    templateUrl: 'partials/messagesInbox.html',
                    controller: 'MessagesCtrl'
            })
            .when('/settings', {
                    templateUrl: 'partials/register.html',
                    controller: 'SettingsCtrl'
            })
            .when('/login', {
                    templateUrl: 'partials/login.html',
                    controller: 'LoginCtrl'
            })
            .when('/friends/', {
                    templateUrl: 'partials/friends.html',
                    controller: 'FriendsCtrl'
            })
            .when('/friends/:id', {
                    templateUrl: 'partials/friends.html',
                    controller: 'FriendsCtrl'
            })
            .when('/searchFriends', {
                    templateUrl: 'partials/searchFriends.html',
                    controller: 'SearchFriendsCtrl'
            })
            .when('/photos', {
                    templateUrl: 'partials/uploadPhotos.html',
                    controller: 'PhotosCtrl'
            })
            .when('/notifications', {
                    templateUrl: 'partials/notifications.html',
                    controller: 'NotificationsCtrl'

            })
            .when('/mutualFriends/:id', {
                    templateUrl: 'partials/friends.html',
                    controller: 'MutualFriendsCtrl'
            })
            .otherwise({
                    redirectTo: '/login'
            });
}]);

hexApp.controller('ProfileCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {
            $scope.user;
            $scope.genderCode = {
                '0': 'Male',
                '1': 'Female'
            };
            $scope.relStatusCode = {
                '1': 'Single',
                '2': 'In a Relationship',
                '3': 'Jason/In a Friendzone',
                '4': 'Side Chick',
                '5': 'Tinder'
            };

            $scope.getUser = function() {
                $scope.init();

                // Fix the right panel height

                var leftColumnHeight = $('#leftColumn').height();
                document.getElementById("rightColumn").style.height = leftColumnHeight-119+"px";


                $( "#blogsList" ).click(function() {
                    document.getElementById("blogsListDiv").style.maxHeight = leftColumnHeight+1019+"px";
                });


                $( ".newBlogButton" ).click(function() {
                    if ( $( ".viewBlogs" ).is( ":hidden" ) ) {
                        $( ".viewBlogs" ).slideDown( "slow" );
                        $( ".newBlogs" ).hide();
                    } else {
                        $( ".hideBR" ).css('display','none');
                        $( ".newBlogs" ).css('visibility','visible');
                        $( ".newBlogs" ).slideDown( "slow" );
                        $( ".viewBlogs" ).hide();
                    }
                });

                loginService.getLoginId(function(id) {
                    var getId = $routeParams.id || id;
                    if (($routeParams.id == id) || (!$routeParams.id)) {
                        $('#friendStatus').hide();
                    } else {
                        // See if they are already friends/friended
                        $http.get('profile/isFriends?currentUserId='+
                                id+'&'+'requestUserId='+$routeParams.id)
                            .success(function(data, status, headers, config) {
                                if (data == 'friends') {
                                    $('#friendStatus').hide();
                                }
                            });
                    }

                    $http.get('/profile/getUserDetails/' + getId)
                    .success(function(data, status, headers, config) {
                        $scope.user = data;
                        $scope.getSchoolName();
                    });

                    $scope.getFriendsOfFriend();


                });
            };

            $scope.getGenderFromCode = function(genderCode) {
                return $scope.genderCode[genderCode];
            };

            $scope.getRelStatusFromCode = function(relStatusCode) {
                return $scope.relStatusCode[relStatusCode];
            };

            $scope.getFormattedDate = function(dateString) {
                var date = new Date(dateString);
                month = "January,February,March,April,May,June,July,August,September,October,November,December"
                .split(",")[date.getMonth()];
                return date.getDate() + $scope.nth(date.getDate()) + ' ' + month + ', ' + date.getFullYear();
            };

            $scope.nth = function(day) {
                if(day>3 && day<21) return 'th'; // thanks kennebec
                switch (day % 10) {
                case 1:  return "st";
                case 2:  return "nd";
                case 3:  return "rd";
                default: return "th";
                }
            };

            $scope.getSchoolName = function() {
                $.post('profile/getSchoolNameByUserId', 'id='+$scope.user.idUser, function(schoolName) {
                    $scope.user.school = schoolName;
                });
            };

            $scope.addFriend = function() {
                loginService.getLoginId(function(id) {
                    var currentUserId = id;
                    var requestUserId = $routeParams.id;
                    $http.get('profile/addFriend?currentUserId='+
                            currentUserId+'&'+'requestUserId='+requestUserId)
                        .success(function(data, status, header, config) {
                            console.log(data);
                        });
                });
            };

            $scope.getFriendsOfFriend = function() {
                loginService.getLoginId(function(id) {
                    var currentUserId = id;
                    var requestUserId = $routeParams.id;
                    $http.get('profile/getFriendsOfFriend?currentUserId='+
                            currentUserId+'&'+'requestUserId='+requestUserId)
                        .success(function(data, status, header, config) {
                            console.log(data);
                        });
                });
            };

            $scope.getCurrentPageId = function() {
                return $routeParams.id;
            };

            $scope.init = function() {

                $( "#nav-btn" ).click(function() {
                    $( "nav" ).toggle( "slow" );
                });

                $('#userAccordion>li:gt(0)').find('h2 span').html('+').end()
                .find('div').hide();
                $('#userAccordion>li:eq(0)').addClass('open')
                .find('h2 span').html('&ndash;');

                var clickedImage = false;
                $('#userAccordion>li').on('click',function(){
                    $("img").on('click',function(){
                        clickedImage = true;
                    });
                    $("#blogsListDiv").on('click',function(){
                        clickedImage = true;
                    });
                    $("#slider_infinite").on('click',function(){
                        clickedImage = true;
                    });
                    if (clickedImage == false) {	
                        $('.open div').slideUp().removeClass('open');
                        $(this).addClass('open')
                        .find('h2 span').html('&ndash;').end()
                        .children('div').slideDown().end()
                        .siblings().removeClass('open')
                        .find('h2 span').html('+');
                    }
                    clickedImage = false;
                });  

                // blog js



                // photo slider JS

                var Slider = function(){
                    var total, $images, $slider, sliderWidth, increment = 100;
                    var rotation = 40;
                    var on = function(){
                        $slider = $("slider");
                        $images = $("slider img"),
                        sliderWidth = $slider.width(),
                        total = $images.length;
                        position(); 
                    }

                    var position = function(){

                        var sign, half = $(".active").index(), x = 0, z = 0, zindex,scaleX = 1.5,scaleY = 1.5, transformOrigin;

                        $images.each(function(index, element){
                            scaleX = scaleY = 1;
                            transformOrigin = sliderWidth/2;
                            if(index < half){
                                sign = 1;
                                zindex = index+1;
                                x = sliderWidth/2 - increment*(half-index+1); 
                                z =  -increment*(half-index+1);

                            }else if(index > half){
                                sign = -1
                                zindex = total-index;
                                x = sliderWidth/2 + increment*(index-half+1);
                                z =  -increment*(index-half+1); 

                            }else{
                                sign = 0; 
                                zindex = total;
                                x = sliderWidth/2;
                                z = 1;
                                scaleX = scaleY = 1.5;
                                transformOrigin = "initial";

                            }  

                            $(element).css(
                                { 
                                    "transform": "rotate3d(0,"+sign+",0,"+rotation+"deg) translate3d("+calculateX(x, sign, 300)+"px,0,"+z+"px) scale3d("+scaleX+","+scaleY+",1)",
                                    "z-index": zindex,
                                    "transform-origin-x": transformOrigin
                                } 
                            );   

                        });
                    };


                    var calculateX = function(position, sign, width){
                        switch(sign){
                        case 1:
                        case 0: return position-width/2;
                        case -1: return position-width/2; 
                        }
                    }
                    var imageSize = function(){
                        return $slider.width()/3;
                    }   

                    var recalculateSizes = function(){      
                        sliderWidth = $slider.width();
                        position(); 
                    }
                    var clickedImage = function(){
                        $(".active").removeClass("active");
                        $(this).addClass("active");
                        position();
                    }
                    var addEvents = function(){
                        $( window ).resize(recalculateSizes);
                        $(document).on("click","img", clickedImage);
                    }

                    return {
                        init: function() {
                            on();
                            addEvents();
                        }

                    };
                }();

                $(function(){
                    var slider = Slider.init();
                })
                $('#fader').Flader({
                        slide_type: 'fade',
                        auto_slide: true
                });
                $('#slider_finite').Flader({
                        fixe_height: true,
                        cycling_slide: false
                });
                $('#slider_infinite').Flader({
                        mouse_event: 'mousehold'
                });

            };
        }
]);
