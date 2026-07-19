<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="institute.css">
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
#sub-container{
    display:flex;
    align-items: center;
    justify-content:space-around;
    background-color: rgb(52, 52, 138);
    height: 100px;
    color: white;
    width:100%;
}
#img1{
    height:70px;
    width: 70px;

}

a{
    text-decoration: none;
    color: white;
}
a:hover{
    color:green;
    background-color: white;
    border-radius: 2px;
}
#sub1-container{
    margin-top:40px;
    
    text-align: center;
    
}
#img2{
    border: 2px solid rgb(52, 52, 138);
     width:500px;
    height: 300px;
    border-radius:20px;
    box-shadow: 0 0 5px blue;
}
#sub2-container{
    margin-top: 30px;
    text-align: center;
}
h2{
    color:rgb(52, 52, 138);
}
#btn1{
    background-color: rgb(52, 52, 138);
    color: white;
    height:30px;
    width:80px;
}
#btn1:hover{
    background-color: blue;
}
#sub3-container{
    text-align: center;
    margin-top:50px;
}
#h1{
    color: rgb(52, 52, 138);

}
#img3{
    width:500px;
    height:400px;
    border: 2px solid rgb(52, 52, 138);
    border-radius: 50px;
    box-shadow: 0 0 5px blue;
    margin-top: 40px;
}
#sub4-container{
   display: flex;
   align-items: center;
   justify-content: space-around;
   margin-top: 40px;
   
}
#h2{
    color:rgb(52, 52, 138);
 text-align: center;
 margin-bottom: 20px;
 margin-top:40px;
}
 
.a{
    height:200px;
    width:250px;
    border: 2px solid rgb(52, 52, 138);
    border-radius:30px;
    box-shadow: 0 0 5px blue;

}
#sub{
    text-align: center;
    margin-top:50px;
}
.b{
   margin-top:20px ;
    background-color: rgb(195, 220, 220);
    height:40px;
    width:30%;
    align-self: center;
    margin-left:450px;
    padding: 6px;
    }
    #h3{
        color:rgb(52, 52, 138) ;
    }
    .b:hover{
        background-color: gray;
    }
    #h{
        text-align: center;
        margin-top:40px;
    }
    #p1{
        text-align: center;
        margin-top: 30px;
    }
    #sub1{
        text-align: center;
        margin-top: 30px;
        width: 100%;
        background-color: black;
        color: white;
        padding: 20px;
    }
    #h4
    {
       text-align: center;
       margin-top: 40px;
        color:rgb(52, 52, 138) ;
    }
    #p2{
       text-align: center;  
       margin-top:30px;
    }
    .img4{
        height:150px;
        width: 245px;
        border-radius: 10px;
    }
    .d1{
        height:300px;
        width: 250px;
        border: 2px solid rgb(52, 52, 138);
        text-align: center ;
        display:inline-block;
        justify-content: center;
        margin-left:500px ;
        margin-top:20px;
       line-height:25px;
         box-shadow: 0 0 5px blue;
         border-radius: 10px;
    }
    #btn2{
            margin-top: 10px;
            background-color: rgb(119, 119, 177);
            color: white;
            width: 90px;
            height:30px;
    }
#btn2:hover{
    background-color:rgba(6, 6, 210, 0.751);
}
#h5{
    
    text-align: center;
    margin-top: 30px;
    margin-bottom:40px;
}
#form{
    
    width:300px;
    padding:20px;
    box-shadow: 0 0 2px  rgb(193, 130, 12) ;
    text-align: center;
    margin-top: 20px;
    margin-left:500px;
    height:520px;
    margin-bottom: 30px;
    
}
input{
 margin-top:10px;
 width:250px;
 margin-bottom: 10px;
}
select{
    margin-top: 10px;
    width:250px;
     margin-bottom: 10px;
}
textarea{
    margin-top: 10px;
    width:250px;
     margin-bottom: 10px;
     font-family: Verdana, Geneva, Tahoma, sans-serif;
}
#btn3{
    margin-top: 10px;
    margin-bottom:40px;
    background-color: blue;
    color: white;
    

}
#btn3:hover{
    background-color: blueviolet;
}
button{
    cursor: pointer;
}
#h6{
    
    margin-bottom: 20px;
    margin-top: 20px;
    
}
#sub3{
    text-align: center;
    height: 100px;
    width:500px;
    margin-left:370px;
}
#form2{
    height:350px;
    width:400px;
    border: 2px solid rgb(187, 160, 109);
    box-shadow: 0 0 2px rgb(161, 249, 7);
    text-align: center;
    margin-top:50px;
    margin-left:430px;
    padding:20px;
   
}
#h7{
    text-align: center;
    margin-top:100px;
}
#btn4{
    background-color:blue;
    margin-top: 20px;

}
#btn4:hover{
background-color:blueviolet
}</style>

</head>
<body>
    <div id="container1">
        <div id="sub-container">
       
<h1> <img src="computer.png" id="img1">&nbsp;&nbsp;&nbsp;ABC Computer Institute</h1>

<a href="home.php">Home</a>
<a href="course.php">Course</a>
<a href="enquiry.php">Enquiry</a>
<a href="contact.php">Contact</a>
    </div>
    <h1 id="h4">Our Computer Course</h1>
    <p id="p2">Choose the best computer course according to your career goals.</p>
    <div class="d1">
        <img src="dca.jpg" class="img4"><br><br>
       <p> Duration 6 Month
        Learn MS Office, internet,computer Basic and more</p>
        <a href="enquiry.php"><button id="btn2">Apply Now</button></a>
</div>
<div class="d1">
    <img src="adca.jpg" class="img4"><br>
    <p>Duration 12 Month Learn Advance computer application and software </p>
     <a href="enquiry.php"><button id="btn2">Apply Now</button></a>
</div>
<div class="d1">
    <img src="gst.jpg" class="img4"><br>
    <p>Tally Prime  +  GST <br> Learn Accounting ,Billing and GST</p>
    <a href="enquiry.php"><button id="btn2">Apply Now</button></a>
</div>
<div class="d1">
    <img src="webd.jpg" class="img4"><br>

    <p>Web Development<br> Learn HTML ,CSS, Javascript and Basic  PHP </p>
    <a href="enquiry.php"><button id="btn2">Apply Now</button></a>
</div>
<div id="sub1">
        ABC Computer Institute<br>
        Address:Your Institute Address<br>
        Phone:9876543210<br>
        Email:info@abccomputer.computer<br>
        2026 ABC Computer Institute
    </div>
    </div>
</body>
</html>