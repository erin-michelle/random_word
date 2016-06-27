

<!DOCTYPE html>
<html>
<head>
	<title>Survey Results</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class='col-md-6'>
			<div class="table table-striped">
			  <h2>Submitted Information</h2>          
			  <table class="table">
			    <thead>
			      <tr>
			        <th>Full Name</th>
			        <th>Location</th>
			        <th>Language</th>
			        <th>Comment</th>
			      </tr>
			    </thead>
			    <tbody>

			      <tr>
			        <td><?= $full_name ?></td>
			        <td><?= $location ?></td>
			        <td><?= $language ?></td>
			      </tr>

			      <div class='comment_area'><?= $comment ?> </div>

			    </tbody>
			  </table>
	  	</div>
	  </div>
	</div>


</body>
</html>