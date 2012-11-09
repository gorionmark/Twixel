<?php
/*------------
*
* Searchform
*
--------------*/
?>

<form method="post" action="individualProduct.php"  id="searchform">
      <input type="search" class="search" name="search" placeholder="Search..." />
</form>

<?php
	
	if(isset($_POST['search']))
	{ 
		$search=$_POST['search'];

		if(preg_match("/^[A-Z0-9|a-z]+/",$search)) 
		{
			
			$query="SELECT id FROM products WHERE category <> 'featured' AND name LIKE '%" .$search. "%'";
			$result=mysql_query($query); 

			$_SESSION['product_page'] = "search";

			if(! $result )
	        {
	        	die('Could not get data: ' . mysql_error());
	        }

			while($row=mysql_fetch_array($result)){ 
		        $optionID=$row['id']; 
				//-display the result of the array 
			} 
		
		}
		else echo "<p>Not a valid search term.</p>";
	}
?>