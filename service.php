<?php
include "conn.php";
include "head.php";
include "nav.php";
?>



<!-- about part start here -->

<section>
	<div class="container-fluid mt-5 about">
		<div class="row about1">
			<div class="col-md-12 text-center mt-3 text-justify-center">
				<h1 class="display-5 font-weight-bold text-white mt-5">Services</h1>
			</div>
			
		</div>
	</div>
</section>



<!-- service part start here -->

<section>
	<div class="container mt-5">
		<div class="row">  

			 <?php
                    $query="SELECT * FROM service";
                    $fire=mysqli_query($conn,$query);
                   while($row=mysqli_fetch_assoc($fire)){
                    
          ?> <div class="col-md-4 text-center p-3 ">
           <div class="card border-0 shadow"> 
             <div class="card-body"> 
              <img class="img h-25" src="admin/upload/<?=$row['img'];?>">
               <h5 class="mt-3"><?=$row['title'];?></h5> 
             <p class="text-center "><?=$row['descp'];?></p>
						
					</div>
				</div>
				
			</div>
			<?php
		   }
			?>

		

		</div>
	</div>
</section>



<section>
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-12">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner sec">
    <div class="carousel-item active sec1">
      <div class="row">
        <div class="col-md-3 offset-md-2 mt-5">
          <img  src="https://media.themeslab.org/preview/html/dento/img/bg-img/8.jpg" alt="First slide" class="img-fluid mt-3" style="border-radius: 50%;">
         </div>
         <div class="col-md-5 mt-5">
            <p class="text-white mt-5" style="letter-spacing:2px; font-family:italic;">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ."</p>
             <p  class="text-white font-weight-bold">RAMA RUPNAR</p>
            <p class="text-white " style="margin-top:-20px;">Dental Patient</p>
         </div>
        </div>
      </div>
    <div class="carousel-item sec1">
     <div class="row">
       <div class="col-md-3 offset-md-2 mt-5">
          <img class="" src="https://media.themeslab.org/preview/html/dento/img/bg-img/8.jpg" alt="First slide" class="img-fluid" style="border-radius: 50%;">
         
         </div>
         <div class="col-md-5 mt-5">
            <p class="text-white mt-5" style="letter-spacing:2px; font-family:italic;">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ."</p>
             <p  class="text-white font-weight-bold">RAMA RUPNAR</p>
            <p class="text-white " style="margin-top:-20px;">Dental Patient</p>
         </div>

     </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 </div>
    </div>
  </div>
</section>



<!-- latest new start here -->
<section>
  <div class="container mt-5">

    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="display-5 font-weight-bold ml-md-5">The Latest News</h1>
        <button type="button"  class="btn btn-primary  font-weight-bold" onClick="food()">Dental</button>
        <button type="button" class="btn btn-danger ml-2 font-weight-bold" onclick="vegitable()">Free Service</button>
        <button type="button"  class="btn btn-info  font-weight-bold ml-2" onClick="food()">Excellent</button>
        <button type="button" class="btn btn-secondary  ml-2 font-weight-bold" onclick="vegitable()">Subscribe</button>
        
      </div>
       <?php
                    $query="SELECT * FROM latest_news";
                    $fire=mysqli_query($conn,$query);
                   while($row=mysqli_fetch_assoc($fire)){
                    
          ?>

      <div class="col-md-4 mt-5 food">
        <div class="card border-0 shadow" style="background:none">
          <div class="card-body p-0">
            <img src="admin/upload/<?=$row['img'];?>" class="img-fluid">
          </div>
          <div class="card-footer border-0 p-4">
            <h5 class="justify-center"><?=$row['title'];?></h5>
            <p class=""><?=$row['descp'];?></p>
            <i class="fa-solid fa-clock" id="clock1"></i>
            <span class="clock ml-2"><?=$row['datep'];?></span>
            <i class="fa-solid fa-comment ml-md-4" id="comment"></i>
            <span class="clock ml-2">3 Comments</span>
          </div>
        </div>
      </div>
      <?php
      } 
      ?>

 
      

      <div class="col-md-4 mt-5 vegi">
        <div class="card border-0 shadow">
          <div class="card-body p-0">
            <img src="https://media.themeslab.org/preview/html/dento/img/bg-img/5.jpg" class="img-fluid">
          </div>
          <div class="card-footer border-0 p-4">
            <h5>Why you should avoid sipping your drinks</h5>
            <p class="">Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
              <i class="fa-solid fa-clock" id="clock1"></i>
            <span class="clock ml-2">28 Sep 202</span>
            <i class="fa-solid fa-comment ml-md-4" id="comment"></i>
            <span class="clock ml-2">3 Comments</span>

          </div>
        </div>
      </div>

      <div class="col-md-4 mt-5 vegi">
        <div class="card border-0 shadow">
          <div class="card-body  p-0">
            <img src="http://st.ourhtmldemo.com/new/Dento/images/blog/lat-blog-1.jpg" class="w-100 img-fluid">
          </div>
          <div class="card-footer border-0 p-4">
            <h5>What is the best kind of toothpaste to use?</h5>
            <p class="">Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
              <i class="fa-solid fa-clock" id="clock1"></i>
            <span class="clock ml-2">28 Sep 202</span>
            <i class="fa-solid fa-comment ml-md-4" id="comment"></i>
            <span class="clock ml-2">3 Comments</span>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-5 vegi">
        <div class="card border-0 shadow">
          <div class="card-body  p-0">
            <img src="http://st.ourhtmldemo.com/new/Dento/images/blog/lat-blog-1.jpg" class="w-100 img-fluid">
          </div>
          <div class="card-footer border-0 p-4">
            <h5>What is the best kind of toothpaste to use?</h5>
            <p class="">Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
              <i class="fa-solid fa-clock" id="clock1"></i>
            <span class="clock ml-2">28 Sep 202</span>
            <i class="fa-solid fa-comment ml-md-4" id="comment"></i>
            <span class="clock ml-2">3 Comments</span>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>



<script type="text/javascript">


   function food()
      {
           
            var a=document.getElementsByClassName('food');
            for(var i=0; i<a.length; i++)
            {
                  a[i].style.display='inline-block';
            }

            var b=document.getElementsByClassName('vegi');
            for(var i=0; i<b.length; i++)
            {
                  b[i].style.display='none';
            }


      }
      function vegitable()
      {

            var a=document.getElementsByClassName('food');
            for(var i=0; i<a.length; i++)
            {
                  a[i].style.display='none';
            }

            var b=document.getElementsByClassName('vegi');
            for(var i=0; i<b.length; i++)
            {
                  b[i].style.display='inline-block';
            }
           
      }
  


</script>


<?php

include "footer.php";


?>





</body>
</html>