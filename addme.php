<?php
    include_once ('header.php');
?>



<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="Create New Person" id="create">Create New Person</h5>
        <button class="btn btn-secondary" button="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
        <form action="" method="post">
              <input id="name"  name="name" type="text" placeholder="Name"><br>
              <br>
              <input id="E-mail" name="E-mail" type="E-mail" placeholder="E-mail"></input><br>
              <br>
              <input id="phone"  name="phonenumber" type="number" placeholder="Phonenumber"><br>
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
              <input id="time" name="time" type="time" placeholder="--:--:--"><br>
              <br>
          <button class="btn btn-primary" type="submit" style="width:100%;">ADD</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
    include_once ('footer.php');
?>
