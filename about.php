

<style>
*{
  box-sizing: border-box;
}

body{
  margin:0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size:1rem;
  font-weight:normal;
  line-height:1.5;
  color:#333;
  overflow-x:hidden;
}

.v-header{
  height:100vh;
  display:flex;
  align-items:center;
  color:#fff;
}

.container{
  max-width:960px;
  padding-left:1rem;
  padding-right:1rem;
  margin:auto;
  text-align:center;
}

.fullscreen-video-wrap{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100vh;
  overflow:hidden;
}

.fullscreen-video-wrap video{
  min-height:100%;
  min-width:100%;
 
}

.header-overlay{
  height:100vh;
  position: absolute;
  top:0;
  left:0;
  width:100vw;
  margin-left: 0px;
  z-index:1;
  background:#fbc02d;
  opacity:0.85;
  

}

.header-content{
  z-index:2;
  color: black;
  margin-left: 400px;
}

.header-content h4{
  font-size:50px;
  margin-bottom:0;
}

.header-content p{
  font-size:1.5rem;
  display:block;
  padding-bottom:2rem;
}

.btn{
  background: #FFFF00;
  color:black;
  font-size:1.2rem;
  padding: 1rem 2rem;
  text-decoration: none;
  position: absolute;
  left:1500px;
  top: 20px;
}

.section{
  padding:20px 0;
}

.section-b{
  background:#fff;
  
}
.section-b h1{
	font-size:40px;
	background-color: yellow;

}


@media(max-width:960px){
  .container{
    padding-right:3rem;
    padding-left:3rem;
  }
}
.team{
    
    text-align: center;

}

.team h2{
        margin-left: 50px;
        color:#4c4c4c;
}
.team h3{
    margin: 20px 0 20px;
    color:#4c4c4c;
}

.team p{
    color:#737373;

}


}
</style>
<header class="v-header container-fluid">
    <div class="fullscreen-video-wrap">
      
      <video src="img/video.mp4" autoplay="true" loop="true" muted>
    </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
      <div class="container">
              <div class="row">
              <div class="col-lg-8 col-md-8 animated slideInRight delay-4s">
                        
                  <h4>About Skert254</h4>
                  <p>We are specialists in schools skating  training  with years of proven experience, knowledge and passion to organize safe, enjoyable and unforgettable skating lessons that inspire young learners to build on their confidence, passion and talents long after the lessons.</p>
              
              </div>
      
      <a href="index.php" class="btn" id="btn2">Home</a>
    </div>
  </header>

        <div id="team" class="team">
          <h2 class="animated infinite pulse delay-1s">ABOUT SKERT254</h2>
          <div class="container-fluid">
              <div class="row">
              <div class="col-lg-4 col-md-4 animated slideInRight delay-4s">
                        
                  <h4>SKATING LESSONS</h4>
                  <p>We are not a typical skating academy. In addition to the regular sessions, students also develop specific skills in small groups based on their abilities so that they can absorb the most out of every lesson. In addition, We also ensure that the student has fun during the training.</p>
              
              </div>
               <div class="col-lg-4 col-md-4 animated slideInRight delay-3s">
                       
                  <h4>TRAINING LEVELS</h4>
                  <p>We offer beginner, intermediate and advanced lessons for students from the age of 3 to adults.We have three packages of ksh 3600 ,  4,300 and 5,000 per term per child.Skating can be done on tarmac, cabro, tiles, terrazzo or any other hard even surface. </p>
              
              </div>
               <div class="col-lg-4 col-md-4 animated slideInRight delay-5s">
                      
                  <h4>COMPETITION AND AWARDS</h4>
                  <p>In between the term we organize a race among the students  we train and offer certificates medals for participants . Top ranking students in our interschool’s competitions are forwarded to the Roller Sports Kenya Federation for local  and international championships to build careers.  </p>
              
              </div>
               
          </div>
      </div>

<?php include'footer.php';?>




