<?php include "./includes/header.php"; ?>
<link rel="stylesheet" href="./contact.css">

     <section class="contact-sect">
          <div class="contact-div">
             <div class="info-div">
                 <h2 class="pd-30">Contact Us</h2>
                 <div class="info pd-30">
                    <iconify-icon class="icon"icon="tabler:mail"></iconify-icon>
                    <p>thehouseofsatika@gmail.com</p>
                 </div>
                 <div class="info pd-30">
                    <iconify-icon class="icon" icon="ion:call"></iconify-icon>
                    <p>0123-456-789</p>
                 </div>
             </div>
             <div class="form-div">
                 <form action="send.php">
                     <label for="name">Name:</label> <br>
                     <input type="text" name="Name"> <br>
                     <label for="name">Email:</label> <br>
                     <input type="email" name= "Email"> <br>
                     <label for="name">Phone Number:</label> <br>
                     <input type="text" name= "phone Number"> <br>
                     <div class="btn-div"><button>Submit</button></a></div>
                 </form>
             </div>
            </div> 
     </section>
<?php include_once "./includes/footer.php" ?>