<?php
include "conn.php";
include "head.php";
include "nav.php";





?>



	<section>
	<div class="container-fluid mt-5 about">
		<div class="row about1">
			<div class="col-md-12 text-center mt-3">
				<h1 class="display-5 font-weight-bold text-white mt-5">Contact</h1>
			</div>
			
		</div>
	</div>
</section>


<section>
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-12">
				<iframe class="w-100  border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11956.9355465873!2d24.0768412544878!3d56.9550599906977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2z4Kaw4Ka_4KaX4Ka-LCDgprLgp43gpq_gpr7gpp_gp43gpq3gpr_gpoY!5e0!3m2!1sbn!2sbd!4v1543911160102" allowfullscreen="" style="height: 500px;"></iframe>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container mt-5">
		<div class="row ">
		<div class="col-md-4 p-4 text-white" style="background-color:#00aeef">
			<h5 class="font-weight-bold">Address</h5>
			<p class="font-weight-bold">28 Ahmednagar, Maharashtra,<br> 7788569 USA</p>
			<h5 class="font-weight-bold">Phone</h5>
			<p class="font-weight-bold">9834696164</p>
			<h5 class="font-weight-bold">Fax</h5>
			<p class="font-weight-bold">9834696164</p>
			<h5 class="font-weight-bold">Email</h5>
			<p class="font-weight-bold">ramarupnar@gmail.com</p>
		</div>
		<div class="col-md-7 ml-md-5">
			<h1 class="display-5 font-weight-bold">Get Int Touch</h1>
			<div class="section-heading">
          <div class="line"></div>
          </div>
          <form action="contact.php" method="post">
			<div class="row">
				
				<div class="col-md-6 mt-5 font-weight-bold">
					<input type="text" name="name" class="form-control" placeholder="Your Name">
				</div>
				<div class="col-md-6 mt-5 ">
					<input type="email" name="email" class="form-control" placeholder="Your Email">
				</div>
				<div class="col-md-12 mt-5 ">
					<textarea  name="messege" class="form-control font-weight-bold" placeholder="Your MASSEGE"></textarea>
				</div>
				<div class="col-md-12 mt-5 ">
					<button class="btn1 btn-danger">SAVE MASSEGE</button>
				</div>
				
			</div>
			</form>	
			
		</div>

		</div>
	</div>
</section>



<?php

include "footer.php";


echo "<pre>";
print_r($_POST);
if(isset($_POST['name'])){


     $query="INSERT INTO contact(name,email,messege,cdate ) 
                   VALUES  ('".$_POST['name']."','".$_POST['email']."','".$_POST['messege']."','".$_POST['cdate']. "')";

     $fire=mysqli_query($conn,$query);
if($fire){

    echo "<script>alert('Success !!!');window.location.href='contact.php';</script>";
}
else{
    echo "Not OKKKKK !!!!!!";

}
}


?>




</body>
</html>

