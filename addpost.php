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
if(!empty($_POST) && count($_POST)>0) {
  $obj->setName($_post['name']);
  $obj->setEmail($_post['email']);
  $obj->setContent($_post['content']);
  $status = $obj->create();
}
// get record from database
$blogInfo = $obj->getList();
include('header.php');
?>
<script src="asset/tinymce.min.js" referrerpolicy="origin"></script>
 <script src="asset/custom.tinymce.js"></script>
    <section class="showcase" style="margin-top: 35px;">
      <div class="container">
        <div class="pb-2 mt-4 mb-2 border-bottom">
          <h2 style="text-align: center;color:blue">Share Your Knowledge with Others</h2>
        </div>
        <form method="POST" class="tinymce-frm">
          <div class="row align-items-center">
            <div class="col-md-12 col-md-right">
                <div class="form-group">
				</br>
             
                  <div class="col-sm-12">          
                    <input type="text" class="form-control" id="name" placeholder="Full Name" name="name">
                  </div>
                </div></br>
                <div class="form-group">
                  
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" placeholder="Title" name="email">
                  </div>
                </div></br>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea class="form-control" rows="5" id="tiny-editor" name="content">Write your blog content here!</textarea>
                  </div>
                </div>
                <div class="form-group">     </br>   
                  <div class="col-sm-offset-2 col-sm-12">
                    <button type="submit" style=" background: #4154f1;
    padding: 8px 20px;
  
    border-radius: 4px;
    color: #fff;">Submit</button>
                  </div>
                </div>
            </div>
          </div>
        </form>
       
      </div>
  </section>
  <?php include('footer.php');?>