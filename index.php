<style>
*{
		margin:0px;
		padding: 0px;
	}
table, th, td {
  border: 3px solid white;
  color:Black;
  text-shadow: 2px 2px 2px grey;
  font-size:20px;
  font-family: 'impact' ;
  background: linear-gradient(#008080 , #1223);
  
}
table{
	
	position:absolute;
	left:25%;
	width:50%;
	top:30%;

}
body{
	background: linear-gradient(to top, #33ccff, #ffff99 );
    font-family: 'Josefin Sans', sans-serif;
	background-size:2500px;
}
button{
	background: linear-gradient(#F4DCC1 , #F6EDDD,#C7E4CC , #B0D2C7);
}
.head{
	color:black;
	text-shadow: 2px 2px 2px white;
	text-align: center;
	margin-top: 50px;
	
}
/* BANNER */

.container{
    background: linear-gradient(to right, #33cc, #ffff );
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
            margin-right: 13%;
            margin-top:-2%;
            text-decoration: none; 

        }
        .bsit{
            color: white;
            text-shadow: 3px 3px 3px black;
         
            width: 9%;
            margin-left: 150px;
            margin-bottom:20px;
           

            
        }
         .team{
            
            color: white;
            text-align: center;
            text-shadow: 3px 3px 3px black;
            width: 28%;
            margin-left: 10px;
            margin-top:-10px;
         }
         .btn-add{

             color: black;
             text-shadow: 1px 2px 0px white;
             font-weight: bold;
             font-family: verdana, sans-serif;
             float: right; 
             cursor: pointer;
             width: 90px;
             margin-right: 19%;
             height: 35px;
            
          
         }
         .btn-search{
             color: black;
             text-shadow: 1px 2px 0px white;
             font-weight: bold;
             font-family: verdana, sans-serif;
             float: right;
             cursor: pointer;
             width: 150px;
             margin-right: 18%;
             height: 35px;
         }

         .btn-del{
            color: black;
             text-shadow: 1px 2px 0px white;
             font-weight: bold;
             font-family: verdana, sans-serif;
             float: right; 
             width: 100px;
             margin-right: 30%;
             height: 35px;
         }
         .header-name{
             color: black;
             text-shadow: 2px 2px 3px white;
             text-align: center;
            
         }
         .user-data{
            color: white;
            font-family: sans-serif;
            text-shadow: 2px 3px 5px black;
             text-align: center;
         }
</style>
<head>
    <title>HOME</title>
</head>

<html>
	<body>
	<div>
        <div class="container">
            <nav>
            
                <h3 class="bsit"><em>BSIT 3L-G1 </em></h3>
                <h1 class="team">ANTHONY-KHENARD-EUGENE-CINDY-JANINA-KENNETH</h1>
                <a href= "aboutus.html" class="about">ABOUT</a>
                <a href= "index.php" class="home">HOME</a>  
            </nav>
        </div>


<table>
	<h2 class="head">LIST OF DATA</h2>
<tr>
	<td class="header-name">ID</td>
	<td class="header-name">Name</td>
	<td class="header-name">Course</td>
</tr>
<?php
$xml = new DOMDocument;
$xml->load('cict.xml');
$x = $xml->getElementsByTagName('Students')->item(0);
$fr = $x->getElementsByTagName('student');
$i=0;
$tf=0;


foreach($fr as $stud)
{
	

	$Id= $stud->getElementsByTagName('id')->item(0)->nodeValue;
	$Name = $stud->getElementsByTagName('name')->item(0)->nodeValue;
	$course = $stud->getElementsByTagName('course')->item(0)->nodeValue;
	
?>
<tr>
	<td class="user-data"><?php echo $Id ?></td>
	<td class="user-data"><?php echo $Name ?></td>
	<td class="user-data"><?php echo $course ?></td>
</tr>
<?php 
}?>


<td><button onclick="location.href='add.php'" class="btn-add">ADD NEW</button></td>
<td><button onclick="location.href='delete.php'" class="btn-del">DELETE</button></td>
<td><button onclick="location.href='update.php'" class="btn-search">SEARCH DATA</button></td>


</table>
</body>
</html>