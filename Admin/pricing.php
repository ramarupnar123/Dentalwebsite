<?php include "head.php";
include "conn.php";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="mod-bg-1 ">
    <div class="page-wrapper">
        <div class="page-inner">
        <?php include "nav.php"; ?>
        <div class="page-content-wrapper">
        <?php include "nav1.php"; ?>
        <main id="js-page-content" role="main" class="page-content" style="padding:0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center text-info font-weight-bold">Welcome Pricing Page</h2>
                    </div>

                    <form action="pricing.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Servie Name</label>
                                <input type="text" name="s_name" required class="form-control">
                            </div>

                             <div class="col-md-6">
                                <label>Stage</label>
                                <input type="text" name="stage" required class="form-control">
                            </div>

                            <div class="col-md-6 ">
                                <label>Price</label>
                                <input type="text" name="price" required class="form-control">
                                <!-- <textarea class="form-control" name="descp"></textarea> -->
                            </div>
                             
                            <div class="col-md-12 text-center mt-4">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>

                    <div class="col-md-12 mt-5">
                        <table class="table table-bordered table-hover table-striped table-info">
                            <tr>
                                <th>Sr.no</th>
                                <th>Service Name</th>
                                <th>Stage</th>
                                <th>Price</th>
                               
                                <th>Status</th>
                            </tr>
                            <?php
                            $query="SELECT * FROM pricing";
                            $fire=mysqli_query($conn,$query);
                            $i=1;
                             while($row=mysqli_fetch_assoc($fire)){
                             
                            ?>
                            <form action="pricing.php" method="post" enctype="multipart/form-data">
                            <tr>
                                <td><?=$i++?></td>
                                <td>


                                    <input type="hidden" name="id" value="<?=$row['id'];?>" class="form-control">
                                    <!-- <input type="hidden" name="img" value="<?=$row['img'];?>" class="form-control"> -->
                                    <!-- <input type="file" name="img" class="form-control"> -->
                                    <!-- <img style="height:100px;" src="upload/<?=$row['img'];?>"> -->
                                    <input type="text" name="s_name1" value="<?=$row['s_name'];?>" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="stage" value="<?=$row['stage'];?>" class="form-control">
                                  
                                    </td>
                                <td>
                                     <input type="text" name="price" value=" <?=$row['price'];?>" class="form-control">
                                   
                                        
                                    </td>
                                    
                                <td>
                                    <a href="pricing.php"><button class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>

                                    <a href="pricing.php?deleteid=<?=$row['id'];?>"><button class="btn btn-success" type="button" onclick="return confirm('are you sure')"><i class="fa-solid fa-trash"></i></button></a>
                                </td>
                            </tr>
                            </form>
                            <?php
                            } 
                            ?>
                        </table>
                    </div>



                    </div>
                </div>
        </main>
        </div>
        </div>
        </div>
<?php include "footer.php"; ?>
        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
    </body>
</html>


<?php

echo "<pre>";
print_r($_FILES);
print_r($_POST);


 if(isset($_POST['s_name'])){

     

     $query="INSERT INTO pricing(s_name,stage,price) 
                   VALUES  ('".$_POST['s_name']."','".$_POST['stage']."','".$_POST['price']."')";

    $fire=mysqli_query($conn,$query);
if($fire){

    echo "<script>alert('Success !!!');window.location.href='pricing.php';</script>";
}
else{
    echo "Not OKKKKK !!!!!!";
}
}




if(isset($_GET['deleteid']))
    {
        // echo "okk";
       $query="DELETE FROM pricing where id='".$_GET['deleteid']."'";


        // $path='upload/'.$_GET['img'];
        // unlink($path);

        $fire=mysqli_query($conn,$query);
        if($fire){
            echo "<script>alert('delete data');window.location.href='pricing.php';</script>";
        }
        else
        {
            echo "error";
        }

    }



   if(isset($_POST['s_name1']))
{
   

    // if($_FILES['img']['name']!="")
    // {


    // $name=$_FILES['img']['name'];
    // $size=$_FILES['img']['size'];
    // $tmp=$_FILES['img']['tmp_name'];
    // $path="upload/";
    // $img=image($name,$size,$tmp,$path);
    // $path1='upload/'.$_POST['img'];
    // unlink($path1);
    //   }
    //   else
    //   {
    //     $img=$_POST['img'];

    //   }
      $query="UPDATE pricing SET s_name='".$_POST['s_name1']."',stage='".$_POST['stage']."',price='".$_POST['price']."' WHERE id='".$_POST['id']."'";

       $fire=mysqli_query($conn,$query);
        if($fire){
            echo "<script>alert('update data');window.location.href='pricing.php';</script>";
        }
        else
        {
            echo "error";
        }
}
?>