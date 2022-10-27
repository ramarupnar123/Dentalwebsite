<?php
include "conn.php";
include "head.php";
include "nav.php";




?>





<!-- about part start here -->

<section>
	<div class="container-fluid mt-5 about">
		<div class="row about1">
			<div class="col-md-12 text-center mt-3">
				<h1 class="display-5 font-weight-bold text-white mt-5">About</h1>
			</div>
			
		</div>
	</div>
</section>

<!-- linking part -->

<!-- <div class="mt-3">
	<span><a href="dental.php" class="text-dark">Home < About</a></span>
</div>
 -->
<!-- about section -->




<section>
  <div class="container mt-5 offset-md-2">
    <div class="row">
      <div class="col-md-5">
        <img  src="https://media.themeslab.org/preview/html/dento/img/bg-img/15.jpg" class="img-fluid w-100 h-100 shadow">
      </div>
      <div class="col-md-5 offset-md-1">
        <h1 class="display-5 font-weight-bold">About Us</h1>
        <div class="section-heading">
          <div class="line"></div>
        </div>

        <p class="display-5 mt-5" style="letter-spacing:1px">Vestibulum condimentum, risus sedones honcus rutrum, salah lacus mollis zurna, nec finibusmi velit advertisis. Proin vitae odin quis magna aliquet laciniae. Etiam auctor, nisi vel. Pellentesque ultrices nisl quam iaculis, nec pulvinar augue.</p>
        
        <div class="mt-5">
           <h6 class="display-5 font-weight-bold">Modern Equipment</h6>
       
        <div class="progress">

        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
         </div>
         
         <div class="mt-3">
          <h6 class="display-5 font-weight-bold">Modern Equipment</h6>
        <div class="progress mt-4">
          <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>

        <div class="mt-3">
        <h6 class="display-5 font-weight-bold">Modern Equipment</h6>
        <div class="progress mt-4">
          <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
        
        
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container mt-5">
    <div class="row mt-5">
      <div class="col-md-3 mt-5 text-center">
        <i class="fa-brands fa-react" id="react"></i>
        <h2 class="mt-2 counter" data-target="2000"></h2>
        <h5 class="font-weight-bold">Years Of Experience</h5>
      </div>
        
      <div class="col-md-3 mt-5 text-center">
         <i class="fa-solid fa-heart" id="heart"></i>
        <h2 class="mt-2 counter" data-target="700"></h2>
        <h5 class="font-weight-bold">Happy Patients</h5>
      </div>

      <div class="col-md-3 mt-5 text-center">
        <i class="fa-solid fa-book" id="book"></i>
        <h2 class="mt-2 counter" data-target="1200"></h2>
        <h5 class="font-weight-bold">Certificate</h5>
      </div>

       <div class="col-md-3 mt-5 text-center">
        <i class="fa-solid fa-address-card" id="contact"></i>
        <h2 class="mt-2 counter" data-target="2000"></h2>
        <h5 class="font-weight-bold">Dentist</h5>
      </div>

    </div>
  </div>
</section>



<script type="text/javascript">
  const counter=document.querySelectorAll('.counter');
  console.log(counter);
 counter.forEach((counter)=>{
  counter.innerHTML=0;


   const  updateCounter=()=>{
    const tagertCount=+counter.getAttribute('data-target');
    // console.log(typeof tagertCount);

    const startingCount=Number(counter.innerHTML);
    const incr=tagertCount/100;
    if(startingCount<tagertCount)
    {
      counter.innerHTML= `${Math.round(startingCount + incr)}`;
      setTimeout(updateCounter,10)
    }
    else
    {
      counter.innerHTML=tagertCount;
    }



  }
   updateCounter();

 })



 
  
  
  
</script>



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


<section>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="display-5  font-weight-bold ml-md-5">Our Dentist</h1>
      </div>

       <?php
                    $query="SELECT * FROM team";
                    $fire=mysqli_query($conn,$query);
                   while($row=mysqli_fetch_assoc($fire)){
                    
          ?>

      <div class="col-md-4">
        <div class="card border-0 shadow">
          <div class="card-body">
           
            <img src=" admin/upload/<?=$row['t_img'];?>" class="img-fluid">
          </div>
          <!-- https://media.themeslab.org/preview/html/dento/img/bg-img/10.png -->
         
          <div class="card-footer text-center" style="margin-top: -70px; background: linear-gradient(to right, #2c455d, #00012c);">
            <h5 class="text-white"><?=$row['t_name'];?></h5>
            <p class="text-center text-white"><?=$row['t_position'];?></p>
            <ul class="nav justify-content-left">
                  <li class="nav-item "><a class="nav-link" href="https://twitter.com/Ramarupnar?t=lxWDWdHlRa5QioWMuLDWuA&s=09" title="Twitter"><i class="  rounded-circle fab fa-twitter" id="twitter"></i><span class="menu-title sr-only"><?=$row['t_link'];?></span></a></li>

                  <li class="nav-item ml-md-2"><a class="nav-link" href="https://www.facebook.com/profile.php?id=100014942103134" title="Facebook"><i class="fab fa-facebook" id="facebook"></i><span class="menu-title sr-only"><?=$row['f_link'];?></span></a></li>

                  <li class="nav-item ml-md-2"><a class="nav-link" href="https://www.instagram.com/rama_rupnar/" title="Instagram"><i class="fab fa-instagram" id="instagram"></i><span class="menu-title sr-only"><?=$row['i_link'];?></span></a></li>

                  <li class="nav-item ml-md-2"><a class="nav-link" href="https://www.linkedin.com/in/rupnar-rambhau-320967234"><i class="fab fa-linkedin" id="linkedin"></i><span class="menu-title sr-only"><?=$row['l_link'];?></span></a></li>
                </ul>
          </div>
        </div>
      </div>
      <?php
      } 
      ?>

       

         <!-- <div class="col-md-4">
        <div class="card border-0 shadow">
          <div class="card-body">
            <img src="https://media.themeslab.org/preview/html/dento/img/bg-img/11.png" class="img-fluid">
          </div>
          <div class="card-footer text-center" style="margin-top: -70px; background: linear-gradient(to right, #2c455d, #00012c);">
            <h5 class="text-white">Michael Barley</h5>
            <p class="text-center text-white">Implant Expert</p>
           
            <ul class="nav justify-content-left">
                  <li class="nav-item "><a class="nav-link" href="https://twitter.com/Ramarupnar?t=lxWDWdHlRa5QioWMuLDWuA&s=09" title="Twitter"><i class="  rounded-circle fab fa-twitter" id="twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>

                  <li class="nav-item ml-md-2"><a class="nav-link" href="https://www.facebook.com/profile.php?id=100014942103134" title="Facebook"><i class="fab fa-facebook" id="facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>

                  <li class="nav-item ml-md-2"><a class="nav-link" href="https://www.instagram.com/rama_rupnar/" title="Instagram"><i class="fab fa-instagram" id="instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>

                  <li class="nav-item ml-md-2"><a class="nav-link" href="https://www.linkedin.com/in/rupnar-rambhau-320967234"><i class="fab fa-linkedin" id="linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
                </ul>
          </div>
        </div>
      </div> -->


    
    </div>
  </div>
</section>




<?php

include "footer.php";


?>






</body>
</html>



