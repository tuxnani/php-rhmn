<?php
  
function list_files($dir)
{
    if(is_dir($dir))
    {
        if($handle = opendir($dir))
        {
            while(($file = readdir($handle)) !== false)
            {
                if($file != "." &amp;&amp; $file != ".." &amp;&amp; $file != "Thumbs.db"/*pesky windows, images..*/)
                {
                    echo '<a target="_blank" href="'.$dir.$file.'">'.$file.'</a><br>'."\n";
                }
            }
            closedir($handle);
        }
    }
}
 
/*
To use:
  
<?php
    list_files("images/");
?>
*/
?>
