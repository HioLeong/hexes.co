<!DOCTYPE html style="height: 100% !important;">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hexes</title>

<link href="http://hayageek.github.io/jQuery-Upload-File/uploadfile.min.css" rel="stylesheet">
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.uploadfile.js"></script>
<script src="js/jquery.flader.min.js"></script>
		<script src="js/angular.js"></script>
		<script src="js/angular-route.js"></script>

        <!-- Angular -->
        <script src="js/hexApp.js"></script>
        <script src="js/ProfileCtrl.js"></script>
        <script src="js/SettingsCtrl.js"></script>
        <script src="js/LoginCtrl.js"></script>
        <script src="js/FriendsCtrl.js"></script>
        <script src="js/MessagesCtrl.js"></script>
        <script src="js/PhotosCtrl.js"></script>
        <script src="js/SearchFriendsCtrl.js"></script>
        <script src="js/NotificationsCtrl.js"></script>
        <script src="js/MenuCtrl.js"></script>
        <script src="js/ActivitiesLogCtrl.js"></script>
        <script src="js/BlogCtrl.js"></script>

        <script src="js/userProfile.js"></script>
                <noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
        <link rel="stylesheet" href="css/hexFriends.css" />
        <link rel="stylesheet" href="css/userProfile.css" />
        <link rel="stylesheet" href="css/friendSearchResults.css" />
        <link rel="stylesheet" href="css/friends.css" />
        <link rel="stylesheet" href="css/notifications.css" />
        <link rel="stylesheet" href="css/messagesInbox.css" />
        <link rel="stylesheet" href="css/loginBox.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/personalNewsFeed.css"/>
		<link rel="stylesheet" href="css/mainStyle.css" />

<style>

#switch{
    width: 75px;
    height: 40px;
}

.switchToggle{
    position: relative;
    float: left;
    border: 2px solid #444249;
    border-radius: 20px;
    -webkit-transition: border-color .6s  ease-out;
    transition: border-color .6s  ease-out;
    box-sizing: border-box;
}

.toggle.toggle-on{
    border-color: rgba(137, 194, 217, .4);
    -webkit-transition: all .5s .15s ease-out;
    transition: all .5s .15s ease-out;
}

.toggle-button{
    position: absolute;
    top: 4px;
    width: 28px;
    bottom: 4px;
    right: 39px;
    background-color: #444249;
    border-radius: 19px; 
    cursor: pointer;
    -webkit-transition: all .3s .1s, width .1s, top .1s, bottom .1s;
    transition: all .3s .1s, width .1s, top .1s, bottom .1s;
}

.toggle-on .toggle-button{
    top: 3px;
    width: 65px;
    bottom: 3px;
    right: 3px;
    border-radius: 23px;
    background-color: #89c2da;
    box-shadow: 0 0 16px #4b7a8d;
    -webkit-transition: all .2s .1s, right .1s;
    transition: all .2s .1s, right .1s;
}


.toggle-text-on{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    line-height: 36px;
    text-align: center;
    font-family: 'Quicksand', sans-serif;
    font-size: 18px;
    font-weight: normal;
    cursor: pointer;
    -webkit-user-select: none; /* Chrome/Safari */    
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* IE10+ */


    color: rgba(0,0,0,0);
}

.toggle-on .toggle-text-on{
    color: #3b6a7d;
    -webkit-transition: color .3s .15s ;
    transition: color .3s .15s ;
}

.toggle-text-off{
    position: absolute;
    top: 0;
    bottom: 0;
    right: 6px;
    line-height: 36px;
    text-align: center;
    font-family: 'Quicksand', sans-serif;
    font-size: 14px;
    font-weight: bold;
    -webkit-user-select: none; /* Chrome/Safari */        
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* IE10+ */

    cursor: pointer;

    color: #444249;
}

.toggle-on .toggle-text-off{
    color: rgba(0,0,0,0);
}

/* used for streak effect */
.glow-comp{
    position: absolute;
    opacity: 0;
    top: 10px;
    bottom: 10px;
    left: 10px;
    right: 10px;
    border-radius: 6px;
    background-color: rgba(75, 122, 141, .1);
    box-shadow: 0 0 12px rgba(75, 122, 141, .2);
    -webkit-transition: opacity 4.5s 1s;
    transition: opacity 4.5s 1s;
}

.toggle-on .glow-comp{
    opacity: 1;
    -webkit-transition: opacity 1s;
    transition: opacity 1s;
}



    @import url(http://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css);

	a.friendButton{
		background: #ECECEC !important;
		border-radius: 15px !important;
		text-align: center !important;
		padding: 10px 20px !important;
		display: block !important;
		font-family: arial !important;
		font-weight: bold !important;
		color:#7f7f7f !important;
		text-decoration: none !important;
		text-shadow:0px 1px 0px #fff !important;
		border:1px solid #a7a7a7 !important;
		width: 32% !important;
		box-shadow: 0px 2px 1px white inset, 0px -2px 8px white, 0px 2px 5px rgba(0, 0, 0, 0.1), 0px 8px 10px rgba(0, 0, 0, 0.1) !important;
		-webkit-transition:box-shadow 0.5s !important;
	}
	a.friendButton i{
		float: right !important;
		margin-top: 2px !important;
	}
	a.friendButton:hover{
		box-shadow: 0px 2px 1px white inset, 0px -2px 20px white, 0px 2px 5px rgba(0, 0, 0, 0.1), 0px 8px 10px rgba(0, 0, 0, 0.1) !important;
	}
	a.friendButton:active{
		box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.5) inset, 0px -2px 20px white, 0px 1px 5px rgba(0, 0, 0, 0.1), 0px 2px 10px rgba(0, 0, 0, 0.1) !important;
		background:-webkit-linear-gradient(top, #d1d1d1 0%,#ECECEC 100%) !important;
	}

.searchBar {
  color: #666;
  font: 85%/140% Arial, Helvetica, sans-serif;
  width: 800px;
	max-width: 96%;
	margin: 0 auto;
}
.searchBar a {
	color: #69C;
	text-decoration: none;
}
.searchBar a:hover {
	color: #F60;
}

/* reset webkit search input browser style */
.searchBar input {
	outline: none;
}
.searchBar input[type=search] {
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
	font-family: inherit;
	font-size: 100%;
}
.searchBar input::-webkit-search-decoration,
.searchBar input::-webkit-search-cancel-button {
	display: none; /* remove the search and cancel icon */
}

/* search input field */
.searchBar input[type=search] {
	background: #ededed url(http://i.imm.io/Q0Jo.png) no-repeat 9px center;
	border: solid 1px #ccc;
	padding: 9px 10px 9px 32px;
	width: calc(100% - 42px);
	
	-webkit-border-radius: 10em;
	-moz-border-radius: 10em;
	border-radius: 10em;
	
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	transition: all .5s;
}

#searchFriends {
	/*margin-left: calc(50% - 40px);
	margin-left: -webkit-calc(50% - 40px);
	margin-left: -moz-calc(50% - 40px);*/
	margin-bottom: 20px;
}

#filterFriends {
	width: 32%;
}

#searchFriends:focus {
	margin-left: 1000px;	
}

.searchBar input[type=search]:focus {
	background-color: #fff;
	border-color: #6dcff6;
	-webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
	-moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
	box-shadow: 0 0 5px rgba(109,207,246,.5);
}

/* placeholder */
.searchBar input:-moz-placeholder {
	color: #999;
}
.searchBar input::-webkit-input-placeholder {
	color: #999;
}
</style>

</head>

<body ng-app="hexApp">

    <!-- SIDE MENU -->
    <aside>
        <img id="hexLogo" src="images/hexlogo2.png"></img>
        <a>
			<svg version="1.1" id="nav-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
              <path id="list-view-icon" d="M462,108.857H50V50h412V108.857z M462,167.714H50v58.857h412V167.714z M462,285.429H50v58.857h412
             V285.429z M462,403.143H50V462h412V403.143z"/>
            </svg>
      	</a>
 
      
      <div ng-controller="MenuCtrl"id="sideMenuContainer">
        <nav>
          <ul>

<li>
                <div class="notice_box"> 
                <span><a href="#/notifications"> Notifications </a></span>
                <span id="numOfNotifications" class="bubble_count">10</span>
                </div>
</li>
            <li>  
              <div class="searchBar">
                <form id="searchFriends">
                  <input ng-click="goToSearchFriends()" ng-change="search()" ng-model="searchText" type="search" placeholder="Search">
                </form>
              </div>
            </li>  
            <li class="mobileTwoColumn"><a href="#/profile">Profile</a></li>
            <p class="navSpaces"></p>
            <li><a href="#/friends">Friends</a></li>
            <p class="navSpaces"></p>
            <li class="mobileTwoColumn"><a href="#/messages/24">Messages</a></li>
            <p class="navSpaces"></p>
            <li><a href="#/photos">Photos</a></li>
            <p class="navSpaces"></p>
            <li class="mobileTwoColumn"><a href="#">Blogs</a></li>
            <p class="navSpaces"></p>
            <li><a href="#/settings">Settings</a></li>
            <p class="navSpaces"></p>
            <li class="mobileTwoColumn"><a href="#">Admin</a></li>
            <p class="navSpaces"></p>
            <li><a href="#">Log Off</a></li>

          </ul>
        </nav>
    
    
      </div>
      
      <!--<div class="vertical-line"></div>-->
    </aside>
    <!-- End of SIDE MENU -->
    <article id="main">
        <div id="newSwitcherWrapper">
            <div ng-view></div>
          <!-- NG VIEW OR WHATEVER HERE INIT -->
        </div>
    </article>
</body>
</html>
