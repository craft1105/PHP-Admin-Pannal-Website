<?php
include('query.php');
include('header.php');
?>

<div class="container-fluid pt-4 px-4">
                
                    <div class="col-md-6">
                            <h6 class="mb-4">All Catogaries</h6>
                            <table class="table container">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Deccription</th>
                                        <th>quantity</th>
                                        <th>Image</th>
                                        <th>catogary</th>
                                        <th>C_id</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                  <?php
                                  $query=$pdo->query("select*from products");
                                  $allcatoragy=$query->fetchAll(PDO::FETCH_ASSOC);
                                  foreach($allcatoragy as $singlecat){

                                    ?>
                                    <tr>
                                    
                                        <td scope="row"><?php echo $singlecat['name']?></td>
                                        <td><?php echo $singlecat['price']?></td>
                                        <td ><?php echo $singlecat['description']?></td>
                                        <td ><?php echo $singlecat['Quantity']?></td>
                                        <td ><?php echo $singlecat['C_id']?></td>
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