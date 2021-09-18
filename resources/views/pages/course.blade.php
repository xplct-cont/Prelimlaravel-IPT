<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{">
    <title>Prelim Project | Profile | Course</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>

     <div class="logoss">

           <img src="{{url('images/image9.png')}}" width="1280" height="609" alt=""/>

   </div>

   <div class="logo">

           <img src="{{url('images/image76.png')}}" width="800" height="550" alt=""/>

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
          left:400px; top:250px;
          font-weight: bold;
       
    }
    a {color: black;
          border: 3px Solid peru;
          background: darkgray;
          position: relative;
          left:460px; top:400px;
          
       
    }

    p {color: white;
          position: absolute;
          left:260px; top:60px;
          font-size: 50px;
          font-family: Bradley Hand, cursive;

     }

     h2 {
          position: absolute;
          left:575px; top:439px;
          font-size: 20px;
          color: black;
          border: 3px Solid peru;
          background: darkgray;
          position: relative; 
          padding: 2px;  
          width: 73px;
     }

     .logoss {
          position: absolute;
          left:0px; top:0px;
     }

     .logo {
          position: absolute;
          left:230px; top:20px;
     }


    
    </style>

<body>
    <h2> Course </h2>
    <p>WELCOME TO MY COURSE PAGE</p>
    <h1><i> Bachelor of Science </br> in  </br> Information Technology </h1></i>
    <a href="{{url('/')}}">Home</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="{{url('/profile')}}">  Profile
</body>
</html>