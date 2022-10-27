<?php 
 include  "conn.php";


include "head.php";
include "nav.php";



?>


	


<!-- main section -->


  
<!-- </div> -->
 <marquee class="text-dark  font-weight-bold p-2 " scrollamount="10" style="font-style: italic;">
     A hospital is a health care institution providing patient treatment with specialized health science and auxiliary healthcare staff and medical equipment.[2] The best-known type of hospital is the general hospital, which typically has an emergency department to treat urgent health problems ranging from fire and accident victims to a sudden illness. A district hospital typically is the major health care facility in its region, with many beds for intensive care and additional beds for patients who need long-term care. Specialized hospitals include trauma centers, rehabilitation hospitals, children's hospitals, seniors' (geriatric) hospitals, and hospitals for dealing with specific medical needs such as psychiatric treatment (see psychiatric hospital) and certain disease categories. Specialized hospitals can help reduce health care costs compared to general hospitals.[3] Hospitals are classified as general, specialty, or government depending on the sources of income received.
  </marquee>
<section>
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-md-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner back text-center">
  
    <div class="carousel-item active back1">
     
    <!--  <div class="row mt-5">
       <div class="col-md-12 mt-5 text-center"> -->
          <h1 class="display-4 font-weight-bold text-white mt-5"></h1>
          <p class="display-5 text-white font-weight-bold mt-5" style="letter-spacing: 1px;">As a leading industry innovator, Dento is opening up exciting new opportunities for dental professionals,<br> investors, employees & suppliers. Contact us to find out what we have to</p>
          <button class="btn2 font-weight-bold mt-5">GET STARTED</button>
         <a href="contact.php"><button class="btn3 ml-md-3 font-weight-bold">CONTACT US</button></a>

      
    </div>
  
    <div class="carousel-item back1">
          <h1 class="display-4 font-weight-bold text-white mt-5"></h1>
          <p class="display-5 text-white font-weight-bold mt-5" style="letter-spacing: 1px;">As a leading industry innovator, Dento is opening up exciting new opportunities for dental professionals,<br> investors, employees & suppliers. Contact us to find out what we have to</p>
          <button class="btn2 font-weight-bold mt-5">GET STARTED</button>
          <button class="btn3 ml-md-3 font-weight-bold">CONTACT US</button>
    </div>
    <div class="carousel-item back1">
          <h1 class="display-4 font-weight-bold text-white mt-5"></h1>
          <p class="display-5 text-white font-weight-bold mt-5" style="letter-spacing: 1px;">As a leading industry innovator, Dento is opening up exciting new opportunities for dental professionals,<br> investors, employees & suppliers. Contact us to find out what we have to</p>
          <button class="btn2 font-weight-bold mt-5">GET STARTED</button>
         <a href="contact.php"> <button class="btn3 ml-md-3 font-weight-bold">CONTACT US</button></a>
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



<!-- About Us -->

<section>
  <div class="container mt-5 offset-md-2">
    <div class="row">
       <?php
                    $query="SELECT * FROM about1";
                    $fire=mysqli_query($conn,$query);
                   while($row=mysqli_fetch_assoc($fire)){
                    
      ?>
      <!-- https://media.themeslab.org/preview/html/dento/img/bg-img/15.jpg -->
      <div class="col-md-5">
        <img  src="admin/upload/<?=$row['a_img'];?>" class="img-fluid  shadow" style="height: 400px;">
      </div>
      <div class="col-md-5 offset-md-1">
        <h1 class="display-5 font-weight-bold"><?=$row['a_title'];?></h1>
        <div class="section-heading">
          <div class="line"></div>
        </div>

        <p class="display-5 mt-2" style="letter-spacing:1px"><?=$row['a_desc'];?></p>

        
        <div class="">
           <h6 class="display-5 font-weight-bold"><?=$row['Progress_bar1'];?></h6>
           
       
        <div class="progress">

        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
         </div>
         
         <div class="mt-3">
          <h6 class="display-5 font-weight-bold"><?=$row['Progress_bar2'];?></h6>
        <div class="progress mt-4">
          <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>

        <div class="mt-3">
        <h6 class="display-5 font-weight-bold"><?=$row['Progress_bar3'];?></h6>
        <div class="progress mt-4">
          <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
        
        
      </div>
    </div>
    <?php
    } 
    ?>
  </div>
</section>



<section>
  <div class="container mt-5">
    <div class="row mt-5">
      <div class="col-md-3 mt-5 text-center">
        <i class="fa-brands fa-react" id="react"></i>
        <h2 class="mt-2 counter" data-target="100"></h2>
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
    const incr=tagertCount/50;
    if(startingCount<tagertCount)
    {
      counter.innerHTML= `${Math.round(startingCount + incr)}`;
      setTimeout(updateCounter,100)
    }
    else
    {
      counter.innerHTML=tagertCount;
    }



  }
   updateCounter();

 })



 
  
  
  
</script>

<!-- service -->

<section>
  <div class="container-fluid service mt-5">
    <div class="row service1 p-3">
      <div class="col-md-12">
         <h1 class="display-5 text-center font-weight-bold ml-md-5 text-white">Our Services</h1>
      </div>
      <div class="col-md-6 mt-5 ml-md-5">
        
       <!--  <div class="section-heading ml-md-5">
          <div class="line"></div>
        </div> -->
        <div class="row mt-5 ml-5">

          <div class="col-md-4 ">
             <img src="https://media.themeslab.org/preview/html/dento/img/core-img/s1.png">
             <p class="service2 font-weight-bold mt-4  text-white">Teeth Whitening</p>
          </div>

          <div class="col-md-4">
              <img src="https://media.themeslab.org/preview/html/dento/img/core-img/s2.png">
              <p class="  font-weight-bold mt-3 service2 text-white">Missing Teeth</p>
          </div>
           <div class="col-md-4">
              <img src="https://media.themeslab.org/preview/html/dento/img/core-img/s4.png">
              <p class="  font-weight-bold mt-3 service2 text-white">Teeth Whitening</p>
          </div>

        </div>

        <div class="row mt-5 ml-5 ">

          <div class="col-md-4 mt-5">
            <img src="https://media.themeslab.org/preview/html/dento/img/core-img/s5.png">
             <p class="  font-weight-bold mt-3 service2 text-white">Teeth Whitening</p>
          </div>

          <div class="col-md-4 mt-5">
             <img src="https://media.themeslab.org/preview/html/dento/img/core-img/s1.png">
               <p class="  font-weight-bold mt-4 service2 text-white">Missing Teeth</p>
          </div>
           <div class="col-md-4 mt-5">
             <img src="https://media.themeslab.org/preview/html/dento/img/core-img/s4.png">
              <p class=" font-weight-bold mt-3 service2 text-white">Teeth Whitening</p>
          </div>

        </div>
      </div>
      <div class="col-md-5 mt-5">
        <img src="https://media.themeslab.org/preview/html/dento/img/bg-img/14.jpg" class="img-fluid shadow">
      </div>
    </div>

  </div>
</section>


<!-- pricing  -->

<!-- pricing  -->

<section>
  <div class="container mt-5">
    <div class="row">
     



      <div class="col-md-12 ">
         <h1 class="display-5 ml-md-5 font-weight-bold text-center">Our Pricing</h1>
        <!-- <div class="section-heading text-center ml-md-5">
          <div class="line text-center"></div>
        </div> -->
          
        <table class="table table-bordered  mt-5">
          <thead style="background-color: #00aeef;">
            <tr>
            <th class="text-white">Service Name</th>
            <th class="text-white">Stage</th>
            <th class="text-white">Price</th>
          </tr>
          </thead>
          <tbody>
             <?php
                    $query="SELECT * FROM pricing";
                    $fire=mysqli_query($conn,$query);
                   while($row=mysqli_fetch_assoc($fire)){
                    
             ?>
            <tr class="mt-2">
             <th scope="row"><?=$row['s_name'];?></th>
             <td><?=$row['stage'];?></td>
             <td><?=$row['price'];?></td>
            </tr>
            
              <?php
              }

              ?>
          </tbody>
        </table>

       <p class="text-center"> <button class="btn1">READ <i class="fa-solid fa-angles-right"></i></button></p>
       
      </div>
     
    </div>
  </div>
</section>



<!-- appointment -->

<section>
  <div class="container-fluid appo">
    <div class="row appo1 p-3">
      <div class="col-md-12 mt-5 text-center">
        <h1 class="display-5 text-white font-weight-bold ml-md-5">Book An Apointment</h1>
       <!--  <div class="section-heading text-center ml-md-5">
          <div class="line text-center"></div>
        </div>
 -->
        <div class="container">



         <form action="index.php" method="post">


           <div class="row mt-5">
         
        
          <div class="col-md-6 mt-5">
            <input type="text" name="name" class="form-control text-white appo2" placeholder="Your Name" >
          </div>
          <div class="col-md-6 mt-5">
            <input type="number" name="phone" class="form-control appo2" placeholder="Your Phone">
          </div>

           <div class="col-md-6 mt-5">
            <input type="email" name="email" class="form-control appo2" placeholder="Your Email">
          </div>
          <div class="col-md-6 mt-5">
            <input type="text" name="address" class="form-control appo2" placeholder="Your Address">
          </div>

           <div class="col-md-6 mt-5">
            
            <select type="text" name="choose" class="form-control appo2 text-white font-weight-bold"> 
              <option class="text-white" >Choose Your time</option>
              <option class="text-white">11.00 t0 12.00</option>
              <option class="text-white">12.00 to 1.00</option>
           </select>
           </div>

           <div class="col-md-6 mt-5">
            
            <select type="text" name="choose1" class="form-control appo2 text-white font-weight-bold"> 
              <option   class="text-white">Choose Your time</option>
              <option class="text-white">11.00 t0 12.00</option>
              <option class="text-white">12.00 to 1.00</option>
           </select>
           </div>

           <div class="col-md-12 mt-5">
             <textarea type="text" name="messege" class="form-control appo2 text-white font-weight-bold" placeholder="Your Massege"></textarea>
           </div>

         <div class="col-md-12 text-center mt-3">
            <button class="btn1">BOOKING NOW</button>
         </div>
           
          
           
        </div>
           


         </form>

          


        </div>
        
      </div>
    </div>
  </div>
</section>



<?php



print_r($_POST);

if(isset($_POST['name']))
{
   $query="INSERT INTO appo( name, phone, email, address,choose ,choose1,messege) 
                   VALUES  ('".$_POST[' name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['address']."','".$_POST['choose']."','".$_POST['choose1']."','".$_GET['messege']."')";

    $fire=mysqli_query($conn,$query);
if($fire){

    echo "<script>alert('Success !!!');window.location.href='index.php';</script>";
}
else{
    echo "Not OKKKKK !!!!!!";
}
}



?>







































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
         
          <div class="card-footer text-center" style="margin-top: -50px; background: linear-gradient(to right, #2c455d, #00012c);">
            <h5 class="text-white"><?=$row['t_name'];?></h5>
            <p class="text-center text-white"><?=$row['t_position'];?></p>
            <ul class="nav text-center">
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


<section>
  <div class="container-fluid mt-5 p-0">
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
        <?php
                            $query="SELECT * FROM appoitment";
                            $fire=mysqli_query($conn,$query);
                            $i=1;
                             while($row=mysqli_fetch_assoc($fire)){
                             
                            ?>
        <div class="col-md-3 offset-md-2 mt-3">
        
          <!-- https://media.themeslab.org/preview/html/dento/img/bg-img/8.jpg -->
          <img  src="admin/upload/<?=$row['img'];?>" alt="First slide" class="img-fluid " style="border-radius: 50%; height: 200px;">
         </div>
         <div class="col-md-5 mt-5">
            <p class="text-white " style="letter-spacing:2px; font-family:italic;"><?=$row['descp'];?></p>
             <p  class="text-white font-weight-bold"><?=$row['title'];?></p>
            <p class="text-white " style="margin-top:-20px;"><?=$row['position'];?></p>
         </div> 
         <?php 
       }
         ?>
        </div>
      </div>
    <!-- <div class="carousel-item sec1">
     <div class="row">
       <div class="col-md-3 offset-md-2 mt-5">
          <img class="" src="https://media.themeslab.org/preview/html/dento/img/bg-img/8.jpg" alt="First slide" class="img-fluid" style="border-radius: 50%;">
         
         </div>
         <div class="col-md-5 mt-5">
            <p class="text-white" style="letter-spacing:2px; font-family:italic;">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ."</p>
             <p  class="text-white font-weight-bold">Ravi Kumar</p>
            <p class="text-white " style="margin-top:-20px;">Dental Patient</p>
         </div>

     </div>
    </div> -->
    
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
