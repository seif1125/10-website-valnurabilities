
// in this example we are discussing how HTMLinjection could happen and how we could avoid it 
//assume we have a shop website where products page shows products only released as the url is
//https://insecure-website.com/products?category=Gifts' where This causes the application to make
// a SQL query to retrieve details of the relevant products from the database:
//SELECT * FROM products WHERE category = 'Gifts' AND released = 1
//The application doesn't implement any defenses against SQL injection attacks, 
//so an attacker can construct an attack like:
//https://insecure-website.com/products?category=Gifts'--
//This results in the SQL query:
//SELECT * FROM products WHERE category = 'Gifts'--' 
//as -- will comment rest of query showing all gifts realesed and unreleased
// this can be easily avoided by using parametrized query as following:-
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTMLINJECTION</title>
</head>
<body>

 <?php $con=mysql_connect('localhost','root','') or die('error in connection');

    $statement = connection.prepareStatement("SELECT * FROM products WHERE category = ?");
$statement.setString(1, input); 
$resultSet = statement.executeQuery();      
  ?>
</body>
</html>

