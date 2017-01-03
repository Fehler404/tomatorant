<?php include('core/templates/header.php');?>

<body>
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
        <ul class="nav navbar-nav navbar-left">
            <li><a class="navbar-brand" href="#"><?php echo $website_name;?></a></li>
            </ul>  
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#about"><?php echo $tab1;?></a></li>
            <li><a href="#contact"><?php echo $tab2;?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $tab_dropdown;?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><?php echo $tab_dropdown1;?></a></li>
                <li><a href="#"><?php echo $tab_dropdown2;?></a></li>
                <li><a href="#"><?php echo $tab_dropdown3;?></a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><?php echo $tab_dropdown4;?></a></li>
                <li><a href="#"><?php echo $tab_dropdown5;?></a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <section id="wir">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Wir über Uns</h3>
                </div>
                <div class="col-md-4">
                <img src="images/remy.jpg">
                </div>
                <div class="col-md-4">
                
                </div>
                <div class="col-md-4">
                
                </div>
            </div>
        </div>
    </section>
</body>

<?php include('core/templates/footer.php');?>