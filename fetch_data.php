<?php

//fetch_data.php

include('database_connection.php');



if (isset($_POST["action"])) { // Check if the AJAX action is set

	// Initial query to select all courses with status '1'
	$query = "
		SELECT * FROM course WHERE course_status = '1'
	";

	if (isset($_POST["field"])) { // Check if 'field' filter is set

		// Filter courses based on selected fields
		$field_filter = implode("','", $_POST["field"]);
		$query .= "
		 AND field_name IN('" . $field_filter . "')
		";
	}

	if (isset($_POST["institute_name"])) { // Check if 'institute_name' filter is set

		// Filter courses based on selected institute name
		$category = $_POST["institute_name"];
		$query .= "
	   AND  institute_name like('" . $category . "')";
	}

	if (isset($_POST["query"])) { // Check if 'query' for search is set

		// Perform search based on institute name, or field name
		$search = ($_POST["query"]);
		$query = "
  SELECT * FROM course 
  WHERE field_name LIKE '%" . $search . "%'
  OR institute_name LIKE '%" . $search . "%' 
  
 ";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if ($total_row > 0) {
		foreach ($result as $row) {  // out put style
			$output .= ' 
			<div class="container-fluid">
			
  
                <div class="row" >
          
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:12px; margin-top:15px; height:250px;">
				
				<div style="text-align: left;" class="col-xs-4 col-sm-4">
				<div style="width:100px;height:25px; background-color: #004080;  text-align: center; display: flex;
				justify-content: center;
				align-items: center;">
				<h5 style="text-align:center;color:#ffffff">' . $row['language'] . '</h5>
				</div>
				<span class="border">
					<img src="image/' . $row['institute_image'] . '" alt="" class="img-thumbnail" style="width: 100%; margin-top:25px;">
					</span>
					<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:6px; height:70px; display: flex;
					justify-content: center;
					align-items: center;">
					<p style="text-align:center;color:#004080"><strong>' . $row['institute_name'] . '</strong></p>
					</div>
					</div>
					
					
					
					<div class="col-lg-7 pt-4 pt-lg-0">
					<h4 style="font-size:15px;"><strong><a href="#">' . $row['course_name'] . '</a></strong></h4>
					</br>
					<p><strong>Criteria :</strong> ' . $row['criteria'] . ' <br />
					<strong>Level :</strong>  ' . $row['level'] . ' <br />
					<strong>Duration :</strong>  ' . $row['duration'] . ' <br />
					<strong>Field :</strong>  ' . $row['field_name'] . ' <br /></p>
					
				</div>
				</div>
				</div>

			</div>
			';
		}
	} else {
		$output = '<h3>No Data Found</h3>'; // Display a message if no data is found
	}
	echo $output;
}
