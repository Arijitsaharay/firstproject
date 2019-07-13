<?php include_once('header.php');?>
	
	<div class="container">
        <div class="row">
        	<div class="span6">
        		<h2 class="title"><strong>THE VOLUME OF ACID</strong></h2>
        		
        		<form action="" method="post">
                  <div class="row controls">
                    <div class="span3 control-group">
                      <label>Enter the strength of the acid in normality:-</label>
                      <input type="text"  name="num1"  maxlength="100" class="span3">
                    </div>
                    <br><br><br><br><br>
                    <div class="span3 control-group">
                      <label>Enter the strength of the base in normality :-</label>
                      <input type="text"  name="num2" maxlength="100" class="span3">
                    </div>
                    <br><br><br><br><br>
                    <div class="span3 control-group">
                      <label>Enter the volume of the base in ml:- </label>
                      <input type="text"  name="num3" maxlength="100" class="span3">
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
  $num3=$_POST['num3'];
  $num4=$num2*$num3;

  echo "The volume of acid is:-" .number_format($num4/$num1,4)."ml";
}

?></h4>


        	</div>
        	</div>
       	</div>
    </div>


<?php include_once('footer.php');?>
