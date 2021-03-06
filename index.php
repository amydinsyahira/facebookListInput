<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>TextboxList + Autocomplete demo</title>
    
    <link rel="stylesheet" href="test.css" type="text/css" media="screen" title="Test Stylesheet" charset="utf-8" />
    
    <script src="mootools-beta-1.2b1.js" type="text/javascript" charset="utf-8"></script>
    <script src="textboxlist.compressed.js" type="text/javascript" charset="utf-8"></script>
    <script src="test.js" type="text/javascript" charset="utf-8"></script>
  </head>
  
  <body>    
    <h1>TextboxList + Autocomplete Demo</h1>
    <p><a href="http://devthought.com/textboxlist-meets-autocompletion/">See article page</a>, <a href="http://devthought.com/textboxlist-fancy-facebook-like-dynamic-inputs/">Go to TextboxList article</a></p>
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get" accept-charset="utf-8">
      <ol>
        <li id="facebook-list" class="input-text">
          <label>FacebookList input</label>
          <input type="text" value="" name="textlistfb" id="facebook-demo" />
          <div id="facebook-auto">
            <div class="default">Type the name of an argentine writer you like</div>
            <ul class="feed">
              <li>Jorge Luis Borges</li>
              <li>Julio Cortazar</li>
            </ul>
          </div>
          <!-- These two writers will be added when the control is loaded -->
        </li>
      </ol>      
      <input type="submit" name="submit" value="Submit" />
    </form>   
    <?php
	if(!empty($_GET['textlistfb']))
	echo $_GET['textlistfb'];
	?>      
  </body>  
</html>