<?php 

session_start();
if (!isset($_SESSION['fname'])) {
    header("Location: index.php");
}
if(isset($_POST['insert'])){

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
        
    <title>Home</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');
    .   {
        text-align: center;
        padding: 15px;
        margin: 10px 50px 10px 300px;
        
    }
    .img {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(hospital.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    margin-top: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style-type: none;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        
    }
    
    .sidebar {
        width: 300px;
        position: fixed;
        left: 0; 
        top: 0;
        height: 100%;
        background-color: #868686;
        z-index: 100;
        background: linear-gradient(115deg, #697476 30%, lightgray 90%);
    }
    .sidebar-brand {
        height: 105px;
        padding: 1rem 0rem 1rem 2rem;
        
        
    }
    .sidebar-brand span {
        display: inline-block;
        padding-right: 1rem;
    }
    .sidebar-menu li {
        width: 100%;
        margin-bottom: 1.5rem;
        padding-left: 1rem;
        font-size: 50px;
    }
    
   
    .menu-wrapper .sidebar-menu a {
        padding-left: 1rem;
        display: block;
        color: black;
        font-size: 1.1rem;
    }
    .menu-wrapper .sidebar-menu li a.active {
        background: #fff;
        padding-top: 1rem;
        padding-bottom: 1rem;
        color: var(--main-color);
        border-radius: 30px 0px 0px 30px;
    }
    .menu-wrapper .sidebar-menu li:hover {
        background: #fff;
        padding-top: 5px;
        padding-bottom: 5px;
        color: var(--main-color);
        border-radius: 30px 0px 0px 30px;
        border-style: solid;
        border-width:2px;
    }
    
    .sidebar-menu a span: {
        font-size: 1.5rem;
        padding-right: 1rem;
    }
    .main-content {
        margin-left: 300px;
    }
    header {
        display: flex;
        justify-content: space-between;   
        padding: 1rem 1.7rem ; 
        background-color: #4F4949;
        align-items: center;
        position: fixed;
        width: calc(100% - 300px);
        top: 0;
        z-index: 100;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    }

   header label span {
    font-size: 1.7rem;
    padding-left: 1rem;
   }
   main {
    margin-top: 85px;
    padding: 2rem 1.5rem;
    background: #f1f5f9;
    min-height: calc(100vh - 90px); 
   }
    
   .rooms {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 2rem;
    padding: 2rem;
    margin-top: 1rem;   
  
   }
    .room {
        display: flex;
        justify-content: space-between;
        padding: 2rem;
        background: darkgray;
        text-align: center;
    }
   
    .log {
        border-color: red;
    }
   
   .welcome {
    letter-spacing: 1px;
   }
   .navbar{
	background: #fff;
	width: 100%;
	height: 60px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 0 10px;
    border-radius: 30px 0px 0px 30px;
}



.navbar .nav_right > ul{
	display: flex;
	align-items: center;
}

.navbar .nav_right ul li.nr_li{
	margin-left: 10px;
	cursor: pointer;
	color: #fff;
	font-size: 20px;
	position: relative;
}

.navbar .nav_right ul li.nr_li:hover {
    color: #cefffc;
}

.navbar .nav_right ul li img{
	width: 35px;
	vertical-align: middle;
    margin-top: 10px;
}

.navbar .dd_menu {
    position: absolute;
    right: -25px;
    top: 47px;
    display: flex;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0px 0px 3px rgba(0,0,0,0.25);
    display: none;
}

.navbar .dd_menu .dd_left{
	background: #2E2929;
	padding: 15px 20px;
	border-top-left-radius: 15px;
	border-bottom-left-radius: 15px;
}

.navbar .dd_menu .dd_left li{
	color: #fff;
}

.navbar .dd_menu .dd_right{
	padding: 15px 20px;
}

.navbar .dd_menu li{
	margin-bottom: 10px;
	color: #868686;
}


.navbar .dd_menu:before{
	content: "";
	position: absolute;
	top: -20px;
	right: 30px;
	border: 10px solid;
	border-color: transparent transparent #fff transparent;
}

.navbar .dd_main.active .dd_menu{
	display: flex;
}
h2 {
    color: #Fff;
}
.wet{
    font-family: cambria;
}
.log-out:hover {
    color:red;
}

table {
  border-collapse: collapse;
  width: 100%;
  box-shadow: 0 0 8px rgba(0,0,0,0.9);
}

th, td {
  text-align: left;
  padding: 8px;
  
}

h3 {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
  background-color: lightgray;
}
tr:nth-child(odd) {
  background-color: #fff;
}
th {
    background-color:darkgray;
}

#container {
   text-align: right;
   margin-bottom: 10px;
}

.center {
  display: none;
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate( -50%, -50%);
  text-align: center;

}

/* Add styles to the form container */
.container1 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate( -50%, -50%);
}
.container1 .close-btn{
    position: absolute;
    right: 20px;
    top: 1;
    font-size: 18px;
    cursor: pointer;
}
.close-btn:hover{
    color: #3498db;
}
.container1 {
   display:;
   background: #fff;
   width: 410px;
   padding: 30px;
   box-shadow: 0 0 8px rgba(0,0,0,0.4);
}


.container1 .text {
    font-size: 35px;
    font-weight: 600;
    text-align: center;
}
.container1 form{
    margin-top:20px;
}
.data {
   height: 45px;
   width: 100%;
   margin: 40px 0;
   text-align: left;
}

.data input{
    height: 100%;
    width: 100%;
    padding-left: 10px;
    font-size: 17px;
    border: 1px solid lightgrey;
}
.data label{
    font-size: 17px;
    color: gray;
}
.btn{
    margin:30px 0;
    width: 100%;
    height: 45px;
    position: relative;
    overflow: hidden;
}
.btn .inner{
    height:100%;
    width:300%;
    position: absolute;
    left:-100%;
    z-index:-1;
    background:#1CD95B;  
}
.btn{
    background-color: #12E544;
    color: #fff;
}
.btn:hover {
    background-color: #3e8e41;
    color: #fff;
}
.btn button {
    height: 100%;
    width: 100%;
    background: none;
    border: none;
    font-size: 18px;
    font-weight: 500;
    color: #fff;
}
.btn-info {
    border-radius: 4px;
    padding: 5px 5px;
}
.btn-info {
    cursor:pointer;
}
.btn-danger {
    border-radius: 4px;
    padding: 9px 5px;
}
.open-button {
    position: relative; 
} 

.row , h3 {
    background-color: darkgray;
}
.row {
    box-shadow: 0 0 8px rgba(0,0,0,0.9);
}
.row , button {
  justify-content: space-between;
}


.click {
  margin: 10px 10px; 
  display: inline-block;
  padding: 15px 25px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.click1 {
  margin: 10px 10px; 
  display: inline-block;
  padding: 15px 25px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: blue;
  background-color: #fff;
  border: none;
  border-radius: 5px;
  box-shadow: 0 0 8px rgba(0,0,0,0.4);
}

.click2 {
  margin: 10px 10px; 
  display: inline-block;
  padding: 15px 25px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4D88FE;
  border: none;
  border-radius: 5px;
  box-shadow: 0 0 8px rgba(0,0,0,0.4);
}
.click:hover {
  background-color: #3e8e4
}
.click:active{
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px)
}
.column{
    margin-top:50px;
    padding: -15px;

}
.input{
    border-radius: 5px;
}


</style>
<body>
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><img src="../css/hospital.jpeg" alt="profile_img" width="75px" heigth="75px"> St. Therese</h2>
    </div>
    <div class="menu-wrapper">
        <div class="sidebar-menu" >
            <ul>
                <li>
                    <a href="../admin.php" class="nav-link"> <span class="fa-solid fa-house"></span><span></span>
                    <span class="wet">Pending Reservation</span></a>
                </li>
                <li>
                    <a href="" class="active"> <span class="fa-solid fa-bed"></span><span></span>
                    <span class="wet">Rooms</span></a>
                </li>
                <li>
                    <a href="viewall.php" class="nav-link"> <i class="fa-solid fa-file-circle-check"></i>
                    <span  class="wet">View all Reservation</span></a>
                </li>
            </ul>   
        </div>  
    </div>

    
    
</div>
        <div class="main-content">
            
            <header>
                <h2>
                    <label for ="">
                    </label>
                    Rooms
                </h2>  
                
                      <div class="wrapper">
                        <div class="navbar">
                            <div class="welcome">
                                <?php echo  $_SESSION['fname'] . "</h4>"; ?> 
                            </div>
                            <div class="nav_right">
                            <ul>
                             
                                <li class="nr_li dd_main">
                                <img src="../images/log.png"  alt="profile_img">
                                <div class="dd_menu">
                                        
                                        <div class="dd_right">
                                            <ul>
                                               
                                                <a class="log-out" href="../logout.php">Logout</a>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                </li>
                                
                            </ul>
                        </div>
                        </div>
                      </div>

            </header>
        <main>
            
<div class="container-fluid">
	<div class="col-lg-12">
        <?php require_once '../config.php'; ?>

        <?php
        if(isset($_SESSION['message'])):?>

        <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>          
        </div>
        <?php endif?>
		<div class="row">
            <h3>Private</h3>
            <button type="button" class="click" id="MybtnPreventHTML"  data-target="#MymodalPreventHTML" data-toggle="modal" data-backdrop="static" data-keyboard="false">+ Add room</button>
    <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
     <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
      <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
       <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
        <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
   
	        <!-- .modal -->
	<div class="modal fade" id="MymodalPreventHTML">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title">Private</h1>     
                    <button type="button" class="close" data-dismiss="modal">×</button>                                                         
				</div> 
				<div class="modal-body">
                    <form action="code.php" method="POST">
                                <div class="data">
                                    <label>Room Type</label>
                                    <input class="input" type="text" name="room_type">
                                </div>
                                <div class="data">
                                    <label>Room Number</label>
                                    <input class="input"type="text" name="room_number">
                                </div>
                                <div class="data">
                                    <label>Room Capacity</label>
                                    <input class="input" type="text" name="room_capacity">
                                </div>
                     

				</div>   
				<div class="modal-footer"> 
                   <button type="submit" class="click2"  name="save">Save</button>
                   <button type="submit" class="click1" data-dismiss="modal">Cancel</button>
				</div>
                </form>
			</div>                                                                       
		</div>                                          
	</div>
    <div class="modal fade" id="updateModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title">Update details</h1>     
                    <button type="button" class="close" data-dismiss="modal">×</button>                                                         
				</div> 
				<div class="modal-body">
                    <form action="code.php" method="POST">
                                <div class="data">
                                    <label>Room type</label>
                                    <input class="input"  type="text"  name="room_type">
                                </div>
                                <div class="data">
                                    <label>Room number</label>
                                    <input class="input"type="text"  name="room_number">
                                </div>
                                <div class="data">
                                    <label>Room capacity</label>
                                    <input class="input" type="text"  name="room_capacity">
                                </div>
                     

				</div>   
				<div class="modal-footer"> 
                   <button type="submit" class="click2" name="update">Update</button>
                   <button type="submit" class="click1" data-dismiss="modal">Cancel</button>
                   <input type="hidden" id="hiddendata">
				</div>
                </form>
			</div>                                                                       
		</div>                                          
	</div>
     <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
      <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
       <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
        <!-----MODALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL---->
                   
			<!-- FORM Panel -->

			<!-- Table Panel -->          
                    <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'hospitalDb') or die(mysqli_error($mysqli));
                        $result = $mysqli->query("SELECT * FROM room") or die($mysqli->error);
                        //pre_r($result);
                        ?>

                    <table>   
                        <thead>
                        <tr>
                        <th>Room Type</th>
                        <th>Room number</th>
                        <th>Room Capacity</th>
                        <th>Status</th>
                        <th colspan="2">Action</th>
                        <tr>
                        </thead>
                        <?php
                            while($row = $result->fetch_assoc()): ?>
                                <tr>
                                        <td><?php echo $row['room_type']; ?></td>
                                        <td><?php echo $row['room_number']; ?></td>
                                        <td><?php echo $row['room_capacity']; ?></td>
                                        <td>Available</td>
                                          <td>
                                            
                                           <button  class="btn-info" onclick="GetDetails('.$room_id')">Edit</button>
                                            <a href="code.php?delete=<?php echo $row['room_id'];?>"
                                            class="btn-danger">Delete</a>         
                                          </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tr>
                        
                    </table>

                        <?php
                            function pre_r($array) {
                                echo '<pre>';
                                print_r($array);
                                echo '</pre>';
                            }

                    ?>
                    <!---update function --->
                   <script> 
                    function GetDetails(updateid){
                        $('#hiddendata').val(updateid);
                       
                        $('#updateModal').modal('show');
                    }

                   </script>

                    
                   

        </div>     
        <!---DIV IKA DUHA---> 
        <div class="column"><div class="row">
                    <h3>Semi-Private</h3>
                    <button type="button" id="MybtnPreventHTML" class="click" data-target="#semiward" data-toggle="modal" data-backdrop="static" data-keyboard="false">+ Add room</button>
                    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
	<div class="modal fade" id="semiward">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title">Semi-Private</h1> 
                    <button type="button" class="close" data-dismiss="modal">×</button>                                                             
				</div> 
				<div class="modal-body">
                                <div class="data">
                                    <label>Room Type</label>
                                    <input class="input" type="text">
                                </div>
                                <div class="data">
                                    <label>Room Number</label>
                                    <input class="input" type="text">
                                </div>
                                <div class="data">
                                    <label>Room Capacity</label>
                                    <input class="input" type="text">
                                </div>                        
				</div>   
				<div class="modal-footer">
                   <button type="submit" class="click2">Save</button>
                   <button type="submit" class="click1" data-dismiss="modal">Cancel</button>
				</div>
			</div>                                                                       
		</div>                                          
	</div>
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
                   
			<!-- FORM Panel -->

			<!-- Table Panel -->                

                    <table>   
                        <tr>
                        <th>Room Type</th>
                        <th>Room number</th>
                        <th>Room Capacity</th>
                        <th>Status</th>
                        <th>Action</th>
                        <tr>
                        <td>Semi-Private</td>
                        <td>RM1</td>
                        <td>3</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>

                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>Rm2</td>
                        <td>3</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>A3</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>A4</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <td>Semi-Private</td>
                        <td>A5</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                
                  

                    
                    </table>
	
                    
				</div>
              
        </div>     <div class="column"><div class="row">
                    <h3>Male Ward</h3>
                    <button type="button" id="MybtnPreventHTML" class="click" data-target="#wardroom" data-toggle="modal" data-backdrop="static" data-keyboard="false">+ Add Bedroom</button>
                    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
	<div class="modal fade" id="wardroom">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title">Ward</h1> 
                    <button type="button" class="close" data-dismiss="modal">×</button>                                                             
				</div> 
				<div class="modal-body">
                                <div class="data">
                                    <label>Room Type</label>
                                    <input class="input" type="text">
                                </div>
                                <div class="data">
                                    <label>Room Number</label>
                                    <input class="input" type="text">
                                </div>
                                <div class="data">
                                    <label>Room Capacity</label>
                                    <input class="input" type="text">
                                </div>                        
				</div>   
				<div class="modal-footer">
                   <button type="submit" class="click2">Save</button>
                   <button type="submit" class="click1" data-dismiss="modal">Cancel</button>
				</div>
			</div>                                                                       
		</div>                                          
	</div>
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
                   
			<!-- FORM Panel -->

			<!-- Table Panel -->                

                    <table>   
                        <tr>
                        <th>Room Type</th>
                        <th>Room number</th>
                        <th>Room Capacity</th>
                        <th>Status</th>
                        <th>Action</th>
                        <tr>
                        <td>Semi-Private</td>
                        <td>RM1</td>
                        <td>3</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>

                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>Rm2</td>
                        <td>3</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>A3</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>A4</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <td>Semi-Private</td>
                        <td>A5</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                
                  

                    
                    </table>
	
                    
				</div>
              
        </div>    <div class="column"><div class="row">
                    <h3>Female Ward</h3>
                    <button type="button" id="MybtnPreventHTML" class="click" data-target="#fwroom" data-toggle="modal" data-backdrop="static" data-keyboard="false">+ Add Bedroom</button>
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
	<div class="modal fade" id="fwroom">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title">Female Ward</h1> 
                    <button type="button" class="close" data-dismiss="modal">×</button>                                                             
				</div> 
				<div class="modal-body">
                                <div class="data">
                                    <label>Room Type</label>
                                    <input class="input" type="text">
                                </div>
                                <div class="data">
                                    <label>Room Number</label>
                                    <input class="input" type="text">
                                </div>
                                <div class="data">
                                    <label>Room Capacity</label>
                                    <input class="input" type="text">
                                </div>                        
				</div>   
				<div class="modal-footer">
                   <button type="submit" class="click2">Save</button>
                   <button type="submit" class="click1" data-dismiss="modal">Cancel</button>
				</div>
			</div>                                                                       
		</div>                                          
	</div>
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
                   
			<!-- FORM Panel -->

			<!-- Table Panel -->                

                    <table>   
                        <tr>
                        <th>Room Type</th>
                        <th>Room number</th>
                        <th>Room Capacity</th>
                        <th>Status</th>
                        <th>Action</th>
                        <tr>
                        <td>Semi-Private</td>
                        <td>RM1</td>
                        <td>3</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>

                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>Rm2</td>
                        <td>3</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>A3</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>A4</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <td>Semi-Private</td>
                        <td>A5</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                
                  

                    
                    </table>
	
                    
				</div>   <div class="column"><div class="row">
                    <h3>Pedia Ward</h3>
                    <button type="button" id="MybtnPreventHTML" class="click" data-target="#pediaward" data-toggle="modal" data-backdrop="static" data-keyboard="false">+ Add room</button>
                    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
	<div class="modal fade" id="pediaward">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title">Pedia Ward</h1> 
                    <button type="button" class="close" data-dismiss="modal">×</button>                                                             
				</div> 
				<div class="modal-body">
                                <div class="data">
                                    <label>Room Type</label>
                                    <input class="input" type="text">
                                </div>
                                <div class="data">
                                    <label>Room Number</label>
                                    <input class="input" type="text">
                                </div>
                                <div class="data">
                                    <label>Room Capacity</label>
                                    <input class="input" type="text">
                                </div>                        
				</div>   
				<div class="modal-footer">
                   <button type="submit" class="click2">Save</button>
                   <button type="submit" class="click1" data-dismiss="modal">Cancel</button>
				</div>
			</div>                                                                       
		</div>                                          
	</div>
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
    <!-- .modal -->
                   
			<!-- FORM Panel -->

			<!-- Table Panel -->                

                    <table>   
                        <tr>
                        <th>Room Type</th>
                        <th>Room number</th>
                        <th>Room Capacity</th>
                        <th>Status</th>
                        <th>Action</th>
                        <tr>
                        <td>Semi-Private</td>
                        <td>RM1</td>
                        <td>3</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>

                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>Rm2</td>
                        <td>3</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>A3</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <tr>
                        <td>Semi-Private</td>
                        <td>A4</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                        <td>Semi-Private</td>
                        <td>A5</td>
                        <td>1</td>
                        <td style="background-color: #4CAF50">Available</td>
                        <td>Update Delete</td>
                        </tr>
                
                  

                    
                    </table>
	
                    
				</div>  </div>       </div>   
        
			
	</div>	
                    
    </div>
    

</div>          


        </main>          
            



        
<script>
	var dd_main = document.querySelector(".dd_main");

	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
	})
</script>

</body>
</html>

