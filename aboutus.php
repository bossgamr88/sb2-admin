<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container py-5">
    <div class="row py-3">
        <div class="col-md-8">
            
            <div class="card">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" alt="Card image cap">
            <div class="card-body">
            <?php
              require 'admin/database/dbconfig.php';

              $query = "SELECT * FROM abouts";
              $query_run = mysqli_query($connection,$query);

              if(mysqli_num_rows($query_run) > 0)
              {
                foreach($query_run as $row)
                {
                  ?>
                  <!-- echo $row['title'];
                  echo $row['subtitle'];
                  echo $row['description'];
                  echo $row['links']; -->

                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                <h6><?php echo $row['subtitle']; ?></h6>
                <p class="card-text"><?php echo $row['description']; ?></p>
                <a href="<?php echo $row['links']; ?>" class="btn btn-primary">Go somewhere</a>
                <?php
                }
              }
              else
              {
                echo "No Record Found";
              }
            ?>
            
            </div>
            </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-dark">
          <div class="card-body">
            <h3>Notices</h3>
            <p>This is funda of web it Toutorials for Website making.</p>
          </div>
        </div>
        <hr>
        <div class="card bg-dark">
          <div class="card-body">
            <h3>Notices</h3>
            <p>This is funda of web it Toutorials for Website making.</p>
          </div>
        </div>


      </div>
      


    
    
</div>


<?php include('includes/footer.php'); ?>