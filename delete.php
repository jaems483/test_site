<style>
*{
    margin: 0px; padding: 0px;
}
table, th, td {
  border: 5px solid white;
  color:black;
  font-size:20px;
  font-family: 'impact' ;
  background: linear-gradient(to left, #fdbb2d, #2bc1bd );

}
table{
	
	position:absolute;
	left:500px;
	width:300px;
	top:250px;
    height: 60px;
    padding:10px;

}
body{
	background: linear-gradient(to top, #33ccff, #ffff99 );
    font-family: 'Josefin Sans', sans-serif;
	height: 60vw;
    background-repeat: no-repeat;
}
button{
	background: linear-gradient(#F4DCC1 , #F6EDDD,#C7E4CC , #B0D2C7);
}
.container{
    background: linear-gradient(to left, #33cc, #ffff );
    width: auto;
    height: 11%;
}
.home{
            color: white;
            text-shadow: 1px 2px 5px black;
            border-bottom: 2px solid white;
            font-size: 1.2em;
            float:right;
            margin-left:10px;
            margin-top:-2%;
            margin-right: 20%;
            text-decoration: none; 
}

.about{
     font-size: 1.2em;
            color: white;
            text-shadow: 2px 2px 5px black;
            border-bottom: 2px solid white;
            list-style: none;
            font-style: unthrough;
            float:right;
            margin-right: 13%;
            margin-top:-2%;
            text-decoration: none; 

}
.bsit{
    color: black;
    text-shadow: 2px 2px 2px white;
    width: 9%;
    margin-left: 150px;
    margin-bottom:20px;



}
.team{

    color: black;
    text-align: center;
    text-shadow: 2px 2px 2px white;
    width: 35%;
    margin-left: 10px;
    margin-top:-10px;
}
.choose-message{
    color: black;
    text-shadow: 1px 2px 0px white;
    position: absolute;
    top: 30%;
    left: 36%;
}
#selectors{
             width:15em;
             top: 50%;
             left: -30px;
         }
.btn-delete{
    
            color: black;
             text-shadow: 1px 2px 0px white;
             font-weight: bold;
             font-family: verdana, sans-serif; 
             width: 90px;
             margin-right: 30%;
             height: 30px;
         
}

</style>
<head>
    <title>Delete</title>
</head>
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



        <?php
        $xml = new DOMDocument;
        $xml->load('cict.xml');
        $x = $xml->getElementsByTagName('Students')->item(0);
        $fr = $x->getElementsByTagName('student');
        $i=0;
        if(isset($_POST['submit']))
        {
            $Id = $_POST['name'];

            foreach($fr as $nd)
            {
               if($nd->getElementsByTagName('name')->item(0)->nodeValue == $Id)
               {
                   echo  "<script> alert('Account ID Deleted...')</script>";
                   break;
               }
               $i++;
           }
           $rm = $fr->item($i);
           $cho = $x->removeChild($rm);
           
           $xml->save("cict.xml");

       }


       ?>

       <h2 class="choose-message">Choose Name want to delete:</h2>
       <form method="POST">
           <table>
           <tr>
            <td>
                <select name="name" onchange="showData(this.value)" id="selectors">
                <option value="">LIST OF NAMES:</option>
                <?php 
                        $num=0;
                        $xml = simplexml_load_file("cict.xml");
                        foreach ($xml as $xml) {
                        $num=$num+1;
                                    }
                        $xmls = simplexml_load_file("cict.xml");
                        for($x=0; $x<$num; $x++){?>
                        <option value="<?php echo $xmls->student[$x]->name; ?>"><?php echo $xmls->student[$x]->name; ?></option>
                        <?php } ?>
                </select>
            </td>
            <td>
            <button type="submit" name="submit" class="btn-delete">Delete</button>
            </td>
            </tr>
        </form>
    </body>
    </html>
