<?php
    @include_once 'header.php'; 
   
     
?>
    <!-- ============================ -->
    <!-- header end from here  -->
    <!-- ============================ -->
    <!-- ============================ -->
    <!-- canada loacation  start from here  -->
    <!-- ============================ -->
     
    <section class="contact">
        
      <div class="contact__text">
        <h2 class="contact__header">sign up</h2>
        <p class="paragraph">
          Ready to take it to the next level? Let’s talk about your project or
          idea and find out how we can help your business grow. If you are
          looking for unique digital experiences that’s relatable to your users,
          drop us a line.
        </p>
      </div>
       
      <div class="contact__form">

      <form  method="post"  action="../../includes/signup.inc.php">
          <div class="from-control paragraph">
            <input type="text" placeholder="name" name="name"/>
          </div>
          <div class="from-control">
              <input type="email" placeholder="email" name="email"/>
          </div>
          <div class="from-control">
            <input type="text" placeholder="username" name="username"/>
          </div>
             <div class="from-control">
            <input type="password" placeholder="enter password" name="password"/>
            </div>
            <div class="from-control">
            <input type="password" placeholder="enter password again" name="repassword"/>
            </div>
            <div class="from-control">
            <input type="submit" value="save" name="submit" class="btn" />
            </div>
        </form>
      </div>
    </section>
    <!-- ============================ -->
    <!-- canada location end from here  -->
    <!-- ============================ -->

    <!-- ============================ -->
    <!-- footer section start from here  -->
    <!-- ============================ -->

    <footer>
      <section class="letstalk">
        <div class="letstalk-card flex-wrap">
          <div class="letstalk-card__descrip">
            <h3 class="letstalk__title">let's talk about your project</h3>
            <p class="paragraph letstalk__paragraph">
              ready to take it to the next level ? convact us today and find out
              how our expertise can help your business grow
            </p>
          </div>
          <a href="" class="btn letstalk--btn">lets talk</a>
        </div>
      </section>
      <div class="container footer--container">
        <div class="footer-nav">
          <a href="/index.html" class="logo-image">
            <img src="/assets/alinessa_logo.png" alt="logo-light" />
          </a>
          <ul class="footer-nav-list">
            <li class="footer-nav-list-item">
              <a href="/srcs/3-pages/about.html" class="nav-linkss white"
                >OUR COMPANY</a
              >
            </li>
            <li class="footer-nav-list-item">
              <a href="/srcs/3-pages/locations.html" class="nav-linkss white"
                >LOCATIONS</a
              >
            </li>
            <li class="footer-nav-list-item">
              <a href="/srcs/3-pages/contact.html" class="nav-linkss white"
                >CONTACT</a
              >
            </li>
          </ul>
        </div>
        <div class="line"></div>
        <!-- footer-details -->
        <div class="footer-details">
          <div class="footer-details-location">
            <h class="bold opacity05">Alinessa Central Office</h>
            <p class="paragraph">243/A Chowghari</p>
            <p class="paragraph">Golapgonj Sylhet</p>
          </div>
          <div class="footer-details-contact">
            <p class="bold opacity05">Contact Us (Central Office)</p>
            <p class="paragraph">P : +88 01995890189</p>
            <p class="paragraph">M : arifurrex@gmail.com</p>
          </div>
          <div class="footer-details-social">
            <span class="social-icon social-icon-facebook"></span>
            <span class="social-icon social-icon-youtube"></span>
            <span class="social-icon social-icon-twitter"></span>
            <span class="social-icon social-icon-pinterest"></span>
            <span class="social-icon social-icon-insta"></span>
          </div>
        </div>
        <!-- footer-details end -->
      </div>
    </footer>

    <!-- ============================ -->
    <!-- footer section end from here  -->
    <!-- ============================ -->
    <script src="/src/1-scripts/script.js"></script>
  </body>
</html>
