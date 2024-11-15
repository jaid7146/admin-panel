<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  html, body { font-family: Roboto, sans-serif; }
  </style>

<body class="w3-light-grey">
<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
<button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fas fa-bars"></i> &nbsp;Menu</button>
<span class="w3-bar-item w3-right">
<i class="bi bi-box-arrow-right logout-icon h3" onclick="confirmLogout()" title="Logout"></i>
</span>
</div>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
<div class="w3-container w3-row">
<div class="w3-col s4">
<img src="https://www.w3schools.com/w3images/avatar5.png" class="w3-circle w3-margin-right" style="width:46px">
</div>
<div class="w3-col s8 w3-bar">
   <?php
    if (isset($_SESSION['Fullname'])) {
        echo "Welcome, " . ($_SESSION['Fullname']);
    }
    ?> </div>
    <?php
// Get the current page's filename
$current_page = basename($_SERVER['PHP_SELF']);
$is_user_list_active = ($current_page == 'user.php' || $current_page == 'add_user.php') ? 'w3-blue' : '';
?>
</strong></span><br>
<a href="#" class="w3-bar-item w3-button"><i class="fas fa-envelope"></i></a>
<a href="#" class="w3-bar-item w3-button"><i class="fas fa-user"></i></a>
<a href="#" class="w3-bar-item w3-button"><i class="fas fa-cog"></i></a>
</div>
</div>
<hr>
<!-- <div class="w3-container"><h5>Dashboard</h5></div> -->
<div class="w3-bar-block" id="nav-bar"> 
<a href="./welcome.php" class="w3-bar-item w3-button w3-padding active <?php if($current_page == 'welcome.php') { echo 'w3-blue'; } ?>">
    <i class="fa-solid fa-house"></i>&nbsp;Dashboard
  </a>
  <a href="./user.php" class="w3-bar-item w3-button w3-padding <?php echo $is_user_list_active; ?>">
        <i class="fas fa-users fa-fw"></i>&nbsp; User's List
    </a>
<a href="#" class="w3-bar-item w3-button w3-padding "><i class="fas fa-users fa-fw"></i>&nbsp; Traffic</a>
<a href="#" class="w3-bar-item w3-button w3-padding "><i class="fas fa-bullseye fa-fw"></i>&nbsp; Geo</a>
<a href="#" class="w3-bar-item w3-button w3-padding "><i class="fas fa-gem fa-fw"></i>&nbsp; Orders</a>
<a href="#" class="w3-bar-item w3-button w3-paddin g"><i class="fas fa-bell fa-fw"></i>&nbsp; News</a>
<a href="#" class="w3-bar-item w3-button w3-padding "><i class="fas fa-university fa-fw"></i>&nbsp; General</a>
<a href="#" class="w3-bar-item w3-button w3-padding "><i class="fas fa-history fa-fw"></i>&nbsp; History</a>
<a href="#" class="w3-bar-item w3-button w3-padding "><i class="fas fa-cog fa-fw"></i>&nbsp; Settings</a><br><br>
</div>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<script>
  w3CodeColor();

var mySidebar = document.getElementById('mySidebar');
var overlayBg = document.getElementById('myOverlay');

function w3_open() {
if (mySidebar.style.display === 'block') {
mySidebar.style.display = 'none';
overlayBg.style.display = "none";
}
else {
mySidebar.style.display = 'block';
overlayBg.style.display = "block";
}
}

function w3_close() {
mySidebar.style.display = "none";
overlayBg.style.display = "none";
}

function confirmLogout() {
  if (confirm("Are you sure you want to log out?")) {
     window.location.href = "./logout.php";
  }
}
var dropdown = document.getElementsByClassName("dropdown-btn");
for (var i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
  });
}
  </script>