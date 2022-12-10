
 <div id="studenthome_receipt_upload_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3>Receipt Upload</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="tab-pane" id="3a">
          <br/>
          <div class="panel-group" id="accordion">   
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"  ><i class="fa-upload fa"></i> Upload Concern<i class="fa-caret-down fa"></i></a>
              <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                       <form role="form" method="post" action="studenthome_controller.php" enctype="multipart/form-data">
                          <div class="form-group">
                              <label>File Title</label>
                              <input class="form-control" type="text" name="filename">
                          </div>
                          <div class="form-group">
                              <label>File</label>
                              <input  type="file" name="my_image">
                          </div>
                          <button type="submit" name="savefiles" class="btn btn-primary btn-sm"><i class="fa fa-upload fw-fa"></i> Upload</button>
                      </form>
                  </div>
              </div>
          </div> 
          <br/>
          <br/>

             <table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">
               <thead>
                <tr> 
                   <th>FileName</th>
                  <th width="25%">Action</th> 
                </tr> 
              </thead> 
              <tbody>
                <?php    
                  $sql ="SELECT * FROM  tblconcern WHERE IDNO=" .$_SESSION['IDNO']." ";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {

                  echo '<tr>';
                  echo '<td>' . $row['Concern'].'</a></td>';
                  echo '<td >  
                           <a title="Download" target="_blank" href="student/'.$row['AttacmentFile'].'"  class="btn btn-info btn-xs  ">
                           <span class="fa fa-download fw-fa"> </span> Download</a> 
                           <a title="Delete" href="studenthome_controller.php?id='.$row['ConcernID'].'"  class="btn btn-danger btn-xs  ">
                           <span class="fa fa-trash fw-fa"></span> Delete</a>
                     </td>';
                  echo '</tr>';  
                  }
                ?>
              </tbody>
              
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="insert" class="btn btn-primary" id="btn-career">SUBMIT</button>
      </div>

    </div>

  </div>
</div>
