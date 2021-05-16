<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'index.php';
        //require 'index.php';
        // put your code here
        ?>
      <div id="slider">
        <div class="slides">
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
              <button type="button"  class="btnHomeCarousel" >Join Now</button>
            </div>
          </div>
          <div class="image">
            <img src="Images/Before Login Images/HomeCarousel1.jpeg" alt=""/>
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
              <button type="button"  class="btnHomeCarousel" onClick="index.php?page=community" >Know Our Community</button>
            </div>
          </div>
          <div class="image">
              <img src="Images/Before Login Images/HomeCarousel2.jpeg" alt=""/>
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
              <button type="button"  class="btnHomeCarousel" >Our Happy Clients</button>
            </div>
          </div>
          <div class="image">
              <img src="Images/Before Login Images/HomeCarousel3.jpg" alt=""/>
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
              <button type="button"  class="btnHomeCarousel" >Hire Now</button>
            </div>
          </div>
          <div class="image">
              <img src="Images/Before Login Images/HomeCarousel4.jpeg" alt=""/>
          </div>
        </div>
      </div>
        <div class="switch">
        <ul>
          <li>
            <div class="on"></div>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      </div>  
      <div>
            <div class="home-below-carousel-section">
                <div class="container-fluid section-text">
                    <h2>Freelance Group’s best put together in one offer designed for businesses.</h2>
                </div>
                <div class="container-fluid section-head">
                    <h1>Get Up <span>Skill</span></h1>
                    <h3>Global solution to manage your project</h3>
                    <p>Toptal is an exclusive network of the top freelance experts in the world.
                        Top companies rely on Toptal freelancers for their most important projects.</p>
                </div>
                <img src="Images/Before Login Images/HomeBelowCarousel-img.png" />
            </div>
        </div>
      <div class="container section2">
            <div class="section2-head">
                <h2>Gain Access to a Network of Top Industry Experts</h2>
            </div>
            <div class="container"></div>
            <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
              <img src="../Images/Before Login Images/HomeSection2 - img1.png" alt=""/>
                <label class="section2-text">  Developers</label>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                <asp:Button ID="Button5" CssClass="section2-button" runat="server" Text="Our Developers" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
                  <img src="../Images/Before Login Images/HomeSection2 - img2.png" alt=""/>
                <label class="section2-text">   Designers</label>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
              <asp:Button ID="Button6" CssClass="section2-button" runat="server" Text="Our Designers" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
                  <img src="../Images/Before Login Images/HomeSection2 - img3.png" alt="" />
               <label class="section2-text"> Finance Experts</label>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
              <asp:Button ID="Button7" CssClass="section2-button" runat="server" Text="Our Finance Experts" />
            </div>
          </div>
        </div>
      </div>
</div>
        <?php
        include 'footer.php';
        //require 'index.php';
        // put your code here
        ?>
    </body>
</html>
