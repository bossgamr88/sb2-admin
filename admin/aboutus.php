<?php
include('security.php');

include('includes/header.php'); 
include('includes/navbar.php'); 
?>




<!-- Modal -->
<div class="modal fade" id="ABOUTUSMODAL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="code.php" method="POST">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label>Sup Title</label>
                <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea type="text" name="description" class="form-control" 
                placeholder="Enter Description"></textarea>
            </div>
            <div class="form-group">
                <label>Links</label>
                <input type="text" name="links" class="form-control" placeholder="Enter Links">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ABOUTUSMODAL">
        ADD
        </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">
    <?php 
        $connection = mysqli_connect("localhost","root","","sb2_admin");
        $query = "SELECT * FROM register";
        $query_run = mysqli_query($connection,$query); 

    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Title</th>
            <th>Sub Title</th>
            <th>Description</th>
            <th>links</th>
            <th>EDIT </th>
            <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>
            <form action="register_edit.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>" >
                <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
              </form>
            </td>
            <td>
              <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
              </form>  
            </td>
 
        </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>