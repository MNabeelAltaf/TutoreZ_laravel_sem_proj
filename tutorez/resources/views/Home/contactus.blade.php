<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title>Contact Us</title>
    <link rel="stylesheet" href={{ asset('css/contactus/contactus.css') }}>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>



  <div class="container">
    <div class="content">
      <div class="image-box">
       <img src={{ asset ('css/contactus/contactus.png') }} alt="">
      </div>
    <form action="#">
      <div class="topic">Send us a message</div>
      <div class="input-box">
        <input type="text" required>
        <label>Enter your name</label>
      </div>
      <div class="input-box">
        <input type="text" required>
        <label>Enter your email</label>
      </div>
      <div class="message-box">

        <textarea  > </textarea>
        <label>Enter your message</label>
      </div>
      <div class="input-box">
        <input type="submit" value="Send Message">
      </div>
    </form>
  </div>
  </div>
</body>
</html>
