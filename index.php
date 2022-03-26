<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="facebook.com/jamel.marmah" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/jamel-martey-944981228/" class="fab fa-linkedin"></a>
      <a href="https://github.com/mjmartey19" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, I am Jamel</h3>
      <span data-aos="fade-up">web designer, Graphic designer,UI designer & developer</span>
      <p data-aos="fade-up">I specialize in designing superior quality professional graphics for my clients.
	   I am able to create a website that won't just suit your requirements, but also take care of your budget.
	  </p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">
	  Hi. Thanks for checking out my website and design work. I’m a graphic designer with a background
	  in web, UI and design. I live and work in Accra.
    
	  I work closely with clients to articulate their vision in a design, using Adobe Photoshop and Figma 
	  to create a mockup, and then I develop a custom Website or Web Application to match the design and
	  desired functionality. I’m fluent in HTML and CSS, and pretty handy with PHP and Javascript.
	  I provide my clients with full web strategy consultancy, including SEO and social media strategy.
	  Outsite of the web.
      My focus lately has been helping small businesses get started on the internet by designing and building
	  websites that are professional and clean, with a content-management system for their website that allows
	  them to take control of their brand’s narrative. 
	  </p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Martey Jamel </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> scholar2468@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Accra, Ghana </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +233-551-201-245 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up" >download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
		  <div class="bar" data-aos="fade-left"> <h3><span>Photoshop</span> <span>80%</span></h3> </div>
		   <div class="bar" data-aos="fade-right"> <h3><span>Figma</span> <span>65%</span></h3> </div>
		    <div class="bar" data-aos="fade-right"> <h3><span>Microsfot Word</span> <span>90%</span></h3> </div>
			 <div class="bar" data-aos="fade-right"> <h3><span>Microsoft Excel</span> <span>70%</span></h3> </div>
			  <div class="bar" data-aos="fade-right"> <h3><span>PowerPoint</span> <span>75%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2020 )</span>
               <h3>web designer</h3>
               <p>W3SCHOOL</p>
			   <p>W3Schools is a freemium educational website for learning coding online.
			   Developed in 1998, it derives its name from the World Wide Web but is not 
			   affiliated with the W3C. W3Schools offers courses covering all aspects of 
			   web development. It is run by Refsnes Data in Norway.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2021 )</span>
               <h3>web developer</h3>
                 <p>W3SCHOOL</p>
			   <p>W3Schools is a freemium educational website for learning coding online.
			   Developed in 1998, it derives its name from the World Wide Web but is not 
			   affiliated with the W3C. W3Schools offers courses covering all aspects of 
			   web development. It is run by Refsnes Data in Norway.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>graphic designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2019 - 2020 )</span>
               <h3>front-end developer</h3>
                <p>W3SCHOOL</p>
			    <p>W3Schools is a freemium educational website for learning coding online.
			       Developed in 1998, it derives its name from the World Wide Web but is not 
			       affiliated with the W3C. W3Schools offers courses covering all aspects of 
			       web development. It is run by Refsnes Data in Norway.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2021 )</span>
               <h3>back-end developer</h3>
               <p>W3SCHOOL</p>
			   <p>W3Schools is a freemium educational website for learning coding online.
			   Developed in 1998, it derives its name from the World Wide Web but is not 
			   affiliated with the W3C. W3Schools offers courses covering all aspects of 
			   web development. It is run by Refsnes Data in Norway.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>full-stack developer</h3>
               <p>W3SCHOOL</p>
			   <p>W3Schools is a freemium educational website for learning coding online.
			   Developed in 1998, it derives its name from the World Wide Web but is not 
			   affiliated with the W3C. W3Schools offers courses covering all aspects of 
			   web development. It is run by Refsnes Data in Norway.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/5.jpg" alt="">
         <h3>Realtime Chat Application</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/3.jpg" alt="">
         <h3>Food Flyer</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/2.jpg" alt="">
         <h3>Business Card</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/4.jpg" alt="">
         <h3>CV</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
         <h3>Mockup</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/7.jpg" alt="">
         <h3>Kuulchat Data Entry</h3>
         <span>( 2020 - 2022 )</span>
      </div>
	  
	   <div class="box" data-aos="zoom-in">
         <img src="images/6.jpg" alt="">
         <h3>Letterhead</h3>
         <span>( 2020 - 2022 )</span>
      </div>
	  
	   <div class="box" data-aos="zoom-in">
         <img src="images/8.jpg" alt="">
         <h3>CloseApp Banner</h3>
         <span>( 2020 - 2022 )</span>
      </div>
	  
	   <div class="box" data-aos="zoom-in">
         <img src="images/9.jpg" alt="">
         <h3>Graduation Card</h3>
         <span>( 2020 - 2022 )</span>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+233-551-201245</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>scholar@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Accra, Ghana - 400104</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>ScholarX</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>