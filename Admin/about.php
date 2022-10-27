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
                    <!-- style="height:300px;background-color:sky; -->
                    <div class="col-md-12">
                        <h2 class="text-center text-info  font-weight-bold">Welcome About Page</h2>
                       </div>

                   
                    <form action="about.php" method="post" enctype="multipart/form-data">
                        <div class="row bg-warning p-5 shadow">
                            <div class="col-md-6 mt-3">
                                <label>Images</label>
                                <input type="file" name="a_img"  required class="form-control">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label>Title</label>
                                <input type="text" name="a_title"  required class="form-control">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label>Description</label>
                                <textarea   class="form-control" name="a_desc" required></textarea>
                                 <!-- <input type="text"  name="a_desc" required class="form-control"> -->

                            </div>

                            <div class="col-md-6 mt-3">
                                <label>Progress_bar1</label>
                                <input type="text" name="Progress_bar1"  required class="form-control">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label>Progress_bar2</label>
                               <!--  <textarea  class="form-control" name="a_subdesc" required></textarea> -->
                                 <input type="text"  name="Progress_bar2" required class="form-control">

                               
                            </div>

                            <div class="col-md-6 mt-3">
                                <label>Progress_bar3</label>
                                <input type="text" name="Progress_bar3" required class="form-control">
                            </div>
 
                           
                            <div class="col-md-12 text-center mt-4">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>


                    <div class="col-md-12 mt-5">
                        <table class="table shadow table-bordered table-hover table-striped table-info">
                            <tr>
                                <th>Sr.no</th>            
                                <th>Photo</th>            
                                <th>Title</th>            
                                <th>Description</th>
                                <th>Progress Bar1</th>
                                <th>Progress Bar2</th>
                                <th>Progress Bar3</th>
                                
                                <th>Status</th>
                            </tr>


                            <?php
                            $query="SELECT * FROM about1";
                            $fire=mysqli_query($conn,$query);
                                $i=1;
                                while($row=mysqli_fetch_assoc($fire)){
                                  //   echo "<pre>";
                                  // print_r($row); 
                            ?>
                            <form action="about.php" method="post" enctype="multipart/form-data">

                            <tr>
                                <td><?=$i++?></td>
                                <td>
                                    <input type="hidden" name="id" value="<?=$row['id'];?>" class="form-control">
                                    <input type="hidden" name="a_img" value="<?=$row['a_img'];?>" class="form-control">

                                    <input type="file" name="a_img" class="form-control">
                                     <img style="height:100px;" src="upload/<?=$row['a_img'];?>">
                                </td>
                                <td>
                                    <input type="text" name="a_title1" value="<?=$row['a_title'];?>" class="form-control">
                                    <!--  <?=$row['a_title'];?> -->
                                        
                                </td>

                                <td>
                                    <input type="text" name="a_desc" value="<?=$row['a_desc'];?>" class="form-control">
                                   <!--  <?=$row['a_desc'];?> -->
                                        
                                </td>

                                <td>
                                    <input type="text" name="Progress_bar1" value="<?=$row['Progress_bar1'];?>" class="form-control">
                                    <!-- <?=$row['Progress_bar1'];?> -->
                                        
                                </td>

                                <td>
                                    <input type="text" name="Progress_bar2" value="<?=$row['Progress_bar2'];?>" class="form-control">
                                    <!-- <?=$row['Progress_bar2'];?> -->
                                        
                                </td>

                                <td>
                                    <input type="text" name="Progress_bar3" value=" <?=$row['Progress_bar3'];?>" class="form-control">
                                   <!--  <?=$row['Progress_bar3'];?> -->
                                        
                                </td>
                                
                                <td>
                                    <a href="about.php"><button class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>

                                    <a href="about.php?deleteid=<?=$row['id'];?>&img=<?=$row['a_img'];?>"><button class="btn btn-success" type="button" onclick="return confirm ('are you sure')"><i class="fa-solid fa-trash"></i></button></a>
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

<!-- title -->
<!-- desc -->
<!-- subtitle -->
<!-- subdesc -->
<!-- subtitle1 -->
<!-- subdesc -->
<!-- img -->

<?php
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES); 


function image($name,$size,$temp,$path)
{
$ext=explode(".",$name);
$a=rand(1,9999)."about.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}

// insert record

if(isset($_POST['a_title'])){
    $name=$_FILES['a_img']['name'];
    $size=$_FILES['a_img']['size'];
    $tmp=$_FILES['a_img']['tmp_name'];
    $path="upload/";
    $a_img=image($name,$size,$tmp,$path);

    $query="INSERT INTO about1( a_title, a_desc, Progress_bar1, Progress_bar2,Progress_bar3 ,a_img) 
                   VALUES  ('".$_POST['a_title']."','".$_POST['a_desc']."','".$_POST['Progress_bar1']."','".$_POST['Progress_bar2']."','".$_POST['Progress_bar3']."','".$a_img."')";

    $fire=mysqli_query($conn,$query);
if($fire){

    echo "<script>alert('Success !!!');window.location.href='about.php';</script>";
}
else{
    echo "Not OKKKKK !!!!!!";
}
}

// delete record
if(isset($_GET['deleteid']))
    {
        // echo "okk";
       $query="DELETE FROM about1 where id='".$_GET['deleteid']."'";




        $path='upload/'.$_GET['img'];
        unlink($path);

        $fire=mysqli_query($conn,$query);
        if($fire){
            echo "<script>alert('delete data');window.location.href='about.php';</script>";
        }
        else
        {
            echo "error";
        }

    }


    // update record
    if(isset($_POST['a_title1']))
{
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES);

    if($_FILES['a_img']['name']!="")
    {


    $name=$_FILES['a_img']['name'];
    $size=$_FILES['a_img']['size'];
    $tmp=$_FILES['a_img']['tmp_name'];
    $path="upload/";
    $a_img=image($name,$size,$tmp,$path);
    $path1='upload/'.$_POST['a_img'];
    unlink($path1);
      }
      else
      {
        $a_img=$_POST['a_img'];

      }
      $query="UPDATE about1 SET a_title='".$_POST['a_title1']."',a_desc='".$_POST['a_desc']."',Progress_bar1='".$_POST['Progress_bar1']."',Progress_bar2='".$_POST['Progress_bar2']."',Progress_bar3='".$_POST['Progress_bar3']."',a_img='".$a_img."' WHERE id='".$_POST['id']."'";

       $fire=mysqli_query($conn,$query);
        if($fire){
            echo "<script>alert('update data');window.location.href='about.php';</script>";
        }
        else
        {
            echo "error";
        }
}





    

?>




