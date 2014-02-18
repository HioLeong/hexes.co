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
		<script src="js/angular.js"></script>
		<script src="js/hexApp.js"></script>
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
    							<h1 class="profile-name">((firstName)) <i>((nickname))</i> ((lastName))</h1>
    							<span class="profile-title">((school))</span>
  							</div>
                            </div>
                         
                         <div class="register">
<div class="wrap">
  <form >
    <fieldset>
      <label for="firstName" id="firstNameLabel">Name</label>
      <input type="text" class="email" id="firstName" placeholder="First Name" ng-model="firstName">
      <input type="text" class="email" placeholder="Last Name" ng-model="lastName">
      <input type="text" class="email" placeholder="Nickname (Optional)" ng-model="nickname"> 
      <br>
      Login
      <input type="email" class="email" placeholder="Email">
      <!--<div>
      	<p class="email-help regText">Changing this will alter login details!</p>
      </div>-->
      <input type="password" class="password" placeholder="Password">
      <input type="password" class="confirmPassword" id="cp" placeholder="Confirm Password">
      
      <br>
      <!--DOB-->
  	  Personal
      <input type="date" placeholder="Date Of Birth">
      <!--Gender-->
      <div class="toggle">
      <input type="radio" class="toggle-input" name="joincreate" value="join" id="join" checked>
      <label for="join" class="toggle-label toggle-label-off" id="joinLabel">Male</label>
        <div class="publicnotice right"><span><h5>Sorry!</h5> You do not have permission to create a Public League!</span>           </div>
      <input type="radio" class="toggle-input" name="joincreate" value="create" id="create">
      <label for="create" class="toggle-label toggle-label-on" id="createLabel">Female</label>
        <span class="toggle-selection"></span>
  	  </div>
      <!--Relationship Status (Optional)-->
      <input type="text" class="email" placeholder="Contact Number (Optional)">
      <br>
      Education
      <input type="text" class="email" placeholder="School" ng-model="school">
      <select name="gradYear" id="yearList"><option value="">Graduation Year</option></select>
      <!--Grad Year-->
      <br>
      Location
      <input type="text" class="email" placeholder="Hometown (Optional)">
      <input type="text" class="email" placeholder="Current Location">
                    
  
  <!--<div class="toggle">
      <input type="radio" class="toggle-input" name="publicprivate" value="public" id="public" checked>
      <label for="public" class="toggle-label toggle-label-off public" id="publicLabel">Public</label>
        <div class="publicnotice left"><span><h5>Sorry!</h5> You do not have permission to create a Public League!</span>          </div>
      <input type="radio" class="toggle-input dependent" name="publicprivate" value="private" id="private">
      <label for="private" class="toggle-label toggle-label-on" id="privateLabel">Private</label>
      <span class="toggle-selection"></span>
  </div>-->
      <br>
      
        <a href="#" class="button large expand">Save</a>
       </fieldset>
    </form>
       
</div>
</div>
                    	</div>
                        
                        
                                            
<div class="friendsContainer">
<ol id="row1" class="even">
  <li class='hex' id="one"></li>
  <li class='hex' id="two"></li>
  <li class='hex'></li>
</ol>  
<ol id="row2" class="odd">
  <li class='hex'></li>
  <li class='hex'></li>
  <li class='hex'></li>
    <li class='hex'></li>
</ol>
<ol id="row3" class="even">
  <li class='hex'></li>
  <li class='hex'></li>
  <li class='hex'></li>
</ol>  
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
		//detect screen size
		var size;
		if ($(window).width() < 645) {
 		   size = 1;
		   alert("mobile");
		}
		else if ($(window).width() > 999) {
 		   size = 3;
		   alert("desktop");
		}
		else {
 		   size = 2;
		   alert("tablet");
		}
		
		//WIDTH OF FRIENDS
		var width = document.getElementById('switcherWrapper').offsetWidth;
		console.log("switcherWrapper" + width);
		
		/*width = width/2;*/
		
		width = width / 150;
		width = width - 3;
		width = width - 1;
		var numberHex = Math.floor( width ); 
		console.log("numberHex: " + numberHex);
		
		//FRIENDS JS
		var ul = document.getElementById("row1");
		for (i=0; i < numberHex; i++) {
			var newLI = document.createElement("LI");
			ul.appendChild(newLI);
			//newLI.innerHTML = "The content of the li element here";
		}
		
		var ul2 = document.getElementById("row2");
		for (i=0; i < numberHex; i++) {
			var newLI2 = document.createElement("LI");
			ul2.appendChild(newLI2);
			//newLI.innerHTML = "The content of the li element here";
		}
		var ul2 = document.getElementById("row3");
		for (i=0; i < numberHex; i++) {
			var newLI2 = document.createElement("LI");
			ul2.appendChild(newLI2);
			//newLI.innerHTML = "The content of the li element here";
		}
		$(".even > *").addClass("hex");
		$(".odd > *").addClass("hex");
		
		//Populate grad year
		var cur_year=new Date().getFullYear();
        var obj=document.getElementById("yearList"); 
		for (var i=1900; i < 2015; ++i) {  
			opt = document.createElement("option");
                opt.value = i;
                opt.text=i;
                obj.appendChild(opt);
    	}  
		//MAKECURRENTYEARdocument.getElementById("yr").value = cur_year;
		</script>

</html>
