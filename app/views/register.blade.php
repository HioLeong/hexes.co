<!DOCTYPE HTML>
<!--
	Striped 2.5 by HTML5 Up!
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Hexagon</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
        <script src="d3.v3.min.js"></script>
		<script src="d3.hexbin.v0.min.js"></script>
        <script type="text/javascript" src="js/angular.js"></script>
        <script type="text/javascript" src="js/angular-route.js"></script>
        <script type="text/javascript" src="js/hexApp.js"></script>
        <script type="text/javascript" src="js/SettingsCtrl.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
        <link rel="stylesheet" href="css/hexFriends.css" />
        <link rel="stylesheet" href="css/userProfile.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<!--
		Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
		Set it to "right-sidebar" to, you guessed it, position it on the right.
	-->
	<body class="left-sidebar" ng-app="hexApp">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
                    	
                        <div id="switcherWrapper">
                        
                        <!-- Profile -->
					    <div class="userProfile">
                        	<div id="userprofile">
                    		<img src="images/facebook.png" class="profile-img">
  							<div class="profile-text">
    							<h1 class="profile-name">David Dominic Johnson</h1>
    							<span class="profile-title">UX / UI Designer</span>
  							</div>
                            </div>
                         
                         <div class="register">
<div class="wrap">
    <form ng-controller="SettingsCtrl" ng-submit="updateUserDetails(userDetails)">
      <fieldset>
          Login
          <input type="email" class="email" placeholder="Email" ng-model="userDetails.email"/>
          <input type="password" class="password" placeholder="Password"/>
          <input type="password" class="confirmPassword" id="cp" placeholder="Confirm Password"/>

          <br/>
          Personal
          <br/>
          <input type="text" class="email" id="firstName" placeholder="First Name" ng-model="userDetails.firstName"/>
          <input type="text" class="email" placeholder="Last Name" ng-model="userDetails.surname"/>
          <input type="text" class="email" placeholder="Nickname (Optional)" ng-model="userDetails.otherName"/>

          <select name="birthDay" id="dayList" ng-model='userDetails.dateOfBirth.day'>
              <option value="">DD</option>
          </select>

          <select name="birthMonth" id="monthList" ng-model='userDetails.dateOfBirth.month'>
              <option value="">MM</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
          </select>
          <select name="birthYear" id="birthYearList" ng-model='userDetails.dateOfBirth.year'>
              <option value="">YYYY</option>
          </select>
          <div class="toggle">
              <input type="radio" class="toggle-input" name="joincreate" value="0" id="join" ng-model='userDetails.gender' checked/>
              <label for="join" class="toggle-label toggle-label-off" id="joinLabel">Male</label>
              <div class="publicnotice right">
                  <span>
                      <h5>Sorry!</h5>
                      You do not have permission to create a Public League!
                  </span>
              </div>
              <input type="radio" class="toggle-input" name="joincreate" value="1" id="create" ng-model='userDetails.gender'/>
              <label for="create" class="toggle-label toggle-label-on" id="createLabel">Female</label>
              <span class="toggle-selection"></span>
          </div>

      <!--Relationship Status (Optional)-->
          <select name="relStatus" id="relStatus" ng-model='userDetails.relStatus'>
              <option value="0">Relationship Status (Optional)</option>
              <option value="1">Single</option>
              <option value="2">In a relationship</option>
              <option value="3">In Friend Zone</option>
              <option value="4">Side Chick</option>
              <option value="5">Tinder</option>
          </select>
          <br/>
          Education
          <input type="text" class="email" placeholder="School" ng-model='userDetails.school'/>
          <select name="gradYear" id="yearList" ng-model='userDetails.gradYear'>
              <option value="">Graduation Year</option>
          </select>
          <!--Grad Year-->
          <br/>
          Location
          <input type="text" class="email" placeholder="Hometown (Optional)"/>
          <input type="text" class="email" placeholder="Current Location"/>
          <br/>
          <input type="submit" class="button large expand" value="Submit"/>
      </fieldset>
  </form>
</div>
</div>
                        </div>






<!-- switcher wrapper close-->
</div>

    <!--<div id="examples">
    </div>-->

                        <div id="content-inner">


                            <!-- Post -->
                                <article class="is-post is-post-excerpt">
                                    <header>
                                        <!--
                                            Note: Titles and bylines will wrap automatically when necessary, so don't worry
                                            if they get too long. You can also remove the "byline" span entirely if you don't
                                            need a byline.
                                        -->
                                        <h2><a href="#">Welcome to Hexes</a></h2>
                                        <span class="byline">The world's first Hexagon themed social media site!</span>
                                    </header>
                                    <div class="info">
                                        <!--
                                            Note: The date should be formatted exactly as it's shown below. In particular, the
                                            "least significant" characters of the month should be encapsulated in a <span>
                                            element to denote what gets dropped in 1200px mode (eg. the "uary" in "January").
                                            Oh, and if you don't need a date for a particular page or post you can simply delete
                                            the entire "date" element.

                                        -->
                                        <span class="date"><span class="day">14</span><span class="month">Mins<span>uary</span></span> <span class="year">, 2013</span></span>
                                        <!--
                                            Note: You can change the number of list items in "stats" to whatever you want.
                                        -->
                                        <ul class="stats">
                                            <li><a href="#" class="fa fa-comment">16</a></li>
                                            <li><a href="#" class="fa fa-heart">32</a></li>
                                            <li><a href="#" class="fa fa-twitter">64</a></li>
                                            <li><a href="#" class="fa fa-facebook">128</a></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="image image-full"><img src="images/n33-robot-invader.jpg" alt="" /></a>
                                    <p>
                                        <strong>Hello!</strong> Insert content here.
                                    </p>
                                </article>

                            <!-- Pager -->
                                <div class="pager">
                                    <!--<a href="#" class="button previous">Previous Page</a>-->
                                    <div class="pages">
                                        <a href="#" class="active">1</a>
                                        <a href="#">2</a>
                                        <a href="#">3</a>
                                        <a href="#">4</a>
                                        <span>&hellip;</span>
                                        <a href="#">20</a>
                                    </div>
                                    <a href="#" class="button next">Next Page</a>
                                </div>

                        </div>
                    </div>



                <!-- Sidebar -->
                    <div id="sidebar">


                        <!-- Logo -->
                            <div id="logo">
                                <h1>Hexes</h1>
                            </div>
                        <div class="nav-wrap">
                        <nav class="main-nav" role="navigation">
                            <ul class="unstyled list-hover-slide">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Messages</a></li>
                                <li><a href="#">Friends</a></li>
                            </ul>
                        </nav>
                        </div>

                        <!-- Nav ORIGINAL
                            <nav id="nav">
                                <ul>
                                    <li class="current_page_item"><a href="#">Latest Post</a></li>
                                    <li><a href="#">Archives</a></li>
                                    <li><a href="#">About Me</a></li>
                                    <li><a href="#">Contact Me</a></li>
                                </ul>
                            </nav>-->

                        <!-- Search -->
                            <section class="is-search">
                                <form method="post" action="#">
                                    <input type="text" class="text" name="search" placeholder="Search" />
                                </form>
                            </section>

                            <section>
                            <ul class="social-links list-inline unstyled list-hover-slide">
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Blank</a></li>
                                <li><a href="#">Settings</a></li>
                            </ul>
                            </section>

                        <!-- Text
                            <section class="is-text-style1">
                                <div class="inner">
                                    <p>
                                        <strong>Striped:</strong> A free and fully responsive HTML5 site
                                        template designed by <a href="http://n33.co/">AJ</a> for <a href="http://html5up.net/">HTML5 up!</a>
                                    </p>
                                </div>
                            </section>

                        <!-- Recent Posts 
                            <section class="is-recent-posts">
                                <header>
                                    <h2>Recent Posts</h2>
                                </header>
                                <ul>
                                    <li><a href="#">Nothing happened</a></li>
                                    <li><a href="#">My Dearest Cthulhu</a></li>
                                    <li><a href="#">The Meme Meme</a></li>
                                    <li><a href="#">Now Full Cyborg</a></li>
                                    <li><a href="#">Temporal Flux</a></li>
                                </ul>
                            </section>

                        <!-- Recent Comments 
                            <section class="is-recent-comments">
                                <header>
                                    <h2>Recent Comments</h2>
                                </header>
                                <ul>
                                    <li>case on <a href="#">Now Full Cyborg</a></li>
                                    <li>molly on <a href="#">Untitled Post</a></li>
                                    <li>case on <a href="#">Temporal Flux</a></li>
                                </ul>
                            </section>

                        <!-- Calendar -->
                            <section class="is-calendar">
                                <div class="inner">
                                    <table>
                                        <caption>February 2013</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col" title="Monday">M</th>
                                                <th scope="col" title="Tuesday">T</th>
                                                <th scope="col" title="Wednesday">W</th>
                                                <th scope="col" title="Thursday">T</th>
                                                <th scope="col" title="Friday">F</th>
                                                <th scope="col" title="Saturday">S</th>
                                                <th scope="col" title="Sunday">S</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="4" class="pad"><span>&nbsp;</span></td>
                                                <td><span>1</span></td>
                                                <td><span>2</span></td>
                                                <td><span>3</span></td>
                                            </tr>
                                            <tr>
                                                <td><span>4</span></td>
                                                <td><span>5</span></td>
                                                <td><a href="#">6</a></td>
                                                <td><span>7</span></td>
                                                <td><span>8</span></td>
                                                <td><span>9</span></td>
                                                <td><a href="#">10</a></td>
                                            </tr>
                                            <tr>
                                                <td><span>11</span></td>
                                                <td><span>12</span></td>
                                                <td><span>13</span></td>
                                                <td class="today"><a href="#">14</a></td>
                                                <td><span>15</span></td>
                                                <td><span>16</span></td>
                                                <td><span>17</span></td>
                                            </tr>
                                            <tr>
                                                <td><span>18</span></td>
                                                <td><span>19</span></td>
                                                <td><span>20</span></td>
                                                <td><span>21</span></td>
                                                <td><span>22</span></td>
                                                <td><a href="#">23</a></td>
                                                <td><span>24</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">25</a></td>
                                                <td><span>26</span></td>
                                                <td><span>27</span></td>
                                                <td><span>28</span></td>
                                                <td class="pad" colspan="3"><span>&nbsp;</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>

                        <!-- Copyright -->
                            <div id="copyright">
                                <p>
                                    &copy; 2014 Hexes.<br />
                                    Creators: <a href="http://djheez.us/">David Johnson & Michael Leong</a>
                                </p>
                            </div>

                    </div>

            </div>

    </body>
    <script type="text/javascript">
        //WIDTH OF FRIENDS
        var width = document.getElementById('switcherWrapper').offsetWidth;
       var cur_year= new Date().getFullYear();
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
        //MAKECURRENTYEARdocument.getElementById("yr").value = cur_year;
    </script>


</html>
