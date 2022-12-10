<div id="reportmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form action="guidancehome_controller.php" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="title">Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <input type="hidden" name="id" id="id">
        <div class="modal-body">
          <div class="form-group">
            <label>Name</label>
            <select name="student_id" class="form-control">
              <option value="">Select Name</option>
                <?php

                  $sql ="SELECT * FROM tblstudent";
                              $result = mysqli_query($conn, $sql);
                              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                
                  
                  <option value="<?php echo $row['S_ID'] ?>"><?php echo $row['FNAME']." ".$row['LNAME'] ?></option>
                
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="description" class="form-control" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" id="date" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="save" type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
</div>






<!-- Delete Report -->
<div id="deletemodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form action="guidancehome_controller.php" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="title">Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <input type="hidden" name="id" id="id">
        <div class="modal-body">
          <div class="form-group">
            <h3 class="text-center">Are You sure you want to delete data?</h3>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="delete" type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </form>

  </div>
</div>








<!-- Delete Request -->
<div id="deleterequestmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form action="guidancehome_controller.php" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="title">Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <input type="hidden" name="id_request" id="id_request">
        <div class="modal-body">
          <div class="form-group">
            <h3 class="text-center">Are You sure you want to delete data?</h3>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="delete_request" type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </form>

  </div>
</div>







<!-- Approved Request -->
<div id="approvedrequestmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form action="guidancehome_controller.php" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="title">Approval</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <input type="hidden" name="id_request_approved" id="id_request_approved">
        <div class="modal-body">
          <div class="form-group">
            <h3 class="text-center">Are You sure you want to approved data?</h3>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="approved_request" type="button" class="btn btn-primary">Approved</button>
        </div>
      </div>
    </form>

  </div>
</div>