<?php
    if(!isset($_SESSION['user'])){
      header("location: ../modals/404Page.php?notFound");
    }
    else if($_SESSION['idRole']!=1){
      header("location: ../modals/404Page.php?notFound");
    }
    else{
      $log=getFromFile("log.txt");
      $pages=getAllFromTable("menu");
      $pages24=pages24();
      $precentage=precentagePages();
      $logedUsers=getFromFile("logedUsers.txt");
      $countUsers=countUsers();
?>
  <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <p class="navbar-brand">Site Statistics</p>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
        </div>
      </nav>
       <!-- End Navbar -->
       <!-- Percentage by page visits -->
    <div class="content">
        <div class="container">
            <div class="row">
      <div class="col-md-12">   
        <h3>Percentage by page visits</h3>
        <div id="price">
            <table class="table"> 
              <thead>
                <tr>
                <?php
                      foreach($pages as $m):
                  ?>
                      <th><?=$m->name_menu?></th>
                  <?php
                      endforeach;
                  ?>
                </tr>
              </thead>
              <tbody>
                   <tr>
                      <?php
                      if($log):
                          foreach($precentage as $p):
                      ?>
                          <td><?=$p?>%</td>
                      <?php
                      endforeach;
                      else:
                      foreach($precentage as $p):
                      ?>
                        <td>0%</td>
                      <?php
                        endforeach;
                      endif;
                      ?>       
                   </tr>
            </tbody>
            </table>
          </div>
          </div>
		    </div>
		</div>
    </div>
    <!-- Number of page visits in the last 24 hours -->
    <div class="content">
        <div class="container">
            <div class="row">
      <div class="col-md-12">   
        <h3>Number of page visits in the last 24 hours</h3>
        <div id="price">
            <table class="table"> 
              <thead>
                <tr>
                <?php
                      foreach($pages as $m):
                  ?>
                      <th><?=$m->name_menu?></th>
                  <?php
                      endforeach;
                  ?>
                </tr>
              </thead>
              <tbody>
                   <tr>
                      <?php
                          foreach($pages24 as $p24):
                      ?>
                          <td><?=$p24?></td>
                      <?php
                          endforeach;
                      ?>       
                   </tr>
            </tbody>
            </table>
          </div>
          </div>
		    </div>
		</div>
    </div>
    <!-- Number of users loged today -->
    <div class="content">
        <div class="container">
            <div class="row">
      <div class="col-md-12">   
        <h3>Number of users loged today</h3>
        <div id="price">
            <table class="table"> 
              <thead>
                <tr>
                    <td><?=$countUsers?> user/s loged today</td>
                </tr>
              </thead>
            </table>
          </div>
          </div>
		    </div>
		</div>
    </div>
<?php
  }
?>
