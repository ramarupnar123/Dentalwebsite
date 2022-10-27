 <?php
 include "conn.php";
 include "head.php";

include "nav.php";




?> 


<!-- main section start here -->
	<section>
	<div class="container-fluid mt-5 about">
		<div class="row about1">
			<div class="col-md-12 text-center mt-3">
				<h1 class="display-5 font-weight-bold text-white mt-5">Pricing</h1>
			</div>
			
		</div>
	</div>
</section>


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
            <!-- <tr class="mt-2">
             <th scope="row">Teeth Whitening Service at Dental Clinic</th>
             <td>1 Times</td>
             <td>$152</td>
            </tr>
            <tr class="mt-2">
             <th scope="row">Ceramic crowns and fillings Dental porcelain</th>
             <td>1 Times</td>
             <td>$152</td>
            </tr>
            <tr class="mt-2">
             <th scope="row">Remove crowns, bridges Service</th>
             <td>1 Times</td>
             <td>$152</td>
            </tr>
            <tr class="mt-2">
             <th scope="row">Covering the recession of the gums</th>
             <td>1 Times</td>
             <td>$152</td>
            </tr>
            <tr class="mt-2">
             <th scope="row">Consultation, impressions and preparation of models</th>
             <td>1 Times</td>
             <td>$152</td>
            </tr>
            <tr class="mt-2">
             <th scope="row">Teeth Whitening Service at home</th>
             <td>1 Times</td>
             <td>$152</td>
            </tr>
            <tr class="mt-2">
             <th scope="row">Removal of an old inlay, old crown</th>
             <td>1 Times</td>
             <td>$152</td>
            </tr> -->

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




<?php

include "footer.php";


?>





</body>
</html>