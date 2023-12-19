<?php
include('query.php');
include('header.php');  
?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ADD Catogaries</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="PName">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="PPrice">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="PDes">
                                    
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <input type="File" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="PImg">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">quantity</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="PQuantity">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Categaroy</label>
                                    <select name="C_id" id="" class="form-control">
                                    <option value="">Select catogary</option>
                                    <?php
                                    $query=$pdo->query("select * from AddCat");
                                    $res =$query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($res as $cat){
                                        ?>
                                        <option value="<?php echo $cat['id']?>"><?php echo $cat['name']?></option>  
                                        <?php
                                        }    
                                
                                   ?>
                                </select>
                            </div>
                                <button type="submit" name="Addproducts" class="btn btn-primary">Add product</button>
                            </form>
                        </div>
                    </div>

<?php
include('footer.php');
?>