<?php
    session_start();
    include('connect.php');
    if(! isset($_SESSION['user']))
        header("Location: login.php");
?>
<?php
include_once 'class/Blog.php';
$obj = new Blog();
$_post = $_POST;
// insert record in database

// get record from database
$blogInfo = $obj->getList();
include('header.php');
?>
<script src="asset/tinymce.min.js" referrerpolicy="origin"></script>
 <script src="asset/custom.tinymce.js"></script>
    <section class="showcase" style="margin-top: 60px;">
    <h1 style="text-align: center;color:blue">Amazing Blogs by Hostelers</h1> </br></br>
      <div class="container">
        
        <div class="row">
        <div class="col-md-" >

          <?php if(!empty($blogInfo) && count($blogInfo)>0) { ?>
            <?php foreach($blogInfo as $key=>$element) { ?>
            <div class="col-md-12 col-md-right">
            <div class="card text-center">
              <div class="card-header" style="color:green">by <?php print $element['name']; ?></div>
                <div class="card-body">
                  <h5 class="card-title" style="color:blue"><?php print $element['email']; ?></h5>
                  <p class="card-text"><?php print $element['content']; ?></p>
            </div>
              <div class="card-footer text-muted"><?php print $element['created_date']; ?></div> </br>
            </div> </br>
          </div>
          </br>
          <?php } ?>
        <?php } ?> </div>
        
    </div>
      </div>
  </section>
  <?php include('footer.php');?>