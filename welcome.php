<?php
session_start();
include("./header.php");
?>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<header class="w3-container" style="padding-top:22px">
<h5><i class="fas fa-tachometer-alt"></i> Dashboard 2024</h5>
</header>
<?php
if(isset($_SESSION['welcome_msg'])) {
  echo '<div id="welcomeAlert" class="alert alert-success " style="width: 50%; left: 25%; margin-top: -59px;" role="alert" >
          ' . $_SESSION['welcome_msg'] .'</div>';
  unset($_SESSION['welcome_msg']);
}
?>
<div class="w3-row-padding w3-margin-bottom">
<div class="w3-quarter">
<div class="w3-container w3-red w3-padding-16">
<div class="w3-left"><i class="fas fa-comment w3-xxxlarge"></i></div>
<div class="w3-right"><h3>52</h3></div>
<div class="w3-clear"></div><h4>Messages</h4></div>
</div>
    
<div class="w3-quarter">
<div class="w3-container w3-blue w3-padding-16">
<div class="w3-left"><i class="fas fa-eye w3-xxxlarge"></i></div>
<div class="w3-right"><h3>99</h3></div>
<div class="w3-clear"></div><h4>Views</h4></div>
</div>

<div class="w3-quarter">
<div class="w3-container w3-teal w3-padding-16">
<div class="w3-left"><i class="fas fa-share-alt-square w3-xxxlarge"></i></div>
<div class="w3-right"><h3>23</h3></div>
<div class="w3-clear"></div><h4>Shares</h4></div>
</div>

<div class="w3-quarter">
<div class="w3-container w3-orange w3-text-white w3-padding-16">
<div class="w3-left"><i class="fas fa-users w3-xxxlarge"></i></div>
<div class="w3-right"><h3>50</h3></div>
<div class="w3-clear"></div><h4>Users</h4></div>
</div>
</div>
<div class="w3-panel">
<div class="w3-row-padding" style="margin:0 -16px">
<div class="w3-third">
<h5>Regions</h5>
<img src="https://www.w3schools.com/w3images/region.jpg" style="width:100%" alt="Google Regional Map">
</div>
<div class="w3-twothird">
<h5>Feeds</h5>
<table class="w3-table w3-striped w3-white">
<tr>
<td><i class="fas fa-user w3-text-blue w3-large"></i></td>
<td>New record, over 90 views.</td>
<td><i>10 mins</i></td>
</tr>
<tr>
<td><i class="fas fa-bell w3-text-red w3-large"></i></td>
<td>Database error.</td>
<td><i>--</i></td>
</tr>
<tr>
<td><i class="fas fa-users w3-text-yellow w3-large"></i></td>
<td>New record, over 40 users.</td>
<td><i>17 mins</i></td>
</tr>
<tr>
<td><i class="fas fa-comment w3-text-red w3-large"></i></td>
<td>New comments.</td>
<td><i>25 mins</i></td>
</tr>
<tr>
<td><i class="fas fa-bookmark w3-text-blue w3-large"></i></td>
<td>Check transactions.</td>
<td><i>28 mins</i></td>
</tr>
<tr>
<td><i class="fas fa-laptop w3-text-red w3-large"></i></td>
<td>CPU overload.</td>
<td><i>--</i></td>
</tr>
<tr>
<td><i class="fas fa-share-alt-square w3-text-green w3-large"></i></td>
<td>New shares.</td>
<td><i>39 mins</i></td>
</tr>
</table>
</div>
</div>
</div>
  
<hr>
  
<div class="w3-container">
<h5>General Stats</h5>
<p>New Visitors</p>
<div class="w3-grey"><div class="w3-container w3-center w3-padding w3-green" style="width:15%">+1%</div></div>
<p>New Users</p>
<div class="w3-grey"><div class="w3-container w3-center w3-padding w3-orange" style="width:50%">3.5%</div></div>
<p>Bounce Rate</p>
<div class="w3-grey"><div class="w3-container w3-center w3-padding w3-red" style="width:89%">99%</div></div>
</div>
  
<hr>

<div class="w3-container">
<h5>Locations</h5>
<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
<tr><td>Grönland</td><td>65%</td></tr>
<tr><td>Germany</td><td>15.7%</td></tr>
<tr><td>Russia</td><td>5.6%</td></tr>
<tr><td>Spain</td><td>2.1%</td></tr>
<tr><td>India</td><td>1.9%</td></tr>
<tr><td>France</td><td>1.5%</td></tr>
</table>
  
<hr>
  
<button class="w3-button w3-dark-grey">More Countries &nbsp;<i class="fas fa-arrow-right"></i></button>
</div>
  
<hr>
  
<div class="w3-container">
<h5>Freizeit-Radar</h5>
<ul class="w3-ul w3-card-4 w3-white">
<li class="w3-padding-16">
<img src="https://www.w3schools.com/w3images/avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
<span class="w3-large">Lisa</span>
</li>
<li class="w3-padding-16">
<img src="https://www.w3schools.com/w3images/avatar4.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
<span class="w3-large">Mandy</span>
</li>
<li class="w3-padding-16">
<img src="https://www.w3schools.com/w3images/avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
<span class="w3-large">Michelle</span>
</li>
<li class="w3-padding-16">
<img src="http://butschy.de/img/avatar/butschy.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
<span class="w3-large">bUTschy</span>
</li>
<li class="w3-padding-16">
<img src="https://www.w3schools.com/w3images/avatar1.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
<span class="w3-large">Klaus</span>
</li>
<li class="w3-padding-16">
<img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
<span class="w3-large">Hans</span>
</li>
<li class="w3-padding-16">
<img src="https://www.w3schools.com/w3images/avatar3.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
<span class="w3-large">Peter</span>
</li>
</ul>
</div>
<hr>

<div class="w3-container">
<h5>Kommentare</h5>
<div class="w3-row">
<div class="w3-col m2 text-center"><img class="w3-circle" src="https://www.w3schools.com/w3images/avatar3.png" style="width:96px;height:96px"></div>
<div class="w3-col m10 w3-container">
<h4>Peter <span class="w3-opacity w3-medium">10 Mai 2018 - 09:12 Uhr</span></h4>
<p>Lorem ipsum ist Text, der gerne als Platzhalter genommen wird, wenn es noch keinen "richtigen" Text gibt. Der Grund dafür ist ein angenehmer Zeilenfall, der einen guten Eindruck von dem finalen Layout vermittelt.</p>
</div>
</div>

<div class="w3-row">
<div class="w3-col m2 text-center">
<img class="w3-circle" src="https://www.w3schools.com/w3images/avatar2.png" style="width:96px;height:96px">
</div>
<div class="w3-col m10 w3-container">
<h4>Hans <span class="w3-opacity w3-medium">9 Mai 2018 - 12:09 Uhr</span></h4>
  

  <p>Wenn man beispielsweise eine Broschüre oder Buch entwirft, so kann der Designer auf Lorem ipsum Text zurückgreifen, wenn noch kein Text vorhanden ist.
  
<div class="w3-example">
<h3>CSS Beispiel</h3>
<div class="w3-code notranslate cssHigh">
body
{<br>&nbsp;&nbsp;&nbsp;
background-color: blue;<br>}<br>
<br>h1 {<br>
&nbsp;&nbsp;&nbsp;
color: #fff;<br>
&nbsp;&nbsp;&nbsp;
text-align: center;<br>
}<br><br>
p
{<br>
&nbsp;&nbsp;&nbsp;
font-family: Roboto;<br>
&nbsp;&nbsp;&nbsp;
font-size: 1.6rem;<br>
}</div>
  
  
</div>
</div>
  
</div>
  
<hr>
  
<div class="w3-container w3-dark-grey w3-padding-32">
<div class="w3-row">

<div class="w3-container w3-third">
<h5 class="w3-bottombar w3-border-green">Demographic</h5>
<p>Europa</p>
<p>Germany</p>
<p>Hamburg</p>
</div>

<div class="w3-container w3-third">
<h5 class="w3-bottombar w3-border-red">System</h5>
<p>Windows 10</p>
<p>Linux</p>
<p>Android</p>
</div>

<div class="w3-container w3-third">
<h5 class="w3-bottombar w3-border-orange">Links</h5>
<p>Users</p>
<p>Active</p>
<p>Geo</p>
</div>

</div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-16 w3-light-grey"><h4>FOOTER</h4></footer>

<!-- End page content -->
</div>

<!-- codecolor -->
 <script>
    window.onload = function() {
                        var alertIds = ['welcomeAlert'];
                        alertIds.forEach(function(id) {
                            var alertElement = document.getElementById(id);
                            if (alertElement) {
                                setTimeout(function() {
                                    alertElement.style.display = 'none';
                                }, 2000);
                            }
                        });
                    };
 </script>
<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>
</body>