<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">

<?
  //Simple CMS
  //Extremely Simple CMS system
  //Andy Harris for PHP/MySQL Adv. Beg 2nd Ed.

  if (empty($menu)){
    $menu = "menu.html";
  } // end if

  if (empty($content)){
    $content = "default.html";
  } // end if

  include ("menuLeft.css");
  include ("top.html");

  print "<span class = \"menuPanel\"> \n";
  include ($menu);
  print "</span> \n";

  print "<span class = \"item\"> \n";
  include ($content);
  print "</span> \n";

?>


</body>
</html>




