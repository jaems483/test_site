
<style>
*{
    margin:0px; padding:0px;
}

table, th, td {
  border: 5px  Solid White;
  color:black;
  font-size:20px;
  font-family: 'impact' ;
  background: linear-gradient(to left, #fdbb2d, #2bc1bd );
}
table{
	
	position:absolute;
	left: 35%;
	width:390px;
	top:30%;

}
body{
	background: linear-gradient(to bottom, #33ccff, #ffff99 );
    font-family: 'Josefin Sans', sans-serif;
	background-size:2500px;
}
button{
	background: linear-gradient(to top, #33ccff, #ffff99 );
}
.head{
    color:black;
    text-shadow: 2px 2px 2px white;
    position:absolute;
    left:38%;
    top: 20%;
}
#btn-add{
    width:auto;
    margin-left: 30px;
}

.container{
            background: linear-gradient(to left, #33cc, #ffff );
            width: auto;
            height: 15%;
        }
         .home{
             color: black;
            text-shadow: 2px 2px 2px white;
            border-bottom: 2px solid black;
            font-size: 1.2em;
            float:right;
            margin-left:10px;
            margin-top:-2%;
            margin-right: 20%;
            text-decoration: none; 
        }
        
        .about{
            font-size: 1.2em;
            color: black;
            text-shadow: 2px 2px 2px white;
            border-bottom: 2px solid black;
            list-style: none;
            font-style: unthrough;
            float:right;
            margin-left:10px;
            margin-top:-2%;
            margin-right: 13%;
            text-decoration: none; 

        }
        .bsit{
            color: Black;
            text-shadow: 2px 2px 2px white;
            width: 9%;
            margin-left: 150px;
            margin-bottom:10px;
           

            
        }
         .team{
            
            color: black;
            text-align: center;
            text-shadow: 2px 2px 2px white;
            width: 28%;
            margin-left: 10px;
            margin-top:10px;
         }

         /* BUTTON */
         .btn-add{
             color: black;
             text-shadow: 1px 2px 0px white;
             font-weight: bold;
             font-family: verdana, sans-serif;
             float: right; 
             cursor: pointer;
             width: 90px;
             margin-right: 15%;
             height: 30px;
         }
         .btn-view{
            color: black;
             text-shadow: 1px 2px 0px white;
             font-weight: bold;
             text-decoration: none;
             float: right;
             height:25px;
             
         }
         .btn-View{
            color: black;
             text-shadow: 1px 2px 0px white;
             margin-right: 0%;
            width: 100%;
            text-decoration: none;      
         }
        

</style>
<head>
    <title>ADD DATA</title>
</head>



<?php
if (isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $course=$_POST['course'];
   
    $xml = new DOMDocument;
    
$xml->load('cict.xml');
$newStudent = $xml->createElement('student');
$newStudent->appendChild($xml->createElement('id',$id));
$newStudent->appendChild($xml->createElement('name', $name));
$newStudent->appendChild($xml->createElement('course', $course));




$xml->getElementsByTagName('Students')->item(0)->appendChild($newStudent);
$test = $xml->save("cict.xml");
if ($test){
    echo  "<script> alert('Record added...')</script>";
    
}
}
?>
<html>

    <body>
	<div>
        <div class="container">
            <nav>
                <h3 class="bsit"><em>BSIT 3L-G1</em></h3>
                <h1 class="team">ANTHONY-KHENARD-EUGENE-CINDY-JANINA-KENNETH</h1>
                <a href= "aboutus.html" class="about">ABOUT</a>
                <a href= "index.php" class="home">HOME</a>   
            </nav>
        </div>


<h1 class="head">ADD NEW STUDENT</h1>
<form method="POST">
        <table cellpadding="3  " cellspacing="2">
        
            <tr>
                <td>Id: </td>
                <td><input type="number" name="id" required></td>
            </tr>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                 <td>Course: </td>
                <td><input type="text" name="course" required></td>
               
            
            <form method='POST' enctype='multipart/form-data'>
              
                <tr>
                <td><button type='submit' value='submit' name='submit' class="btn-add">ADD</button></td>
                <td><button class="btn-View"><a href="index.php" class="btn-view">VIEW DATA</a></button></td>
                </tr>
            </form>    
        </table>
    </form>
    </body>
</html>
