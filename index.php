
// in this example we are discussing how HTMLinjection could happen as any entered data 
user could add any html tag or script in order to misfunction your website page 
so this issue can be solved using htmlentities  function which converts htm tags to String so it will no make effect in page as 
it will not be rendered as html entity

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTMLINJECTION</title>
</head>
<body>
  <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
   <input type="search"  name="name" ></input>  
   <input type="submit"   ></input>  
  <div><?php if (isset( $_GET['name'])) {
    echo htmlentities($_GET['name']); // if an injection happened here for example user typed 
                                      //<SCRIPT>window.location.href="https://www.youtube.com";</SCRIPT>
                                      // the page will be always redirected to youtube page if there is no htmlentities function
    
  } else{
    echo 'guest';
  }?></div>
</form>
</body>
</html>

