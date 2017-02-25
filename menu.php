    <?php @session_start();?>
    <script src="js/suggest.js" type="text/javascript"></script> 
    <script type="text/javascript">
    function place(ele){
      document.getElementById('txt').value = ele.innerHTML;
      document.getElementById("livesearch").style.display = "none";
    }
    </script>
    <style type="text/css"> 
   #txt{
      border: solid #A5ACB2;
      margin:5px;
    } 
    </style>

    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="home.php">Gaming for Life</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
                  <ul class="dropdown-menu">

                    <li><a href="games.php">Games</a></li>
                    <li><a href="consoles.php">Consoles</a></li>
                    <li><a href="other.php">Other gaming equipment</a></li>
                    <li><a href="products.php">All Products</a></li>
                    <?php if(isset($_SESSION['privilegija'])){
                  if($_SESSION['privilegija']>=2){?>
                
                    <li><a href="addproduct.php">Add Product <span class="sr-only">(current)</span></a></li>
                    <li><a href="deleteproduct.php">Delete Product</a></li>
                <?php }
                } ?>
                    
                  </ul>
                </li>
                <li>
                  <form onload="document.getElementById('txt').focus()">
                    <input type="text" id="txt" size="35" class="form-control" placeholder="Search for..." onkeyup="suggestion(this.value)"> 
                    <div id="livesearch"></div>
                  </form>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['use']))   
                  {?>
                    <li><a href="logout.php">Sign out <span class="sr-only">(current)</span></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="user.php">User profile</a></li>
                      <li><a href="changepassword.php">Change Password</a></li>
                    </ul>
                  </li>
                        
                <?php }else{?>
                <li><a href="login.php">Sign in <span class="sr-only">(current)</span></a></li>
                
                <li><a href="register.php">Register</a></li>
                <?php }
                ?>
                <li><a href="cart.php">Cart</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>