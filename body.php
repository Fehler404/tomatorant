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
          <a class="navbar-brand" href="#"><?php echo $website_name;?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

<?php include('uber.php');?>
<?php include('speisekarte.php');?>