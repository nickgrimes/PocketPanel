<?

class NavBar
{
	public function displayNavBar($category)
	{
		$navcategory = array("Dashboard" => "/index.php", "Players" => "/players.php", "Plugins" => "#", "Worlds" => "#", "Admin" => "#");
		
		foreach($navcategory as $navcat => $pagelink)
		{
			if(strtolower($navcat) == $category)
			{
				echo "<li class='active'><a href='$pagelink'>$navcat</a></li>";
			}
			else
			{
				echo "<li><a href='$pagelink'>$navcat</a></li>";
			}
		}
        }
}
