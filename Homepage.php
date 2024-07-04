<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMNY</title>
    <link rel="stylesheet" href="Homestyle.css">

</head>

 
<body>

    <header>
      <img src="imgs/Name.png" height="200px" width="300px" class="logo">
        <p id="collection">Shop our new collection NOW!</p>
        <nav>
          
          <a href="sign-in.php" class="userlink">
            <img src="imgs/signin.png" alt="User Icon" class="usericon">
            <a href="contact.html">Contact Us</a>
           
            <a href="about.html">About Us</a>
            
          </nav>
  
      </header>

      <div class="moving-text">Don't miss our 50% sale</div>
      <div class="moving-text small-text">Dont't miss our 50% sale</div>
   
      <div class="image-container" id="image-container">

        <img src="" alt="Changing Image">
      </div> 

    <footer>
        <p>&copy; 2023 HMNY. All rights reserved.</p>
        <div class="social-media-icons">
            <a href="https://www.instagram.com/your_instagram_profile" target="_blank"><img src="imgs/instagram.png" alt="Instagram"></a>
            <a href="https://www.facebook.com/your_facebook_page" target="_blank"><img src="imgs/facebook.png" alt="Facebook"></a>
          </div>
      </footer></br>

      <script>
        const imageFilenames = [
          'pic1.jpg',
          'pic2.jpg',
          'pic3.jpg',
          'pic4.jpg',
          'pic5.jpg',
          'pic6.jpg',
          'pic7.jpg',
          'pic8.jpg',
          'pic9.jpg',
          'pic10.jpg'
        ];
    
        const imageContainer = document.getElementById('image-container');
        const imageElement = imageContainer.querySelector('img');
    
        let currentIndex = 0;
    
        function changeImage() {
          const imageUrl = `imgs/${imageFilenames[currentIndex]}`;
          imageElement.src = imageUrl;
          currentIndex = (currentIndex + 1) % imageFilenames.length;
        }
    
       
        changeImage();
        setInterval(changeImage, 3000); 

       
      </script>
    


</body>