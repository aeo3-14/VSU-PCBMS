<?php
  include "supplierInfo.php";
  if(!($_SESSION['role']=="manager")){
    echo "<script>alert('You are browsing invalid page')</script>";
}
?>
<div class="container-xl "style="background-color:#F0F1EF">
<h3 style="color:#13660A;margin-bottom:-10px">New Supplier</h3>
<hr color="green" size="5">
                <form class="row g-3" action="../Controller/addSupplier.php" method="post">
                  <div class="col-md-6">
                    <label for="inputText" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="company">
                  </div>
                  <div class="col-md-6">
                    <label for="inputContact" class="form-label">Name of Contact Person</label>
                    <input type="text" class="form-control" name="contact_person">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="1234 Main St">
                  </div>
                  <div class="col-12">
                    <label for="inputPhone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" placeholder="09...">
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">Sex</label>
                    <select class="form-select" name="sex" id="sex">
                      <option selected>Male</option> 
                      <option>Female</option>
                    </select>
                  </div>
                   
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary" style="float:right;margin-bottom:15px">Create</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
      </div>
  </div>

</body>