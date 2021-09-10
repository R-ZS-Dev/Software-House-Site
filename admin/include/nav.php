<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="#"><img src="assets/img/logo2.png" height="40"></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarS" >
    		<span class="navbar-toggler-icon"></span>
  		</button>

  <div class="collapse navbar-collapse" id="navbarS">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#intro">About-US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#team">Testimonials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#career">Career</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#footer">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">


      <!-- nav bar show logout if user is login -->

    <?php if(isset($_SESSION['session_login'])): ?>
    <a class="form-control mr-sm-2" href="logout.php">Log-Out</a>
    <?php else: ?>
      <a class="form-control mr-sm-2" href="login.php">Log-In</a>
    <?php endif ?>

      
      <!-- <a class="form-control mr-sm-2" href="registeration.php">Sign-Up Free</a> -->
    </form>
  </div>
</nav>
<script>
  document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 10) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 
</script>