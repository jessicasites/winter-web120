<?php include 'includes/header.php';?>
<img class="pic" src="img/profile2.jpg" alt="Massage"/>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
    <br><br><br>
 <h3>Please contact me with any questions:</h3>
 <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "jezziebug@hotmail.com";  //place your/your client's email address here
        $toName = "Jessica Sites"; //place your client's name here
        $website = "Sports Massage";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</aside>
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php';?>