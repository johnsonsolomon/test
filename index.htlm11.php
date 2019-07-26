<!DOCTYPE html>
<htlm>
<head>
    <title>Search engine for my web</title>
<body style="background-color: gray">
        <form action="" method="POST">
                <h1>Search:
                <input type="text" name="search_entered" value='hosanna'/><br>
                <input type="submit" name="submit" value="Search"/></h1><br>
                </form>
                <!-- The Contact Section -->
                <?php $htmlString= 'testing'; ?>
                <script type="text/javascript">  
                  // notice the quotes around the ?php tag         
                  var htmlString="<?Do you wish to continue with this site; ?>";
                  alert(htmlString);
                </script>
                <?php

                $search= $_POST['search_entered'];
                
                $searchoriginal= $search;
                
                $search= strtolower($search);
                
                $search= trim($search);
                
                
                
                $search= explode(" ", $search);
                
                $countsearchterms= count($search);
                
                $submitbutton= $_POST['submit'];
                
                ?>
                <?php

                $directory = "Articles/";
                
                
                if ($submitbutton){
                if (!empty($searchoriginal)) 
                {
                if (is_dir($directory)){
                
                  if ($open = opendir($directory)){
                if ($countsearchterms == 4)
                {
                    while (($file = readdir($open)) !== false){
                    $fileoriginal= $file;
                    $file= strtolower($file);
                    $file= str_replace("-", " ", $file);
                    $file= str_replace("_", " ", $file);
                    $position= strpos("$file", ".");
                    $file= substr($file, 0, $position);
                    
                      if (strpos("$file",  "$search[0]") !== false)
                    {
                    $file= ucwords($file);
                    $array[] += "$file";
                     echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
                }
                 
                    
                    }
                }
                else if ($countsearchterms == 2) {
                while (($file = readdir($open)) !== false){
                $fileoriginal= $file;
                    $file= strtolower($file);
                    $file= str_replace("-", " ", $file);
                    $position= strpos("$file", ".");
                    $file= substr($file, 0, $position);
                      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false))
                    {
                    $file= ucwords($file);
                    $array[] += "$file";
                     echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
                }
                 
                    
                    }
                    
                
                }
                
                else if ($countsearchterms == 3) {
                while (($file = readdir($open)) !== false){
                $fileoriginal= $file;
                    $file= strtolower($file);
                    $file= str_replace("-", " ", $file);
                    $position= strpos("$file", ".");
                    $file= substr($file, 0, $position);
                      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false))
                    {
                    $file= ucwords($file);
                    $array[] += "$file";
                     echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
                }
                 
                    
                    }
                    
                
                }
                
                else if ($countsearchterms == 4) {
                while (($file = readdir($open)) !== false){
                $fileoriginal= $file;
                    $file= strtolower($file);
                    $file= str_replace("-", " ", $file);
                    $position= strpos("$file", ".");
                    $file= substr($file, 0, $position);
                      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false))
                    {
                    $file= ucwords($file);
                    $array[] += "$file";
                     echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
                }
                 
                    
                    }
                    
                
                }
                
                else if ($countsearchterms == 5) {
                while (($file = readdir($open)) !== false){
                $fileoriginal= $file;
                    $file= strtolower($file);
                    $file= str_replace("-", " ", $file);
                    $position= strpos("$file", ".");
                    $file= substr($file, 0, $position);
                      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
                && (strpos("$file",  "$search[4]") !== false))
                    {
                    $file= ucwords($file);
                    $array[] += "$file";
                     echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
                }
                }  
                }
                else if ($countsearchterms == 6) {
                while (($file = readdir($open)) !== false){
                $fileoriginal= $file;
                    $file= strtolower($file);
                    $file= str_replace("-", " ", $file);
                    $position= strpos("$file", ".");
                    $file= substr($file, 0, $position);
                      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
                && (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false))
                    {
                    $file= ucwords($file);
                    $array[] += "$file";
                     echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
                }
                }  
                }
                else if ($countsearchterms == 7) {
                while (($file = readdir($open)) !== false){
                $fileoriginal= $file;
                    $file= strtolower($file);
                    $file= str_replace("-", " ", $file);
                    $position= strpos("$file", ".");
                    $file= substr($file, 0, $position);
                      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
                && (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false) && (strpos("$file",  "$search[6]") !== false))
                    {
                    $file= ucwords($file);
                    $array[] += "$file";
                     echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
                }
                }  
                }
                closedir($open);
                    }
                
                  }//while loop
                
                $arraycount= count($array);
                
                if ($arraycount == 0)
                {
                echo "No results for this search entered";
                }
                }
                }
                ?>
                
                <?php
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
?>
<html>
<head>
<title>Personal INFO</title>
</head>
<body>
<form method="post" action="<?php echo $PHP_SELF;?>">
First Name:<input type="text" size="12" maxlength="12" name="Fname"><br />
Last Name:<input type="text" size="12" maxlength="36" name="Lname"><br /></form>
<?
echo "Hello, ".$Fname." ".$Lname.".<br />";
?>   
</body>
</head>
</htlm>