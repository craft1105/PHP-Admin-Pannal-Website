<?php
include('query.php');
include('header.php')
?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ADD Catogaries</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pName">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="pDes">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">IMAGE</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="pImg">
                                </div>

                                <button type="submit" name="Addbtn" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>

<?php
include('footer.php');
?>