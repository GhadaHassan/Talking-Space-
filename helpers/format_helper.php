<?php
    //URL Format
	function urlFormat($str)
	{
		//Strip out all whitespace
		$str = preg_replace('/\s*/' , '' , $str);

		//convert the string to all lowercase
		$str = strtolower($str);

		//URL Encode
		$str = urlencode($str);

		return $str;
	}

	// Format the Date
    function formatDate($data)
    {
        $insert_date = date("l, F j, Y, g:i A",strtotime($data))."\n";
        return $insert_date;
    }


  // add classname active if category is active
	function is_active($category)
	{
		if(isset($_GET['category']))
		{
			if($_GET['category'] == $category)
			{
				return 'active';
			}
			else
			{
				return '';
			}
		}
		else
		{
			if($category == null)
			{
				return 'active';

			}
		}
	}
?>
