<header class="main-header">
      <?php session_start();  ?>
      <!-- Logo -->
      <a href="kompetensi-inti.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>E</b>DT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>E</b>DATA</span>
      </a>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only"> Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
          
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#">
                <i class="fa fa-user"></i> <?php echo $_SESSION['name'];?> 
              </a>
    
            </li>
              
              <li class="dorpdown massages-menu">
                <a href="petunjuk.php" class="fa fa-book"></a>
              </li>
              
              
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="index.php">
                 logout 
              </a>
               
            </li>

           
          </ul>
        </div>
      </nav>
    </header>