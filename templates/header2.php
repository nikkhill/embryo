<!DOCTYPE html>

<html>

    <head>
        <link href="/css/styles.css" rel="stylesheet"/>
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        
        <?php if (isset($title)): ?>
            <title>C$50 Finance: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>C$50 Finance</title>
        <?php endif ?>

        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>
        <style>
            td {
                text-align : left;
            }
            </style>

        
    </head>

    <body>
 <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">C$50 Finance</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            
            <li>
              <a href="../help/">Help</a>
            </li>
            <li>
              <a href="http://news.bootswatch.com">Blog</a>
            </li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
            
            <?php
                if (empty($_SESSION["id"]))
                {
                    print('<li><a href="login.php">Log In</a></li>');
                }
                else
                {
                    print('<li><a href="logout.php">Log Out</a></li>');
                }
            ?>
            
          </ul>

        </div>
      </div>
    </div>
        <div class="container">

            <div id="top">
                <a href="/"><img alt="C$50 Finance" src="/img/df.gif" class="img-responsive" alt="Responsive image"/></a>
            </div>

            <div id="middle">
