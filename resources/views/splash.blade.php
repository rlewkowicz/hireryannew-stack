<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script src="js/app.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-upper">
        <h1 class="cover-heading">Ryan Lewkowicz</h1>
        <img src="media/ryan.png" class="img-circle img-responsive">
      </div>
      <div class="site-wrapper-lower">
        <div id="tabs">
          <ul class="nav info-nav">
            <li class="inactive"><a href="#menu1">My Card</a></li>
            <li class="inactive"><a href="#menu2">Resume</a></li>
            <li class="inactive"><a href="#menu3">My Projects</a></li>
            <li class="inactive"><a href="#menu4">The Old Site</a></li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div id="menu1">
          <div class='container'>
            <div class='single-item img-responsive'>
              <img src="media/sd.jpeg" class="img-responsive">
              <img src="media/lw.jpg" class="img-responsive">
            </div>
          </div>
        </div>
        <div id="menu2">
          <div class="resume-container">
            <div class="resume">
              <iframe src="http://docs.google.com/gview?url=https://drive.google.com/uc?id=0Bws0QSYGC_1ldnpxOERidGY1S0U&embedded=true" frameborder="0"></iframe>
            </div>
          </div>
        </div>
        <div id="menu3">
          <div class="github-wrap">
            <a class="git-anchor" href="https://github.com/rlewkowicz">
              <img src="media/GitHub_Logo.png" class="img-responsive">
            </a>
          </div>
          <div class="row-one project">
            <div class="table">
              <h2>Mediawiki and Docker</h2>
              <h2>Jenkins CI/CD</h2>
            </div>
            <div class="table">
              <a href="http://binaryoasis.com:8000/">Project Compendium</a>
              <a href="http://jenkins.binaryoasis.com/">My Jenkins Builder</a>
            </div>
            <div class="table">
              <p>
                Mediawiki is the world's largest enterprise wiki platform. It can be less than trivial to install only minus the fact that I've made it very easy. This is the project overview.
              </p>
              <p>
                Jenkins is a swiss army knife of sorts used predominantly with CI/CD. I use it against a number of forked repos to keep my docker images up to date with the needed dependencies.
              </p>
            </div>
          </div>
        </div>
        <div id="menu4">
          <h3>Menu 3</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>
