@extends('layouts.app')



@section('content')

 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>

</head>
<style>
  :root{
  
  --dark-color: #00203FFF;
  --darker-color: #084C61FF;
  --darkest-color: #07689F;
  --light-color: #B5D9EB;
  --lighter-color: #CEE6F2;
  --lightest-color: #FEFFFF;

}
main {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 200px;
      margin-top: 600px;
      
    }
    .navigation a {
      position: relative;
      color: var(--dark-color);
      margin-left: 40px;
      font-family: 'Geologica', sans-serif;
      font-size: 20px;
      text-decoration: none;
    }

    .navigation .btn-login {
      width: 130px;
      height: 50px;
      background: transparent;
      border: 2px solid var(--dark-color);
      background-color: var(--dark-color);
      border-radius: 17px;
      color: var(--lightest-color);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-left: 40px;
      transition: .5s;
    }

    .navigation .btn-login:hover {
      /* background-color: var(--lightest-color); */
      color: var(--dark-color);
    }

    .navigation .btn-login a {
      color: var(--lightest-color);
      margin: 0;
    }

    .navigation a::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 4px;
      background: var(--darker-color);
      border-radius: 5px;
      left: 0;
      bottom: -6px;
      transform: scaleX(0);
      transition: transform .4s;
      transform-origin: right;
    }

    .navigation a:hover::after {
      transform-origin: left;
      transform: scaleX(1);
    }





 .btn-login {
      width: 130px;
      height: 50px;
      background: transparent;
      border: 2px solid var(--dark-color);
      background-color: var(--dark-color);
      border-radius: 17px;
      color: var(--lightest-color);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-left: 40px;
      transition: .5s;
    }

     .btn-login:hover {
      /* background-color: var(--lightest-color); */
      color: var(--dark-color);
    }

     .btn-login a {
      color: var(--lightest-color);
      margin: 0;
    }

    .img-1 img {
      margin-top: 100px;
      width: 400px;
      height: auto;
      border-radius: 10px;
    }

    .benifit {
      font-weight: bold;
      margin-left: 70px;
      font-size: 1.5rem;

    }

    .benifit strong {
      font-size: 1.7rem;
      font-family: 'Geologica', sans-serif;
    }

    .img-2 img {
      margin-top: 100px;
      width: 500px;
      height: auto;
      border-radius: 10px;
    }

    footer{
color:var(--lightest-color);
 font-weight:bold;
  /* position:fixed; */
  margin-top:30px;
  bottom: 0px;
  width: 100%;
  background:var(--dark-color);
  flex-shrink: 0;
}
.main-content{
  display: flex;
}
.main-content .box{
  flex-basis: 50%;
  padding: 10px 20px;
}
.box h2{
  font-size: 1.125rem;
  font-weight: 600;
  text-transform: uppercase;
}
.box .content{
  margin: 20px 0 0 0;
  position: relative;
}
.box .content:before{
  position: absolute;
  content: '';
  top: -10px;
  height: 2px;
  width: 100%;
  background: #1a1a1a;
}
.box .content:after{
  position: absolute;
  content: '';
  height: 2px;
  width: 15%;
  background: #f12020;
  top: -10px;
}
.left .content p{
  text-align: justify;
}
.left .content .social{
  margin: 20px 0 0 0;
}
.left .content .social a{
  padding: 0 2px;
}
.left .content .social a span{
  height: 40px;
  width: 40px;
  background: #1a1a1a;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  transition: 0.3s;
}
.left .content .social a span:hover{
  background: #f12020;
}
.center .content .fas{
  font-size: 1.4375rem;
  background: #1a1a1a;
  height: 45px;
  width: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
  cursor: pointer;
}
.center .content .fas:hover{
  background: #f12020;
}
.center .content .text{
  font-size: 1.0625rem;
  font-weight: 500;
  padding-left: 10px;
}
.center .content .phone{
  margin: 15px 0;
}
.right form .text{
  font-size: 1.0625rem;
  margin-bottom: 2px;
  color: #656565;
}
.right form .msg{
  margin-top: 10px;
}
.right form input, .right form textarea{
  width: 100%;
  font-size: 1.0625rem;
  background: var(--lightest-color);
  padding-left: 10px;
  border: 1px solid #222222;
}
.right form input:focus,
.right form textarea:focus{
  outline-color: #3498db;
}
.right form input{
  height: 35px;
}
.right form .btn{
  margin-top: 10px;
}
.right form .btn button{
  height: 40px;
  width: 100%;
  border: none;
  outline: none;
  background: #f12020;
  font-size: 1.0625rem;
  font-weight: 500;
  cursor: pointer;
  transition: .3s;
}
.right form .btn button:hover{
  background: #000;
}
.bottom center{
  padding: 5px;
  font-size: 0.9375rem;
  background: #151515;
}
.bottom center span{
  color: #656565;
}
.bottom center a{
  color: #f12020;
  text-decoration: none;
}
.bottom center a:hover{
  text-decoration: underline;
}
@media screen and (max-width: 900px) {
  footer{
    position: relative;
    bottom: 0px;
  }
  .main-content{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .main-content .box{
    margin: 5px 0;
  }
}

</style>
<body>

  <main>
    <div class="main">
      <h1>
        <p class="multipleStrings"></p>
        <strong></strong> <br>
      </h1>

      <p class="down-main-text">Stay Organized, Stay Ahead. Fuel Your Success with Productivity</p>
      <button type="submit" class="btn-login">
        <a href="{{ route('register') }}">Start Now</a>
      </button>
    </div>
  </main>
  <div class="second-section">
    <div class="img-1">
      <img src="{{ asset('images/org.jpg') }}" alt="">
    </div>
    <p class="benifit"><strong>Organization and Time Management: </strong><br>A to-do list helps you stay organized by providing a clear overview of tasks and priorities. It helps you manage your time effectively and ensures that important tasks are not overlooked or forgotten.</p>
  </div>

  <div class="second-section">
    <p class="benifit"><strong>Stress Reduction:</strong><br>Keeping track of tasks and having a plan in place reduces stress and anxiety. With a to-do list, you can have peace of mind, knowing that you have a clear roadmap to follow and that important tasks are accounted for.</p>
    <div class="img-2">
      <img src="{{ asset('images/rdc.jpg') }}" alt="">
    </div>
  </div>
  <div class="trust">
    <img src="{{ asset('images/down.jpg') }}" alt="">

    <p class="benifit">Trust in our todo list to be your reliable companion in your quest for productivity and organization. We are dedicated to providing a seamless, secure, and feature-rich solution that earns your trust and helps you stay focused on what matters most."
    </p>
    <button type="submit" class="btn-login">
      <a href="{{ route('register') }}">Create Account</a>
    </button>
  </div>

  <footer>
    <div class="main-content">
      <div class="left box">
        <h2>About us</h2>
        <div class="content">
          <p>2Do List is a powerful task management tool designed to help individuals streamline their daily tasks, prioritize their goals, and achieve maximum efficiency. Whether you are a student, professional, or busy individual, our platform offers a range of features and customizable options tailored to meet your unique needs.</p>
          <div class="social">
            <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
            <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
          </div>
        </div>
      </div>

      <div class="center box">
        <h2>Address</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Kathmandu, Nepal</span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+97798********</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">2dolist@gmail.com</span>
          </div>
        </div>
      </div>

      <div class="right box">
        <h2>Contact us</h2>
        <div class="content">
          <form action="#">
            <div class="email">
              <div class="text">Email *</div>
              <input type="email" required>
            </div>
            <div class="msg">
              <div class="text">Message *</div>
              <textarea rows="2" cols="25" required></textarea>
            </div>
            <div class="btn">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="bottom">
      <center>
        <span class="credit">Created By <a href="home.php">2Do list</a> | </span>
        <span class="far fa-copyright"></span>
        <span> 2023 All rights reserved.</span>
      </center>
    </div>
  </footer>
  <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
  <script>
    new TypeIt(".multipleStrings", {
      strings: [
        "  Rise Above Procrastination,",
        " Embrace Discipline, and Unleash Your True Potential with our Revolutionary Todo List"
      ],
      speed: 30,
      waitUntilVisible: true,
    }).go();
  </script>
</body>

</html>
@endsection