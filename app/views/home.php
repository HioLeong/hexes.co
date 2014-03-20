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
        <link rel="stylesheet" href="css/messagesInbox.css" />
        <link rel="stylesheet" href="css/loginBox.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/personalNewsFeed.css"/>
<link rel="stylesheet" href="css/mainStyle.css" />

</head>

<body>

    <!-- SIDE MENU -->
    <aside>
        <img id="hexLogo" src="images/hexlogo2.png"></img>
        <a>
			<svg version="1.1" id="nav-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
              <path id="list-view-icon" d="M462,108.857H50V50h412V108.857z M462,167.714H50v58.857h412V167.714z M462,285.429H50v58.857h412
             V285.429z M462,403.143H50V462h412V403.143z"/>
            </svg>
      	</a>
 
      
      <div id="sideMenuContainer">
        <nav>
          <ul>
            <li>
        <div id="notification"></div>
</li>
            <li class="mobileTwoColumn"><a href="#/profile">Profile</a></li>
            <p class="navSpaces"></p>
            <li class="mobileTwoColumn"><a href="#/friends">Friends</a></li>
            <p class="navSpaces"></p>
            <li class="mobileTwoColumn current"><a href="#/messages/24">Messages</a></li>
            <p class="navSpaces"></p>
            <li class="mobileTwoColumn"><a href="#/photos">Photos</a></li>
            <p class="navSpaces"></p>
            <li><a href="#">Blogs</a></li>
            <p class="navSpaces"></p>
            <li class="mobileTwoColumn"><a href="#/settings">Settings</a></li>
            <p class="navSpaces"></p>
            <li class="mobileTwoColumn"><a href="#">Log Off</a></li>
          </ul>
        </nav>
    
    
      </div>
      
      <!--<div class="vertical-line"></div>-->
    </aside>
    <!-- End of SIDE MENU -->
    <article id="main" ng-app="hexApp">
        <div id="newSwitcherWrapper">
            <div ng-view></div>
          <!-- NG VIEW OR WHATEVER HERE INIT -->
        </div>
    </article>
</body>
</html>
