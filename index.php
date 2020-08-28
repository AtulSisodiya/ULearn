<!DOCTYPE html>
<html lang="en">
<title>ULearn</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="w3.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b><br>ULearn</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Courses Available</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Videos</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">FAQs</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Reviews</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>ULearn</span>
 </header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo" text="red"><b>ULearn</b></h1>
	 <p>The Most Important Benefits Of eLearning For Students
Today's learners want relevant, mobile, self-paced, and personalized content. This need is fulfilled with the online mode of learning; here, students can learn at their own comfort and requirement. Let's have an analytical look at the advantages of online learning.
</p>
<p>
1. Online Learning Accommodates Everyone’s Needs
The online method of learning is best suited for everyone. This digital revolution has led to remarkable changes in how the content is accessed, consumed, discussed, and shared. Online educational courses can be taken up by office goers and housewives too, at the time that suits them. Depending on their availability and comfort, many people choose to learn at weekends or evenings.
</p>
<p>
2. Lectures Can Be Taken Any Number Of Times
Unlike classroom teaching, with online learning you can access the content an unlimited number of times. This is especially required at the time of revision when preparing for an exam. In traditional form of learning, if you can not attend the lecture, then you have to prepare for that topic on your own; in eLearning, you can attend the lectures whenever you want with ease.
</p>
<p>
3. Offers Access To Updated Content
A prime benefit of learning online is that it makes sure that you are in synchronization with modern learners. This enables the learner to access updated content whenever they want it.
</p>
    <h1 class="w3-xxxlarge w3-text-red"><b>Courses Available</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="python.jpg" style="width:100%" onclick="onClick(this)" alt="Learn Python Basics by google"><p>Learn Python Basics</p>
      <img src="php.jpg" style="width:100%" onclick="onClick(this)" alt="learn php from scratch"><p>learn php from scratch</p>
      <img src="ML.jpg" style="width:100%" onclick="onClick(this)" alt="Tensor Flow"><p>Tensor Flow for Machine Learning</p>
	  <img src="iot.jpg" style="width:100%" onclick="onClick(this)" alt="Internet of Things is the new Imerging course"><p>Internet of Things is the new Imerging course</p>
    </div>

   
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Videos</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>eLearning is cost effective as compared to traditional forms of learning. The reason for this price reduction is because learning through this mode happens quickly and easily.</p>
	 <video width="500" height="500" controls>
  <source src="elearn.mp4" type="video/mp4">
  
</video>
 
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>FAQs</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    
    <p>FAQ #1 – What is eLearning?
To put it simply, eLearning is electronic learning, and it typically includes a combination of electronic media and educational technology. E-learning is computer based and makes use of multimedia sources such as text, audio, animations, images and so on.

It is an intranet or an extranet web-based learning that combines information and communication systems on either a free standing or network based Learning Management System (LMS). E-Learning is synonymous with the use of ICT (information and communication technology) in education. Today, eLearning is used extensively in the education and the corporate worlds.
</p>
<p>
FAQ #2 – Why should I consider eLearning-based training?
E-learning is anywhere learning! Classroom training sessions require face to face interaction, which usually takes place during working hours, hindering working schedules. With eLearning, you have the freedom to to take the course at the place and time of your choice, without affecting work schedules.

E-learning is pocket friendly and saves time; it saves the money spent on printed material and classroom supplies,and the best part is that it is cheaper to develop and can be used frequently. British Telecom delivered e-business training to 23,000 employees in three months at a cost of £5.9m, compared to £17.8 million and a five-year time span for classroom training (Source: Taylor, 2002). So, you can see for yourself why eLearning should be an obvious choice for your training needs.
</p>
<p>
FAQ #3 – Are eLearning courses available in languages other than English?
Yes, of course! E-learning courses can be made available in various languages such as French, Spanish, Dutch and many more. You can easily translate your eLearning course into multiple languages, if you need cross culture training in your organization.
</p>
<p>
FAQ #4 – Can I customize eLearning courses?
While there are many off the shelf ready-made courses available in the market,eLearning courses can be customized to your specifications. Many corporate bigwigs utilize this feature of eLearning to train their staff on specific subjects. customization helps in providing a better understanding of the processes and principles in an organization. You can opt for a customized eLearning course, when your training needs are unique and confidential. For instance, the procure to pay (P2P) process differs from organization to organization. In such cases, it is ideal to have a customized eLearning course.
</p>
<p>
FAQ #5 – What are the hardware and software requirements for online training?
Well, to begin online training in your organization, you need have a platform that hosts your eLearning courses. This platform is called a Learning Management System (LMS). You also need eLearning course authoring tools, which are used to create and publish digital courses. Tools such as Articulate Storyline and Adobe Captivate are SCORM compliant and can be used to develop courses that are easy to upload on LMSs.

To access an online learning course,a learner will need a computer or laptop with WLAN or intranet access to the LMS and your login details to take the course.
</p>
<p>
FAQ #6 – How much does an eLearning course cost?
E-learning is a one-time investment, and once you have your course you can use it as many times as you want. You can save precious dollars by eliminating the need for repeated presence of the trainer.

Building and delivering eLearning include activities such as conducting a training needs analysis, comprehending the content, developing an instructional strategy, identifying the best delivery method like LMS, assessing the extent of customization and so on.

Based on the amount of work needed and our basic estimate on hourly basis, an eLearning course of 60 minutes costs about USD 3500. Below is the estimated breakup of the costs.
    </p>
    
  </div>

  
  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Reviews</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Under Development</p>
  </div>


  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>you can contact us as follow</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>ULearn</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>ULearn@gmail.com</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Created by <a class="w3-hover-opacity">ULearn</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
