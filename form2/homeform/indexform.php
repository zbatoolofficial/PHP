<?php include_once 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Admission Form</h3>
            </center>
            <form action="Function.php" method="POST">
                <label class="w-50 ">
                    Enter Your Name
                    <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
                </label>
                <label class="w-50 ">
                    Enter Your CNIC
                    <input type="" class="form-control" name="userCNIC" placeholder="CNIC">
                </label>
                <label class="w-50 ">
                    Enter Your Email
                    <input type="email" class="form-control" name="useremail" placeholder="Email">
                </label>
                <label class = "w-50 ">
                Educational Level<br>
                <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Default radio
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Default checked radio
  </label>
</div></label>
<label class = "w-50 ">
Gender<br>
<input type="checkbox">Male</checkbox>
<input type="checkbox">Female</checkbox>
                </label>
                <label class="w-50 ">
                    Address
                    <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Address</label>
</div>
                    <!-- <input type="textarea" class="form-control" name="useraddress" placeholder="Address"> -->
                </label>

                <label class="w-50 ">
                    Enter Your Password
                    <input type="password" class="form-control" name="userpassword" placeholder="">
                </label>
                
                <br>
                <input type="submit" name="formsubmit" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>