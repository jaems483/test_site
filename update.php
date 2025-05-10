<html>
<head>
    <title>SEARCH DATA</title>
<script>
function showData(str) {
  if (str=="") {
    document.getElementById("a").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("a").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getinfo.php?q="+str,true);
  xmlhttp.send();
}
</script>

<style>
    *{
        padding:0px;
        margin:0px;
    }
    body{
  background: linear-gradient(to right, #33cc, #ffff );
  font-family: 'Josefin Sans', sans-serif;
}
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
            border-bottom: 2px solid lime;
            list-style: none;
            font-style: unthrough;
            float:right;
            margin-left:10px;
            margin-top:-2%;
            margin-right: 15%;
            text-decoration: none; 

        }
        .bsit{
            color: white;
            text-shadow: 2px 2px 2px black;
            width: 9%;
            margin-left: 150px;
            margin-bottom:10px;
           

            
        }
         .members{
            
            color: white;
            text-align: center;
            text-shadow: 2px 2px 2px black;
            width: 28%;
            margin-left: 10px;
             margin-bottom: 10px;
            margin-top:10px;
         }
         .container-info{
             
             width: 20%; height: 10%;
             position: absolute;
             left: 45%;
             top: 20%;
         }
         #a{
             position: absolute;
             left: 40%;
             top: 45%;
         
         }
         .info-detail{
            color: green;
             
           margin-top: 30px;
             margin-right: 30px;
             
             
         }
         .select-acc{
              color: green;
             text-shadow: 1px 1px 1px white;
            text-transform: uppercase;
             position: absolute;
             width: 500px;
             top: 90%;
             left: -160px;
             
         }
         #selectors{
             width:15em;
             position:absolute;
             top: 150%;
             left: -30px;
         }


</style>
</head>
<body>
<div class="container">
        <nav>
            <h3 class="bsit"><em>BSIT 3L-G1</em></h3>
            <h1 class="members">ANTHONY-KHENARD-EUGENE-CINDY-JANINA-KENNETH</h1>
            <a href= "index.php" class="home">HOME</a>   
        </nav>
    </div>
<div class="container-info">
<form>
<h3 class="select-acc">Select Account to Display Information:</h3>
<select name="cds" onchange="showData(this.value)" id="selectors">
  <option value="">Names:</option>
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
</form>
</div>
<div id="a"><b class="info-detail">Account information will be listed here...</b></div>



</body>
</html>