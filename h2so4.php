<?php include_once('header.php');?>
	
	<div class="container">
        <div class="row">
        	<div class="span6">
        		<h2 class="title"><strong>SULPHURIC ACID</strong></h2>
        		
        		<form action="" method="post">
                  <div class="row controls">
                    <div class="span3 control-group">
                      <label>Enter the volume of the mixture you want to produce in ml:- </label>
                      <input type="text"  name="num1"  maxlength="100" class="span3">
                    </div>
                    <br><br><br><br><br>
                    <div class="span3 control-group">
                      <label>Enter the strength of your required solution in normality:-  </label>
                      <input type="text"  name="num2" maxlength="100" class="span3">
                    </div>
                    <br><br><br><br><br>
                  </div>
                  <div class="btn-toolbar">
                    <input type="submit" name="submit"  value="Calculate" ><br><br><br>


                  </div>
              </form>
        	</div>
        	<div class="span6">
        		<h2><strong>Result</strong></h2	>
<h4>        	
 <?php

if(isset($_POST['submit']))
{
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $num3=36.00;
    $num4=$num2*$num1;
    $num5=$num4/$num3;

     echo "The amount of acid is:-  ".number_format($num5,4)."ml <br><br> The amount of water you have to give to make the required solution is:-  ".number_format($num1-$num5,4)."ml";
}

?><br>
</h4>

        	</div>
        	</div>
       	</div>
    </div>


<?php include_once('footer.php');?>
