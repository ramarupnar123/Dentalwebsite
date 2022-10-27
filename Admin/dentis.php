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

<!-- Latest compiled JavaScript
 --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
                    <!-- style="height:300px;background-color:sky;" -->
                    <div class="col-md-12">
                        <h2 class="text-center font-weight-bold text-info">Welcome Dentis Page</h2>
                    </div>

                    <form action="dentis.php" method="post" enctype="multipart/form-data">
                        <div class="row p-5">
                            <div class="col-md-6">
                                <label>Image</label>
                                <input type="file" name="t_img" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" name="t_name" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label>Position</label>
                                <input type="text" name="t_position" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label>Twitter Link</label>
                                <input type="text" name="t_link" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label>Facebook Link</label>
                                <input type="text" name="f_link" required class="form-control">
                            </div>

                             <div class="col-md-6">
                                <label>Instagram Link</label>
                                <input type="text" name="i_link" required class="form-control">
                            </div>

                             <div class="col-md-6">
                                <label>Linkedin Link</label>
                                <input type="text" name="l_link" required class="form-control">
                            </div>

                            <div class="col-md-12 text-center mt-4">
                                <button class="btn btn-primary">Save</button>
                            </div>


                        </div>
                    </form>

                    <div class="col-md-12 mt-5">
                        <table class="table table-bordered table-hover table-striped table-info shadow">
                            <tr>
                                <th>Sr.no</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Twitter Link</th>
                                <th>Facebook Link</th>
                                <th>Instagram Link</th>
                                <th>Linkedin Link</th>
                                <th>Status</th>
                            </tr>
                             <?php
                                $query="SELECT * FROM team";
                                $fire=mysqli_query($conn,$query);
                                $i=1;
                                while($row=mysqli_fetch_assoc($fire)){
                                  //   echo "<pre>";
                                  // print_r($row);
                                    
                               
                                ?>

                            <form action="dentis.php" method="post" enctype="multipart/form-data">
                            <tr>
                                <td><?=$i++?></td>
                                <td>
                                    <input type="hidden" name="t_id" value="<?=$row['t_id'];?>" class="form-control">
                                    <input type="hidden" name="t_img" value="<?=$row['t_img'];?>" class="form-control">

                                     <input type="file" name="t_img" class="form-control">
                                    <img style="height:100px;" src="upload/<?=$row['t_img'];?>">
                                </td>
                                <td>
                                        <input type="text" name="t_name1" value="<?=$row['t_name'];?>" class="form-control">
                               
                                 </td>
                                <td>
                                    <input type="text" name="t_position" value="<?=$row['t_position'];?> " class="form-control">

                                 
                                </td>
                                <td> 
                                    <input type="text" name="t_link" value="<?=$row['t_link'];?>  " class="form-control">
                                  
                                </td>
                                <td>
                                    <input type="text" name="f_link" value="<?=$row['f_link'];?>  " class="form-control">
                                   
                                        
                                </td>
                                <td>
                                    <input type="text" name="i_link" value="<?=$row['i_link'];?>" class="form-control">
                                   
                                        
                                    </td>
                                <td>
                                    <input type="text" name="l_link" value="<?=$row['l_link'];?>" class="form-control">
                                   
                                        
                                    </td>
                                <td>
                                   <a href="dentis.php"> <button class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>

                                    <a href="dentis.php?deleteid=<?=$row['t_id'];?>&img=<?=$row['t_img'];?>"><button class="btn btn-danger" type="button" onclick="return confirm('are you sure')"><i class="fa-solid fa-trash"></i></button></a>
                                </td>
                            </tr>
                            </form>
                            <?php
                            } 
                            ?>


                        </table>
                    </div>
                     <!--  <?=$row['t_name'];?> -->
                        <!-- <?=$row['t_position'];?>  -->
                          <!-- <?=$row['t_link'];?>  -->
                           <!-- <?=$row['f_link'];?> -->
                            <!-- <?=$row['i_link'];?> -->
                             <!-- <?=$row['l_link'];?> -->
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
// print_r($_POST);
// print_r($_FILES);


function image($name,$size,$temp,$path)
{
$ext=explode(".",$name);
$a=rand(1,9999)."team.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}

if(isset($_POST['t_name'])){
    $name=$_FILES['t_img']['name'];
    $size=$_FILES['t_img']['size'];
    $tmp=$_FILES['t_img']['tmp_name'];
    $path="upload/";
    $t_img=image($name,$size,$tmp,$path);


    $query="INSERT INTO team( t_name, t_position, f_link, i_link,t_link ,l_link,t_img) 
                   VALUES  ('".$_POST['t_name']."','".$_POST['t_position']."','".$_POST['f_link']."','".$_POST['i_link']."','".$_POST['t_link']."','".$_POST['l_link']."','".$t_img."')";


$fire=mysqli_query($conn,$query);
if($fire){
    echo "<script>alert('Success !!!');window.location.href='dentis.php';</script>";
}
else{
    echo "Not OKKKKK !!!!!!";
}
}


if(isset($_GET['deleteid']))
    {
        // echo "okk";
       $query="DELETE FROM team where t_id='".$_GET['deleteid']."'";


        $path='upload/'.$_GET['img'];
        unlink($path);

        $fire=mysqli_query($conn,$query);
        if($fire){
            echo "<script>alert('delete data');window.location.href='dentis.php';</script>";
        }
        else
        {
            echo "error";
        }

    }



    if(isset($_POST['t_name1']))
{
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);

    if($_FILES['t_img']['name']!="")
    {


    $name=$_FILES['t_img']['name'];
    $size=$_FILES['t_img']['size'];
    $tmp=$_FILES['t_img']['tmp_name'];
    $path="upload/";
    $t_img=image($name,$size,$tmp,$path);
    $path1='upload/'.$_POST['t_img'];
    unlink($path1);
      }
      else
      {
        $t_img=$_POST['t_img'];

      }
      $query="UPDATE team SET t_name='".$_POST['t_name1']."',t_position='".$_POST['t_position']."',t_link='".$_POST['t_link']."',f_link='".$_POST['f_link']."',i_link='".$_POST['i_link']."',l_link='".$_POST['l_link']."',t_img='".$t_img."' WHERE t_id='".$_POST['t_id']."'";

       $fire=mysqli_query($conn,$query);
        if($fire){
            echo "<script>alert('update data');window.location.href='dentis.php';</script>";
        }
        else
        {
            echo "error";
        }
}



?>