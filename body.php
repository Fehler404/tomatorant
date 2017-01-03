<section id="intro">
    <div class="content">
    <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h1>TOMATORANT</h1>
        <p>Das total "einzigartige" Restaurant</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Über Uns <i class="fa fa-cutlery" aria-hidden="true"></i></a>
        <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-calendar" aria-hidden="true"></i> Öffnungzeiten</a></p>
      </div>
    </div>
    </div>
    </div>
</section>

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a class="navbar-brand" href="#"><?php echo $website_name;?></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?php include('uber.php');?>
<?php include('speisekarte.php');?>