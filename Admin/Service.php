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
                        <h2 class="text-center text-info font-weight-bold">Welcome Service Page</h2>
                    </div>

                    <form action="service.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Images</label>
                                <input type="file" name="img" required class="form-control">
                            </div>

                             <div class="col-md-6">
                                <label>Title</label>
                                <input type="text" name="title" required class="form-control">
                            </div>

                            <div class="col-md-12 ">
                                <label>Description</label>
                                <!-- <input type="text" name="descp" required class="form-control"> -->
                                <textarea class="form-control" name="descp"></textarea>
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
                                <th>Photos</th>
                                <th>Title</th>
                                <th>Description</th>
                               
                                <th>Status</th>
                            </tr>
                            <?php
                            $query="SELECT * FROM service";
                            $fire=mysqli_query($conn,$query);
                            $i=1;
                             while($row=mysqli_fetch_assoc($fire)){
                             
                            ?>
                            <form action="service.php" method="post" enctype="multipart/form-data">
                            <tr>
                                <td><?=$i++?></td>
                                <td>

                                    <input type="hidden" name="id" value="<?=$row['id'];?>" class="form-control">
                                    <input type="hidden" name="img" value="<?=$row['img'];?>" class="form-control">
                                    <input type="file" name="img" class="form-control">
                                    <img style="height:100px;" src="upload/<?=$row['img'];?>">
                                </td>
                                <td>
                                    <input type="text" name="title1" value="<?=$row['title'];?>" class="form-control">
                                  
                                    </td>
                                <td>
                                     <input type="text" name="descp" value=" <?=$row['descp'];?>" class="form-control">
                                   
                                        
                                    </td>
                                    
                                <td>
                                    <a href="service.php"><button class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>

                                    <a href="service.php?deleteid=<?=$row['id'];?>&img=<?=$row['img'];?>"><button class="btn btn-success" type="button" onclick="return confirm('are you sure')"><i class="fa-solid fa-trash"></i></button></a>
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

// echo "<pre>";
// print_r($_FILES);
// print_r($_POST);

function image($name,$size,$temp,$path)
{
$ext=explode(".",$name);
$a=rand(1,9999)."service.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}

if(isset($_POST['title'])){
    $name=$_FILES['img']['name'];
    $size=$_FILES['img']['size'];
    $tmp=$_FILES['img']['tmp_name'];
    $path="upload/";
    $img=image($name,$size,$tmp,$path);
     
     // insert data
     $query="INSERT INTO service(title,descp,img) 
                   VALUES  ('".$_POST['title']."','".$_POST['descp']."','".$img."')";

    $fire=mysqli_query($conn,$query);
if($fire){

    echo "<script>alert('Success !!!');window.location.href='service.php';</script>";
}
else{
    echo "Not OKKKKK !!!!!!";
}
}


// delete data

if(isset($_GET['deleteid']))
    {
        // echo "okk";
       $query="DELETE FROM service where id='".$_GET['deleteid']."'";


        $path='upload/'.$_GET['img'];
        unlink($path);

        $fire=mysqli_query($conn,$query);
        if($fire){
            echo "<script>alert('delete data');window.location.href='service.php';</script>";
        }
        else
        {
            echo "error";
        }

    }


   // update data
   if(isset($_POST['title1']))
{
   

    if($_FILES['img']['name']!="")
    {


    $name=$_FILES['img']['name'];
    $size=$_FILES['img']['size'];
    $tmp=$_FILES['img']['tmp_name'];
    $path="upload/";
    $img=image($name,$size,$tmp,$path);
    $path1='upload/'.$_POST['img'];
    unlink($path1);
      }
      else
      {
        $img=$_POST['img'];

      }
      $query="UPDATE service SET title='".$_POST['title1']."',descp='".$_POST['descp']."',img='".$img."' WHERE id='".$_POST['id']."'";

       $fire=mysqli_query($conn,$query);
        if($fire){
            echo "<script>alert('update data');window.location.href='service.php';</script>";
        }
        else
        {
            echo "error";
        }
}
?>