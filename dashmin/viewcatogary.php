<?php
include('query.php');
include('header.php');
?>

<div class="container-fluid pt-4 px-4">
                
                    <div class="col-md-6">
                            <h6 class="mb-4">All Catogaries</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                  <?php
                                  $query=$pdo->query("select*from addcat");
                                  $allcatoragy=$query->fetchAll(PDO::FETCH_ASSOC);
                                  foreach($allcatoragy as $singlecat){

                                    ?>
                                    <tr>
                                    <td scope="row" name="Cid"><?php echo $singlecat['id']?></td>
                                        <td scope="row"><?php echo $singlecat['name']?></td>
                                        <td><?php echo $singlecat['Description']?></td>
                                        <td ><img height="100px" src="img/<?php echo $singlecat['Image']?>" alt=""></td>
                                        <td><a class="btn btn-info" href="updatecat.php?id=<?php echo $singlecat['id']?>">Update</a><td>
                                        <td><a class="btn btn-danger"href="deletecatogary.php?id=<?php echo $singlecat['id']?>">Delete</a><td>
                                    </tr>
                                    <?php
                                  }
                                    ?>
                                    </tbody>
                            </table>
                  </div>
                  </div>
                  
                  
                        

<?php
include('footer.php');
?>