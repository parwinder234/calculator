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
}
</style>
</head>
<body>
    <div id="container4">
        <div id="sub-container">
       
<h1> <img src="computer.png" id="img1">&nbsp;&nbsp;&nbsp;ABC Computer Institute</h1>

<a href="home.php">Home</a>
<a href="courses.php">Course</a>
<a href="enquiry.php">Enquiry</a>
<a href="contact.php">Contact</a>
    </div>
    <div id="sub3">
    <h2 id="h6">Contact us</h2>
    If you have any query regarding courses,fees or addmission, contact us.<br>
    <b>Institute Address</b> <br>
    ABC COMPUTER INSTITUTE,Main Road,Your City,Rajasthan<br>
   <b> Phone number</b><br>
    +91 9976543210<br>
    <b>Email Address</b> <br>
    info@abccomputer.com
    </div>
   <h2 id="h7">Send Message</h2> 
    <div id="form2">
       <form method="post" action="contact2.php">
       <label for="n1" >Name:</label><br>
   <input type="text" name="n1" id="n1" placeholder="Enter your name"/><br>
   <label for="n2" >Email:</label><br>
   <input type="text" name="n2" id="n2" placeholder="Enter your Email"/><br>
   <label for="n3" >Subject:</label><br>
   <input type="text" name="n3" id="n3" placeholder="Enter Subject"/><br>
    <label for="n4" >Message:</label><br>
    <textarea id="n4" placeholder="Enter your Message" name="n4"></textarea><br>
    <button id="btn4">Send Message</button>
</form>
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