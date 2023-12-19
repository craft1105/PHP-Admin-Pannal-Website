<?php
include('query.php');
include('header.php');
?>
<?php

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query=$pdo->prepare("select * from addcat where id = :id");
  $query->bindParam('id',$id);
  $query-> execute();
  $cat= $query->fetch(PDO::FETCH_ASSOC);
//   print_r($cat);
}
?>  
 <!-- $query=$pdo->prepare("select * from addcat");
 $query->execute();
 $cat= $query->fetch(PDO::FETCH_ASSOC);
 print_r($cat); -->
 

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ADD Catogaries</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" name="id" value="<?php echo $cat['id']?>" class="form-control" >
                                    <input type="text" name="pName" value="<?php echo $cat['name']?>" class="form-control" >

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <input type="text" name="pDes" value="<?php echo $cat['Description']?>" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">IMAGE</label>
                                    <input type="file" value="<?php echo $cat['Image']?>" name="pImgs" class="form-control" >
                                </div>

                                <button type="submit" name="upbtn" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>

<?php
include('footer.php');
?>