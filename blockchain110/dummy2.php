<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
 $content="Over the years of developing websites for clients, I’ve learned that the age-old adage, “If you want it done right, you gotta do it yourself,” can be a two-way street.

Of course, there are companies out there that have great web writers internally, but most don’t. And the thought of a company turning a great website content strategy (that we slaved over) into an ineffective “brochure site” gives me heartburn. But sometimes you have to pick your battles.

In cases where we give in and let the client take the content reins, we at least want to make sure they are equipped with a template that gives them a fighting chance to produce effective website content that drives action. Here is a template we like to use, and an explanation of what’s included." ;
$pos=strpos($content, ' ', 200);
echo substr($content,0,$pos ); 

?>
</body>
</html>