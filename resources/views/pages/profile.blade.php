<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{">
    <title>Prelim Project | Profile</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
      
      <div class="logoss">

           <img src="{{url('images/tl.jpg')}}" width="1280" height="609" alt=""/>

  </div>

      <div class="logo">

           <img src="{{url('images/image1.png')}}" width="300" height="300" alt=""/>

   </div>

   

<style>
    body {
          color: black;
          padding: 15px 32px;
          text-align: center;
          display: inline-block;
          font-size: 20px;
      
    }
    h1 {color: white;
          position: absolute;
          left:490px; top:500px;
       
    }
    a {color: black;
          border: 3px Solid peru;
          background: darkgray;
          position: relative;
          left:470px; top:400px;
       
    }

    p {color: white;
          position: absolute;
          left:260px; top:60px;
          font-size: 50px;
          font-family: Bradley Hand, cursive;

     }

     h2 {
          position: absolute;
          left:580px; top:439px;
          font-size: 20px;
          color: black;
          border: 3px Solid peru;
          background: darkgray;
          position: relative; 
          padding: 2px;  
          width: 70px;
         
     }

     .logoss{
          position: absolute;
          left:0px; top:0px;
     }

     .logo {
          position: absolute;
          left:495px; top:150px;
     }


    
    </style>
<body>
    <h2> Profile </h2>
    <p>WELCOME TO MY PROFILE PAGE</p>
    <h1><i> Kenn C. Secusana </i> </h1>
    <a href="{{url('/')}}">Home</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="{{url('/course')}}">  Course
</body>
</html>