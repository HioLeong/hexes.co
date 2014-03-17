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
		<script src="js/angular-route.js"></script>

        <!-- Angular -->
        <script src="js/hexApp.js"></script>
        <script src="js/ProfileCtrl.js"></script>
        <script src="js/SettingsCtrl.js"></script>
        <script src="js/LoginCtrl.js"></script>

		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
        <link rel="stylesheet" href="css/hexFriends.css" />
        <link rel="stylesheet" href="css/userProfile.css" />
        <link rel="stylesheet" href="css/friendSearchResults.css" />
        <link rel="stylesheet" href="css/messagesInbox.css" />
        <link rel="stylesheet" href="css/loginBox.css"/>
        <link rel="stylesheet" href="css/style.css"/>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<!--
		Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
		Set it to "right-sidebar" to, you guessed it, position it on the right.
	-->
<body class="left-sidebar">
    <div id="wrapper">
        <div id="content" style="" ng-app="hexApp">

            <div ng-view></div>
            <div id="switcherWrapper">
        </div>
        </div>
    </div>

        <div id="sidebar">
            <div id="logo">
                <h1>Hexes</h1>
            </div>

            <div class="nav-wrap">
                <nav class="main-nav" role="navigation">
                    <ul class="unstyled list-hover-slide">
                        <li><a href="#/profile/24">Profile</a></li>
                        <li><a href="#/messages">Messages</a></li>
                        <li><a href="#">Friends</a></li>
                    </ul>
                </nav>
            </div>
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

                                                                                                                                                                                                                                                                                                                                                    </html>
