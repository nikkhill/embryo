<!DOCTYPE html>

<html>

    <head>
        <link href="../public/css/styles.css" rel="stylesheet" media="screen"/>
        <link href="../public/css/bootstrap.min.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>BITS Embryo: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>BITS Embryo</title>
        <?php endif ?>

        <script src="../public/js/jquery-1.10.2.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/jquery.dataTables.min.js"></script>
        <script src="../public/js/scripts.js"></script>
        
        <script src="../public/js/dataTables.bootstrap.min.js"></script>
        <style>
            td {
                text-align : left;                
            }
            .navbar-default , .btn-default {
                background-image : none;
            }
            </style>

        
    </head>

    <body>
 <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../public/" class="navbar-brand">Home</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            
            
            <?php
                if (!empty($_SESSION["id"]))
                {
                    print('<li><a href="speakers.php">Speakers</a></li>');
                    print('<li><a href="events.php">Events</a></li>');
                    print('<li><a href="new_event.php">New Event</a></li>');
                    print('<li><a href="members.php">Members</a></li>');
                    print('<li><a href="my_account.php">My account</a></li>');
                }
                
            ?>         
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
            
            <?php
                if (!empty($_SESSION["id"]))
                {
                    print('<li><a href="logout.php">Log Out</a></li>');
                }    
            ?>
            
          </ul>

        </div>
      </div>
    </div>
        <div class="container" >
            <div class="page-header" id="banner" style="padding: 30px 15px 0 15px;">
		        <div>
		        	<h1>BITS Embryo</h1>
		        	<?php if (isset($title)): ?>
		        	    <p class="lead"><?= htmlspecialchars($title) ?></p>
		        	<?php else: ?>
		        	    <p class="lead">Manage Embryo database</p>
		        	<?php endif ?>
		      	</div>
			</div>
	    
            <div id="middle">
