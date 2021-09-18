<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{">
    <title>Prelim Project</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
</head>

       <div class="logoss">

          <img src="{{url('images/image5.jpg')}}" width="1280" height="609" alt=""/>

     </div>

     <div class="logo">

         <img src="{{url('images/image18.png')}}" width="300" height="300" alt=""/>
     
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
          left:510px; top:310px;
          font-weight: bold;
     }
    
     a {color: black;
          border: 3px Solid peru;
          background: darkgray;
          position: relative;   
          left:575px; top:400px;
          
     }

     p {color: white;
          position: absolute;
          left:290px; top:60px;
          font-size: 50px;
          font-family: Bradley Hand, cursive;
          
         
     }

     h2 {
          position: absolute;
          left:460px; top:439px;
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
    <h2> Home</h2>
    <p>WELCOME TO MY HOME PAGE</p>
    <h1><i> Prelim Project </i></h1>
   <a href="{{url('/profile')}}"> Profile </a>&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp <a href="{{url('/course')}}"> Course
  
</body>
</html>