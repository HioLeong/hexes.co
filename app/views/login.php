<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Hexes</title>
	<link rel="stylesheet" href="css/indexStyle.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/jquery-ui-1.10.1.custom.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="css/datepicker.css" rel="stylesheet" type="text/css">
	
	<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic" rel="stylesheet" type="text/css">
	
    <script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script><style type="text/css"></style>
	<script src="js/select.js"></script> 
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.src.js"></script>
	<![endif]-->
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


	<script type="text/javascript">
	</script>
	
	<script type="text/javascript">//$($.date_input.initialize);</script>
	
<style type="text/css">
.gpitPhotoStorage {
    height:0px;
    width:0px;
    position:absolute;
    top:-100px;
    left:-100px;
    overflow:hidden;
    visibility:hidden;
}

.gpitphotoViewer {
    position:absolute; 
    overflow:hidden; 
    font-size:0;
    -moz-box-shadow:0px 0px 10px rgba(0,0,0,1); 
    -webkit-box-shadow:0px 0px 10px rgba(0,0,0,1); 
    box-shadow:0px 0px 10px rgba(0,0,0,1); 
    min-height:50px; 
    min-width:50px;
    padding:5px; 
    pointer-events:none; 
    background:#fff url('data:image/gif;base64,R0lGODlhEAALALMMAOXp8a2503CHtOrt9L3G2+Dl7vL0+J6sy4yew1Jvp/T2+e/y9v///wAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQFCwAMACwAAAAAEAALAAAEK5DJSau91KxlpObepinKIi2kyaAlq7pnCq9p3NZ0aW/47H4dBjAEwhiPlAgAIfkECQsADAAsAAAAAAQACwAABA9QpCQRmhbflPnu4HdJVAQAIfkECQsADAAsAAAAABAACwAABDKQySlSEnOGc4JMCJJk0kEQxxeOpImqIsm4KQPG7VnfbEbDvcnPtpINebJNByiTVS6yCAAh+QQJCwAMACwAAAAAEAALAAAEPpDJSaVISVQWzglSgiAJUBSAdBDEEY5JMQyFyrqMSMq03b67WY2x+uVgvGERp4sJfUyYCQUFJjadj3WzuWQiACH5BAkLAAwALAAAAAAQAAsAAAQ9kMlJq73hnGDWMhJQFIB0EMSxKMoiFcNQmKjKugws0+navrEZ49S7AXfDmg+nExIPnU9oVEqmLpXMBouNAAAh+QQFCwAMACwAAAAAEAALAAAEM5DJSau91KxlpOYSUBTAoiiLZKJSMQzFmjJy+8bnXDMuvO89HIuWs8E+HQYyNAJgntBKBAAh+QQFFAAMACwMAAIABAAHAAAEDNCsJZWaFt+V+ZVUBAA7') no-repeat center center; 
    z-index:99999;
    opacity:0;
}

.gpitImage {
    position:relative;
    z-index:999;
}

.gpitmark {
    background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAeCAIAAABi9+OQAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjYxQTYxN0IyNTc1QzExRTFCNUQ3Q0VBNjdGMjU4RjcyIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjYxQTYxN0IzNTc1QzExRTFCNUQ3Q0VBNjdGMjU4RjcyIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjFBNjE3QjA1NzVDMTFFMUI1RDdDRUE2N0YyNThGNzIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjFBNjE3QjE1NzVDMTFFMUI1RDdDRUE2N0YyNThGNzIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5y2ogXAAAAOUlEQVR42lSKMQ4AIAwCAf//Wh3ctJJq40COI7Q+pkCKhIhIdJgI1u6PeZxJ+Pu267l9vqpL3AIMAHiRBDsxx9fSAAAAAElFTkSuQmCC') repeat-x left top;
    height:26px;
    width:auto;
    margin-top:1px;
    overflow:hidden;
    display:none;
}

.gpitmark .gpitlogo {
    background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAeCAIAAADGnVtDAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjk4MEQ3REUwNjkwRDExRTE4NEVEQzNEMTE2ODhFRTYwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjk4MEQ3REUxNjkwRDExRTE4NEVEQzNEMTE2ODhFRTYwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OTgwRDdEREU2OTBEMTFFMTg0RURDM0QxMTY4OEVFNjAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OTgwRDdEREY2OTBEMTFFMTg0RURDM0QxMTY4OEVFNjAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7xOe0xAAADmElEQVR42tRWS2/bRhDmzC5fshxLcoLUipPGdR9we0h7yD2X/H/kUCAp2qZt7DhO7MixXiSXu9Nvl7IiGbaMHCqgBEHwMTvfzPfNzJKGoyL67w8dEa0DZi0ogInWA7Me0lZ8E4mmha2t+Lvl93KbX8ROTFnKScy3aFPX8vvrCjBwSg6uxclnDGtx7/AFHryFf+9f+K/BhpnzfPLkx14SKx2Arz+cSFVjgSJ/7x8lwDgbAXpzg+9ux1ub+vU/5ckHE2tyTpybxYEr8CdlYUFGTKuy8Z8EUQszeYzgAo6MtV8/yL7fS3XsF8c6mUzt+dBqFQAiH0QkWE2aCWtxx9TweMPpAxQBEihy/pSidO1cf/MwiWNqbHodfbCfiRWQDHsYI6CQlsz9rG5PaijyeJe8A0kpyLtcSIkP2fODsENGsOUGxWdFenW5QBLrJIjs9SfxhLgQ7JKKSDdQGsht5KFFm9umQJMNz4Sx4XFjg9NkaVmSkFY0HEusA11RCEtJRkEi8lPgRpxEs3O+fhqRZqhg30SB9sVgqCilrHzClz0V4p+hgLQF+9FoXJaV75JgOxxHxnDtmjrz7NlaxhP391G5v5dA+fnC96f1xahOE77at5c1sDTTBoMLU5XWl78jssSZ0ndsiRKyZelMKCTEO/hUH5/U3a0Z4ai9v9743YT5yrj4DMTLUwRKWmudMVWs4/7OjlbpeCKjifWEBB+KqTKCfkT5NqvwePbRak1y8wjixTYRP2DgrsZVaYaq09IDeO5pPuUcPD7aTeN4RgSmVmdLTSfOF/T10225BHwros0Estsw+7iREk0BuhA1JG5l6uDb/FE/nq/KUnpykBeF+zR0RQhCX0oxbxx9hTTkAYyyrKFTe3PKYeDgJQTodtTj3WT/cd6/n12JeLef9Lr66J1BdRy9NSAgTdS83JpNenFWIpzCZ1TXFxclCq+27dr4Dn/68+ZPP2zcafNN7Ldy/m4vxXk2kBe/FofHRmsVSsYXuV4sQYhfG2wwqDXpf3Xv7na3c1JC/0Rbjj6+/O2UWRnL1ulmBF8jNUdgzIqzrioq2t7mZvaQXZgJL1/9OTw/6/W6/Qc7rVaLiI0RY9GKMp1ODg+PB6enb8+j589+yVK9eluzYZdiljyLUZxL1lneevNu7EZ8/seZdR8QBcZ4FLaDMBm1Ue2Hu3lnK+Uv3NoJDK3nP20dfzYcrecH6vaflP9RNiSyjnT+FWAA0wBciKa45loAAAAASUVORK5CYII=') no-repeat left top;
    width:34px;
    float:left;
    height:26px;
    overflow:hidden;
}

.gpitmark .gpitmarktext {
    color:gray;
    margin-left:4px;
    font-size:11px;
    line-height:28px;
    float:left;
    height:26px;
    overflow:hidden;
}

.gpitstatus {
    border:3px solid #ecf0f5;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background:#fff url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAeCAIAAABi9+OQAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjYxQTYxN0IyNTc1QzExRTFCNUQ3Q0VBNjdGMjU4RjcyIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjYxQTYxN0IzNTc1QzExRTFCNUQ3Q0VBNjdGMjU4RjcyIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjFBNjE3QjA1NzVDMTFFMUI1RDdDRUE2N0YyNThGNzIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjFBNjE3QjE1NzVDMTFFMUI1RDdDRUE2N0YyNThGNzIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5y2ogXAAAAOUlEQVR42lSKMQ4AIAwCAf//Wh3ctJJq40COI7Q+pkCKhIhIdJgI1u6PeZxJ+Pu267l9vqpL3AIMAHiRBDsxx9fSAAAAAElFTkSuQmCC') repeat-x left top;
    height:30px;
    padding:3px 10px;
    overflow:hidden;
    position:fixed;
    top:10px;
    right:10px;
    z-index:999999;
    display:none;    
}

.gpitstatus .gpitlogo {
    background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAAAeCAIAAABc0ozeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjE3NjlDQjQzNjkwRjExRTE4M0VERTlEMjdENkMwOEMxIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjE3NjlDQjQ0NjkwRjExRTE4M0VERTlEMjdENkMwOEMxIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MTc2OUNCNDE2OTBGMTFFMTgzRURFOUQyN0Q2QzA4QzEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MTc2OUNCNDI2OTBGMTFFMTgzRURFOUQyN0Q2QzA4QzEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6vpRurAAAHoklEQVR42uxZ7W8cRxnfednbvfM5Pr8l5/gcX/wW27KdWk2cNCJIiWgJVSEqEIGoChIf+ATf+DNavsA3UPsBVWppkBCVqkagVmAgJSYY7DgvTuLUdnxnx3Zs5+58+zK7wzMz2/Pd+XxBVFRteqO91ewzLzvzm9/zm2f2aCZrabW0d6IaQjUUqgFUw+dxANUweByDahBVS7gGwf+iQbbj35y1mM99n2sa5+Km+ZoGdYFxnrSDEcu2XP4Kd1GASEh3x0Zj+PNPTypnvStxlMtrkXAIcr4fgCAw4prLeEhHrc20qZGklt2VBy4lSMIlSrm8CCLrm1kmauInk0FglFgIAonJ+8HMwdLSSAf7wpGImHk0gh9lvWzOU33IOlxwDmMgF0JPQgghvGT3pRgD8Ahv8iAj8szjOkFD/eG6SNAqto88NRBWzPKl34maIi9JWKnnz91VOVD05d0TuICPAYEEYr7HaQjrekn9cBhjojkOh24UywSLMBf47KLQVsaamL4/dWtZPR5oifYlW44PJyouHdQc/8dHhceRI/GvnOr5rMRBwBBAxZMkUo7DJS+YH5BrR6zA7n0sz7KyzwM7KpW35bXMby/N7Isa588OdMQbENYmr6cBhZG+uGnQsgEwz2fiZdqPv3cS7tfnVt//8C5knv3UMaIVNVoTGsQBIZ8rgKQAeX4sRDAuaUApIgTlLV8wSBMsElKtUCxCCHr5w9/uGAb91rmhiKkrCJ4abBs72oH2GIC6DJN6vj/Y3Tpze3k+vQmWi5eudbbFjo8kPvnkYUiPBb0gpiUXwMC52s4DL+MyD/sXLt2XjBAClgFAtsMdx3dcDpsXc4WrFXeYWsmsPswdPdJWZ4aURSfEhE0OoYoDUM4pL0SxWBVAPxyizPUl+FVaBdfPXv/LQmqrSgUY55mx7udO9UJ+Ymrp4qWZitUCBtkQ+UhpBRtj2ralCYYjrBgEBPA8zXX9+ZQzPBAOmzsgrW+wjS2vjFYlLJD0efAwK0SnNartsa+B3FyZWlTC9MKZgWgkFNSU96szqdWH2dPHDqvH2fnV8av3IAOWsZGEZbN3Pri5kNoAy6GDjRfODf3yNxOQv3hpGh6/fqa/rFS9UdfxlSkQxPSxoYTq7dXXx799brjzYKyCBqXTK36QOEa+5SDOmzwPcPEdBtQAXvjSg/BS2u05bBTazy3asBRlyq0Vb4giPuKoyLiZsX719kSh5k9/ePrG3Qf/vpn+zteGAZ233p2emFo8e7JbNXn1tXHJU/qlp5MnRhKuKwTPstj3z4/O3d8ACRsbTvz9XwuW5f7ownGHeW++Oz05k/rB+dGfv3H5xWcHuxLNf7oyV1w6fWsZ9F75OMwOMoNdrXnLWVzeuvDV4d0rTSVDBF/Ai3xo4vlGiBzqSKTX3FyG5S2wqCqa3KfQrbv5AkCw8S/cd3ClYFApe+GxtakO7itr2UNtDeApP3npGXh8/8rczG1YGL68lk22xzraYo7LhvoOXL22VGgoaiKNEEzJzmtG+uNNscijrG3Z7nbeWVjeOtLVWh81HNfrTTavbeaCuREC0ykrhb1CAVRYSEKFo2OEK/oBVssK8/E8JhFihFLTNHLb3ralwuiSzbqlRS8SMGQaWNWpIrTw4v3N0YZ6c2o2bbse6C5cmOLCbiD1BgkgKFbqVSzSIO2U4iKjSDISFY952w3UDqYIIJY2BwmtUlrC8z0CoUCkpQZ7wsM8TggJ9mm0gw3wyLZ4fR0eOhLeAQhrAz0mZECby2Aq1jkYG0zp7InurYx98b1rD9Zyyg6yrTKx+vD80ibYbdsDTnUebKwqwEH/AagaijfXz95bg7ar67nb8+vwqIrAgiqVlnYV5G2b7SHSwTYs1AfQcZmby+WFYCNNxTbgRxDpNDaQ3i6zvzdaFy7xqO6kUV9P7tyz5hcdaAfYViSqTkki3vDd50f+eT31699PFvzu9LEkBESD3ftXN3LKvr8p+mUQ4/86AfSnRg/97o/Xf/HGZXgc7osf7W8D2e7tbHnngxtwP3uyq6x0PrX59nvT33xuqNBJR1vDXyfnX3lt/OVvjIIOlvTPGMieNnPjznYuxxiTkSHv6en7cBJvZRzHYbF9dGQw0tUZMg1S5fOIZfHZj+yZW/l83qcU3PTRi+faQFyLQkoudZEX2AdOr5QFjnhKL8GoU3E8VIHi7gASRBroCK1gnKApIJcwBVcMW5SCVOlUdSikEwI0kKGyUtUwpBNfbM0guEKFbceTWwHZ/XUsGIHruLZtg2szj4XNEGgQ12wgVH2d9szTRlOM5PNsO++HTWOv4ycQZ7DXbI7RP1/OwFkD3CpQk6Kl1jHR9QptYcfVS8/9IDqUVlgMXSAiX0eQSYLBh0J0V4c7LyorLTQEVVOvgIGZJq3yuUMNH5QSAa6J9gOJ9njIME6MolyeapylV9Ymp9Z9j1mMJJPtlCDOy84bO6IMv8NJcUCpi+gEPwnfKikKpgHnSxJvT0TrIls528/kwyaKCDkmzU3NB1rNpaWlrENPjh78on1RhPOEcNDstg1hBUJaBW5IYoCjAr8g+sBfsG/YSKnj/6372kf7J/6jvVb716fGoE8kEsVHylranf4jwAAWfxMBU3Z27QAAAABJRU5ErkJggg==') no-repeat left top;
    height:30px;
    width:96px;
    float:left;
    overflow:hidden;
}

.gpitstatus .gpitstatustxt {
    color:gray;
    float:left;
    font-size:12px;
    line-height:32px;
}

*[class*="Image"]:after, [class*="image"]:after, *[class*="Photo"]:after, *[class*="photo"]:after {
    pointer-events:none !important;
}</style></head>

<body crossrider_data_store_temp="{}">

<div class="menu">	
	<div class="container clearfix">

		<div id="logo" class="fleft">
			<a><img src="images/hexlogo2.png" height="74" ></a>
		</div>
		<div id="nav" class="fright">
			<ul class="navigation">
            <!-- LOGIN TO GO HERE -->
 
        <li class = "UserName">
            <input id="username" class = "Value" type = "text"  placeholder="Email"/>
        </li>
        <li class = "Password">
            <input class="passwordLogin" id="passwordLogin" class = "Value" type = "password"  placeholder="Password"/>
            <!--<a class="ForgotPassword" href="#">Forgot Password?</a>-->
        </li>

        <li class = "Login">
               	<img id="hexlogin" class="hexLoginClass" src="images/login.png">    
        </li>

          <!--<form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" id="emailLogin" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" id="passLogin" class="form-control">
            </div>
            <img id="hexlogin" class="hexLoginClass" src="images/signin.png">
          </form>
				<li data-slide="1" class="active">Home</li>
				<li data-slide="2">About</li>
				<li data-slide="4">Services</li>
				<li data-slide="6">Gallery</li>
				<li data-slide="10">Contact</li>
				<div class="clear"></div>-->
			</ul>
		</div>
	
	</div>
</div>


<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5" style="background-position: 0px 0px;">
	<div class="padding_slide1">
		<div class="container clearfix">
			<div id="content" class="grid_12">
				<div class="filtr_bg">
                <img src="images/hexlogo.png" height="128" width="128" style="margin-bottom: 20px;">
					<p>Modern Socialite</p>
					<h1>welcome to HEXES</h1>
					<h2>Live in your world, Play in ours, Because life's <br>complicated enough</h2>
				</div>
				<a class="button" title="" data-slide="8">Register</a>
			</div>
		</div>
	</div>
</div>



<div class="slide" id="slide8" data-slide="8" data-stellar-background-ratio="0.5" style="background-size: 100% 664px; background-position: 0px 432px;">
	<div class="effect_2 padding_slide8">
		<div class="container clearfix">
			
			<div id="content" class="grid_12">
				<div id="content" class="grid_12">
					<h1 style="color:#000;">Register</h1>
				</div>
				
				<div class="order_block" ng-app="hexApp">
                    <h2 style="color:#000;"> To sign-up for a free basic account please provide us with some basic information using the form below. Please use valid credentials.</h2>
                    <form class="form" ng-submit="registerUser(userDetails)" ng-controller="LoginCtrl">
                        <input type="email" class="email" ng-model="userDetails.email" ng-click="console.log('what')" placeholder="Email"/>
                        <input type="password" class="password" placeholder="Password" ng-model="userDetails.password"/>
                        <input type="submit" class="submit" /> 
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5" style="background-position: 0px -1537px;">
	<div class="container clearfix">

		<div class="grid_4">
			<a class="serv_block" href="javascript:void(0);" alt="">
				<div class="icon_block1"></div>
				<p>Connect</p>
				Connect with friends through an invite-and-accept communication. Find people using filters such as school for current and ex classmates.  
			</a>
		</div>
		<div class="grid_4">
			<a class="serv_block" href="javascript:void(0);" alt="">
				<div class="icon_block2"></div>
				<p>Communicate</p>
				Keep in contact with your friends, with an elegant messaging system allowing multiple receipients or circles of friends.
			</a>
		</div>
		<div class="grid_4 omega">
			<a class="serv_block" href="javascript:void(0);" alt="">
				<div class="icon_block3"></div>
				<p>Share</p>
				Create and share photo albums and blogs with your friends.                
			</a>
		</div>
	
	</div>
</div>


<div class="slide" id="slide10" data-slide="10" data-stellar-background-ratio="0.5" style="background-size: 100% 395px; background-position: 0px 2404px;">
	<div class="effect_2 padding_slide10">
		<div class="container clearfix">
			
			<div id="content" class="grid_12">
				<h1><span>Contact</span></h1>
			<h2>Cras urna leo, fringilla nec aliquam ac, varius in enim. Maecenas non felis</h2>
			</div>
			<div class="clear"></div>

		</div>
	</div>
	
</div>

	



<div id="footer">
	<div class="container clearfix">
		<div class="copyright">Hexes © 2014 | <a href="javascript:void(0);">Privacy Policy</a></div>
		<div id="back_top"><a class="button" title="" data-slide="1"></a></div>
	</div>
</div>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>

<script type="text/javascript">
			$( ".hexLoginClass" ).hide();
			$(".passwordLogin").click(function(){
				$( "#hexlogin" ).show();
				$( "#hexlogin" ).animate({
    				opacity: 1,
  				}, 1300 );
			})
			$(".passwordLogin").focus(function(){
				$( "#hexlogin" ).show();
				$( "#hexlogin" ).animate({
    				opacity: 1,
  				}, 1300 );
			})
			$(function() {
    $("#hexlogin")
        .mouseover(function() { 
            var src = $(this).attr("src").match(/[^\.]+/) + "over.png";
            $(this).attr("src", src);
        })
        .mouseout(function() {
            var src = $(this).attr("src").replace("over.png", ".png");
            $(this).attr("src", src);
        });
	
});
</script>
