<?php
if('POST' == $_SERVER['REQUEST_METHOD']){
    print "Hello,".$_POST['my_name'];
}else{
$page_header = <<<__HTML__
<form method = "POST" action = "$_SERVER[PHP_SELF]">
yourname:<input type="text" name="my_name">
<br>
<input type="submit" value="Say Hello">
</form>
__HTML__;
echo $page_header;
}
