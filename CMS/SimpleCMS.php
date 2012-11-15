<!DOCTYPE html>
<html>
	<?
	extract($_GET);
	  if (empty($menu)){
		$menu = "menu.html";
	  }
	  if (empty($content)){
		$content = "default.html";
	  }
	  if (empty($right)){
		$right = "rightPanel.html";
	  }
	  if (empty($top)){
		$top = "topOfPage.html";
	  }
	  include ("menuLeft.css");
	  print "<span class = \"topOfPage\"> \n";
	  include ("topOfPage.html");
	  print "</span> \n";
	  print "<span class = \"menuPanel\"> \n";
	  include ($menu);
	  print "</span> \n";
	  print "<span class = \"rightPanel\"> \n";
	  include ($right);
	  print "</span> \n";
	  print "<span class = \"item\"> \n";
	  include ($content);
	  print "</span> \n";
	?>
	</body>
</html>
