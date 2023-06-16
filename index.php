
//Cross-Site Scripting (XSS) attacks are a form of injection attack, 
//where malicious scripts are injected into trusted web applications. 
//A simple XSS attack will occur on a vulnerable website that accepts user input via a GET parameter and displays
// the data on the website.
//suppose we have a search page and user have field to search this search appear in our html https://example.com/search/?param
//Injecting the following code into the URL enables an XSS attack
//https://example.com/search/?param=window.location=”https://maliciouswebsite.com”
// The injected code will cause a redirect to maliciouswebsite.com as soon as the site loads.
// our solution for Preventing XSS in PHP

   // Input Sanitization in PHP
    //htmlentities() vs htmlspecialchars()
    //strip_tags()
    //addslashes()
    
// as we htmlentities() wil decode the html tags and strip_tags() will prevent injecting strip tag


<html lang = "en">
   
   <head>
      <title>xss prevention</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
    
      </style>
      
   </head>
	
   <body>
      
   <h1>No results were found for: <?php echo htmlentities(addslashes(strip_tags($_GET['params']))); ?></h1>
   </body>
</html>
