<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LEADERBOARD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
			
			.
 <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">task</a>
            </li>
			</ul>
 <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">login</a>
            </li>
        </ul> <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">register</a>
            </li>
        </ul>
			</nav>
		<div class="jumbotron">
  <div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="3.svg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">1.yashwanth</h5>
    <p class="card-text">score</p>
	  <p class="card-text">0</p>
	  
  </div>
</div>
    </div>
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="1.svg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">2.monisha</h5>
    <p class="card-text">score</p>
    <p class="card-text">0</p>
		  </div>
</div>
    </div>
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="2.svg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">3.anuhya</h5>
    <p class="card-text">score</p>
	  <p class="card-text">0</p>
	  
      </div>
</div>
    </div>
  </div>
</div>

	  
  </div><table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">comments</th>
      <th scope="col">score</th>
    </tr>
  </thead>
  <tbody>
  
<?php
	
	$username = $_POST['username'];

$password = $_POST['password'];
$servername = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname = "account";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "INSERT INTO form (username,password)
			values('$username','$password')";
			$conn->query($sql);


  $sql1 = "SELECT id, name, score FROM scores";
$result1 = $conn->query($sql1);
$sql2 = "SELECT * FROM scores
	 ORDER BY score DESC" ;
	 $result2 = $conn->query($sql2);
  
  if ($result1->num_rows > 0) {
	  
 while($row = $result1->fetch_assoc()){
  echo '<tr>
      <td>'.$row["id"].'</td>
      <td>'.$row["name"].'</td>
     
      <td>'.$row["score"].'</td>
    </tr>';
 }

	echo '</table>';
	
 
  }
  else  {
    echo "0 results";
}
  

$conn->close();
?>

 
  </tbody>
</table>

</body>
</html>
		
			