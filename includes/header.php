<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.html">LittleFox</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#events" class="nav-link">events</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">about</a></li>


        <!--
      <ul>
         
          <div class="droopdwon">
            
          <li>
          <div class="dropdown-content"> 
            <a href="admin/login.php">
              <i class="fa fa-user" aria-hidden="true"> </i>
              Admin
            </a>
          </li>
          <li>
            <a href data-toggle="modal" data-target="#modal_login">
              <i class="fa fa-sign-in" aria-hidden="true"></i>
              Login
            </a>
          </li>
            <li>
            <a herf data-toggle="modal" data-target="#modal_register">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
              Register
            </a>
          </li>
        -->



        <style>
          .dropdown {
            display: inline-block;
            position: relative
          }

          .dropdown-content {
            position: absolute;
            background-color: whitesmoke;
            min-width: 200px;
            display: none;
            z-index: 1;
          }

          .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
          }

          .dropdown-content a:hover {
            background-color: white;
          }

          .dropdown:hover .dropdown-content {
            display: inline-block;
          }

          .dropdown:hover .dropbtn {
            background-color: black;
          }
        </style>
        </Head>

        <Body>

          <div class="dropdown">
            <li class="nav-item cta"><a href="register.php?event_id=1" class="nav-link active"><span>My Account</span></a></li>
            <div class="dropdown-content">
              <a href="admin/login.php"> Admin </a>
              <a href="Login/index.php"> Login </a>
              <a href="register.php?event_id=1"><span>Register</span></a>
            </div>
          </div>
        </Body>
        <li class="nav-item cta"></li>
      </ul>
    </div>
  </div>



  <!--         

          <li class="nav-item cta"><a href="register.php?event_id=1" class="nav-link"><span>Register</span></a></li>
          
          <li class="nav-item cta"><a href="register.php?event_id=1" class="nav-link"><span>login</span></a></li>
-->
  </ul>
  </div>
  </div>
</nav>