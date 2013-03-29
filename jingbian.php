<?php 

$ori="http://tech.ifeng.com/it/detail_2012_07/30/16402319_0.shtml
传三星正打造比Retina更好的显示器 像素密度达350ppi";



if($_POST["txt"] !=""){

		
                
               
    $txt=array_values(array_filter(preg_split('/\r\n/', $_POST["txt"])));
 
    
    
  $i=0;
  

    
  while($i<count($txt)){
    
   
  $str=$str . '<p><a target="_blank" href="' . $txt[$i] . '">' . $txt[$i+1] . '</a></p>'."\n";
  
  
  $i=$i+2;

   
   
   
  }
                
}

else
	{  
        	$str=$ori;

        
        }









?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>精编工具</title>



</head>

<body>


  <div style="width:980px;margin:10px auto;">

   精编工具- 标题URL 转 HTML 
<center>



<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


<p>
<textarea name="txt" id="txt" cols="50" rows="20"><?php echo($str); ?></textarea>
</p>



<input type="submit" value="转换" />


</form>

</center>
<hr />

  <p align="right"> &copy; JiaFeiX <a href="https://github.com/JiaFeiX/JiaFeiX" target="_blank">Open Code</a>  </p>



  </div>
</body>
</html>



