
<?php
    include_once('../Controller/connection.php');
 

   
   // Check if the supplier ID parameter is provided
   if (isset($_GET['supp_id'])) {
    $supp_id = $_GET['supp_id'];

    // Fetch data of the selected supplier
    $query = "SELECT * FROM supplier WHERE supp_id = $supp_id";
    $result = mysqli_query($conn, $query);

    // Check if the supplier exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
?>

<?php
   include "supplierInfo.php";
?>
<div class="container-md "style="background-color:#F0F1EF">
<h3 style="color:#13660A;margin-bottom:-10px">Edit Supplier</h3>
<hr color="green" size="5">
                <form class="row g-3" action="../Controller/updateSupplier.php" method="POST">
                  <div class="col-md-6">
                   <input type="hidden" name="supp_id" value="<?php echo $row['supp_id']; ?>">
                    <label for="inputText" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="inputText" name="company" value="<?php echo $row['company']; ?>" required>
                  </div>
                  <div class="col-md-6">
                    <label for="inputContact" class="form-label">Name of Contact Person</label>
                    <input type="text" class="form-control" id="inputContact" name="contact_person" value="<?php echo $row['contact_person']; ?>" required>
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" value="<?php echo $row['address']; ?>" required >
                  </div>
                  <div class="col-12">
                    <label for="inputPhone" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="inputPhone" name="phone" value="<?php echo $row['phone']; ?>" required>
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">Sex</label>
                    <select id="sex" class="form-select" name="sex" select="<?php echo $row['sex']; ?>" required >
                    <option value="Male" <?php if ($row['sex'] == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if ($row['sex'] == 'Female') echo 'selected'; ?>>Female</option>
                    </select>
                  </div>
                   
                  <div class="col-12">
                    <button type="submit"  class="btn btn-primary" style="float:right">Save</button>
                  </div>
                </form>
                <form action="../Controller/deleteSupplier.php" method="POST">
                  <input type="hidden" name="supp_id" value="<?php echo $row['supp_id']; ?>">
                  <button type="submit" class="btn btn-danger" style="margin-top:-70px" Onclick="return ConfirmDelete();" type="submit" name="actiondelete" value="1">Delete</button>
            </form>
          
                <?php
              } else {
                  echo "Supplier not found.";
              }
          } else {
              echo "Supplier ID not specified.";
          }

          // Close the database connection
          
          ?>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
  </div>

</body>