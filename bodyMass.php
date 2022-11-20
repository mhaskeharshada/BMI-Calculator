<!DOCTYPE html>
<html>
<head>
    <style>
               .demo{
                background-color:CYAN;
                height:100%;
                width:100%;
                margin-top:150px;
               }
               body{
                background-color:hsla(240,100%,50%,0.3);
                background-image:url('BMI_img.jpg');
                height:600px;
                width:100%;
                float:left;
                background-size:100% 100%;
               }
        </style>
</head>
<body style=" background-color:CYAN;">

<div class ="demo">
      <center>
        <h1 style=" color:red"><i> Welcome To BMI Calculator </i></h1></br></br>
       
        <form action="bodyMass.php" method ="POST">
        <h3>Enter Height <input type ="text" name ="N1"></h3><br>
          <h3>Enter weight <input type ="text" name ="N2"> </h3> <br>
         
       <h3>  Please select your Gender first </h3>
         
           <h3>female <input type="radio" name="option" value="1" >
           male <input type="radio" name="option" value="2" ></h3>
          
           
          <h4><button type = "submit"> <h3> Submit </h3></button>
            <button type = "reset"> <h3> Reset </h3></button> </h4>



            <?php 
                   $a = $_POST['N1'];
                   $b = $_POST['N2']; 
                   $option = $_POST['option'];
                   switch($option)
                   {
                    case 1: Female($a,$b);
                           break;
                    case 2: Male($a,$b);
                            break;
                   }
                 function Female($a,$b)
                 {
                   $height = $a/100;
                   if($height==0)
                   {
                    $bmi=0;
                   }
                   else{
                   $bmi = $b/($height*$height);
                  echo "<h3>" ;
                  echo " Your BMI is :";
                   echo $bmi;
                   echo "<br>";
                   if($bmi<16.8)
                   {
                    echo "Your are underweight";

                   }
                   elseif($bmi<=22.2 and $bmi>=16.8)
                   {
                    echo " Your weight is normal";
                   }
                   else{
                    echo "Your are overWeight";
                   }
                   echo"</h3>";
                  }
                    }

                  function Male ($a,$b)
                  {
                   $height = $a/100;
                   if($height==0)
                   {
                    $bmi=0;
                   }
                   else
                   {
                   $bmi = $b/($height*$height);
                  echo "<h3>" ;
                  echo " Your BMI is :";
                   echo $bmi;
                   echo"<br>";
                   if($bmi<18.5)
                   {
                    echo "Your are underweight";
                   }
                   elseif($bmi>=18.5 and $bmi<=25)
                   {
                    echo " Your weigth is Normal";
                   }
                   else{
                    echo "Your are Overweight";
                   }
                   echo"</h3>";

                    }
                  }
                   
            ?>
</form>
</center>
</div>
                  
</body>
    </html>
