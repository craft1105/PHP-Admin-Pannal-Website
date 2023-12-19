<?php
    include("dbcon.php");
    session_start();

    if (isset($_POST["login"])){
        $useremail = $_POST["email"];
        $userpassword = $_POST["password"];
        $query = $pdo->prepare("select * from users where email = :Email AND password = :Password");
        $query->bindParam("Email", $useremail);
        $query->bindParam("Password", $userpassword);
        $query->execute();
        $res = $query->fetch(PDO::FETCH_ASSOC);

        if($res){
            $_SESSION["email"] = $res["email"];
            echo"<script> alert('login successful');
                location.assign('index.php')
                </script>";
        }
    }


    if(isset($_POST['Addbtn'])){
        $id=$_POST['id'];
        $pName=$_POST['pName'];
        $pDes=$_POST['pDes'];
        $ImageName= $_FILES['pImg']['name'];
        $ImageTmpName= $_FILES['pImg']['tmp_name'];
        $extension = pathinfo($ImageName,PATHINFO_EXTENSION);
        $destination="img/".$ImageName;
        if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){
            if(move_uploaded_file($ImageTmpName,$destination)){
            $query = $pdo->prepare("insert into addcat(name,description,Image)values(:pName , :pDes , :pImg)");
            $query->bindParam("pName", $pName);
            $query->bindParam("pDes", $pDes);
            $query->bindParam("pImg", $ImageName);
            $query->execute();
            echo"<script> alert('CAT ADDED');</script>";        
        }
            }
        }

        // update catogary
        if(isset($_POST['upbtn'])){
            $Pname = $_POST['pName'];
            $Pdes = $_POST['pDes'];
            $C_Id=$_POST['id'];
            $query=$pdo->prepare("update addcat set name =:pName , Description = :pDes where id =:C_Id");
        if(isset($_FILES['pImgs'])){
            $PImge = $_FILES['pImgs']['name'];
            $PTemImg = $_FILES['pImgs']['tmp_name'];
            $extension= pathinfo($PImge,PATHINFO_EXTENSION);
            $destination="img/".$PImge;
            if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){
        if(move_uploaded_file($PTemImg,$destination)){
            $query=$pdo->prepare("update addcat set name = :pName ,Description = :pDes , Image = :pIms where id = :C_Id");
            $query->bindParam("pIms", $PImge);
            }
        }
            }
            $query->bindParam("C_Id", $C_Id);
            $query->bindParam("pName", $Pname);
            $query->bindParam("pDes", $Pdes);
            $query->execute(); 
            echo"<script> alert('CAT ADDED');</script>";
            
   } 

   // Addproducts
        if(isset($_POST['Addproducts'])){
            $C_id=$_POST['C_id'];
            $PName=$_POST['PName'];
            $PPrice=$_POST['PPrice'];
            $PDes=$_POST['PDes'];
            $PQuantity=$_POST['PQuantity'];
            $ImageName= $_FILES['PImg']['name'];
            $ImageTmpName= $_FILES['PImg']['tmp_name'];
            $extension = pathinfo($ImageName,PATHINFO_EXTENSION);
            $destination="img/".$ImageName;
            if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){
                if(move_uploaded_file($ImageTmpName,$destination)){
                $query = $pdo->prepare("insert into products(name,price,description,Image,quantity,c_id)values(:PName , :PPrice , :PDes, :PImg,:PQuantity,:C_id )");
                $query->bindParam("PName", $PName);
                $query->bindParam("PPrice", $PPrice);
                $query->bindParam("PDes", $PDes);
                $query->bindParam("PQuantity", $PQuantity);
                $query->bindParam("PImg", $ImageName);
                $query->bindParam("C_id", $C_id);
                $query->execute();
                echo"<script> alert('CAT ADDED');</script>";        
            }
                
                }
            }

    
?>