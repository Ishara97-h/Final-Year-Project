<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" 
            content="IE=edge">
  
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
  
    <title>Spinning Ball Animation</title>
  
    <style>
        * {
            background-color:  #ff6666;
        }
          
        .ball1 {
            height: 40px;
            width: 40px;
            border-radius: 100px;
            position: fixed;
            top: 10vh;
            left: 5vw;
            animation: spinBall 0.13s linear infinite;
            box-shadow: inset 0 0 18px #fff, 
                inset 6px 0 18px violet, 
                inset -6px 0 18px #0ff, 
                inset 6px 0 30px violet, 
                inset -6px 0 30px #0ff, 
                0 0 18px #fff, -4px 
                0 18px violet, 4px 0 18px #0ff;
        }
        .ball2 {
            height: 40px;
            width: 40px;
            border-radius: 100px;
            position: fixed;
            top: 80vh;
            left: 5vw;
            animation: spinBall 0.13s linear infinite;
            box-shadow: inset 0 0 18px #fff, 
                inset 6px 0 18px violet, 
                inset -6px 0 18px #0ff, 
                inset 6px 0 30px violet, 
                inset -6px 0 30px #0ff, 
                0 0 18px #fff, -4px 
                0 18px violet, 4px 0 18px #0ff;
        }
        .ball3 {
            height: 40px;
            width: 40px;
            border-radius: 100px;
            position: fixed;
            top: 80vh;
            left: 90vw;
            animation: spinBall 0.13s linear infinite;
            box-shadow: inset 0 0 18px #fff, 
                inset 6px 0 18px violet, 
                inset -6px 0 18px #0ff, 
                inset 6px 0 30px violet, 
                inset -6px 0 30px #0ff, 
                0 0 18px #fff, -4px 
                0 18px violet, 4px 0 18px #0ff;
        }
        .ball4 {
            height: 40px;
            width: 40px;
            border-radius: 100px;
            position: fixed;
            top: 10vh;
            left: 90vw;
            animation: spinBall 0.13s linear infinite;
            box-shadow: inset 0 0 18px #fff, 
                inset 6px 0 18px violet, 
                inset -6px 0 18px #0ff, 
                inset 6px 0 30px violet, 
                inset -6px 0 30px #0ff, 
                0 0 18px #fff, -4px 
                0 18px violet, 4px 0 18px #0ff;
        }
          
        @keyframes spinBall {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
  
<body>
    <div class="ball1"></div>
    <div class="ball2"></div>
    <div class="ball3"></div>
    <div class="ball4"></div>
    <section id="hero" class="d-flex align-items-center">
       
       <div class="container" data-aos="zoom-out" data-aos-delay="100">
         
         <div class="d-flex" >
             <br><br><br><br><br><br>
           <a href="signup.php" class="btn-get-started scrollto" style="margin-left:600px; ;color:black; ">SIGN UP INVENTable</a>
             </div>
       </div>
     </section>
</body>
  
</html>