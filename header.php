<div class="container-fluid mt-2" style="background:skyblue;color: white;">
   <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="register.php" style="color:white;">Ragistration</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color:white;">
            Login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="stu_login.php">Student Login</a></li>
            <li><a class="dropdown-item" href="teach_login.php">Teacher Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="admin_login.php">Admin Login</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;">About Us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>