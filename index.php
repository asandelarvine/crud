<?php
    include_once 'header.php';
    include_once 'conn.php';
    include_once 'select_from.php';
?>
<h1 style="text-align:center;">PROJECT CRUD.</h1>
<div class="row" style="padding:10px;" >
    <div class="col-md-6">
        <input type="text" name="Search" class="form-control" placeholder="Search by Name,Email or Phone number">
        <button type="submit"><i class="fa fa search"></i></button>
    </div>
    <div class="col-md-5" style="text-align:right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  ADD NEW PERSON</button>    
  </div> 
</div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phonenumber</th>
      <th scope="col">Gender</th>
      <th scope="col">Year(s)</th>
      <th scope="col">Weight(KG)</th>
      <th scope="col">Married</th>
      <th scope="col">Working</th>
      <th scope="col">Action</th> 
    </tr>
  </thead>
  <?php

    $stmt = "SELECT * FROM person";
    $result = mysqli_query($conn, $stmt);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){

    while($row = mysqli_fetch_assoc ($result)){
        echo "
    
    <tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td> 
        <td>".$row['phonenumber']."</td>
        <td>".$row['gender']."</td> 
        <td>".$row['dob']."</td>
        <td>".$row['weight']."</td> 
        <td>".$row['married']."</td>
        <td>".$row['working']."</td>
        <td><button class='btn btn-primary' data-toggle='modal' data-target='#edit' type='button' >EDIT</button>
        <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal'>DELETE</button></td>   
    </tr>";
  ?>
  <!-- // edit modal -->
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">EDIT <?php echo $row['name'];?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
              </button>
        </div>
            <div class="modal-body">
                <form action="select_from.php" method="post">
                  <input id="name"  name="name" type="text" placeholder="Name" value="<?php echo $row['name'];?>"><br>
                  <br>
                  <input id="E-mail" name="E-mail" type="E-mail" placeholder="E-mail" value="<?php echo $rows['email'];?>"><br>
                  <br>
                  <input id="phone"  name="phonenumber" type="number" placeholder="Phonenumber"  value="<?php echo $rows['phonenumber'];?>"><br>
                  <br>
                  Gender<br>          
                  <input id="male" type="radio" name="gender" value="M">Male
                  <input id="female" type="radio" name="gender" value="F">Female<br>
                  <br>
                  Date of Birth:<br>
                  <input id="DOB" type="date" name="date" placeholder="Date of Birth"><br>
                  <br>
                  <input id="name"  name="Weight" type="text" placeholder="Weight"><br>
                  <br>
                  Married:<br>          
                  <input type="radio" name="married" value="yes">YES
                  <input type="radio" name="married" value="no">NO<br>
                  <br>
                  Time In:<br>
                  <input id="time" name="time" type="time" placeholder="--:--"><br>
                  <br>
                  <button class="btn btn-primary" type="submit" style="width:100%;">ADD</button>
                </form>
            </div>     
        </div>
      </div>
        
      </div>
        <?php
    }
  }
        ?> 
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">CREATE NEW PERSON</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="select_from.php" method="post">
              <input id="name"  name="name" type="text" placeholder="Name" ><br>
              <br>
              <input id="E-mail" name="email" type="E-mail" placeholder="E-mail" ></input><br>
              <br>
              <input id="phone"  name="phonenumber" type="number" placeholder="Phonenumber"><br>
              <br>
              Gender<br>          
              <input id="male" type="radio" name="gender" value="M">Male
              <input id="female" type="radio" name="gender" value="F">Female<br>
              <br>
              Date of Birth:<br>
              <input id="DOB"  name="date" placeholder="Date of Birth"><br>
              <br>
              <input id="name"  name="weight" type="text" placeholder="Weight"><br>
              <br>
              Married:<br>          
              <input type="radio" name="married" value="true">YES
              <input type="radio" name="married" value="false">NO<br>
              <br>
              Time In:<br>
              <input id="time" name="time" type="text" placeholder="--:--"><br>
              <br>
          <button class="btn btn-primary" name="submit" type="submit" style="width:100%;">ADD</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
    include_once 'footer.php';
?>






