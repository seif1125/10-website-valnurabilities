//An IDOR PHP vulnerability occurs when an application exposes internal object references directly in the URL 
//or parameters. Attackers can manipulate these references to access unauthorized resources or perform actions 
//they should not have permissions for.
<?php
$id = $_GET['id']; // User-supplied input for fetching an object
$query = "SELECT * FROM products WHERE id = $id"; // Insecure direct object reference
$result = mysqli_query($connection, $query);
$product = mysqli_fetch_assoc($result);
// Display product details
?>


// How to fix it?

//Avoid exposing internal object references directly in URLs or parameters.
//Implement proper access controls and permissions checks to prevent unauthorized access to sensitive resources.
//Use indirect object references or enforce access control on the server-side.
<html lang = "en">
   
   <head>
      <title>xss prevention</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
    
      </style>
      
   </head>
	
   <body>
   </body>
</html>
