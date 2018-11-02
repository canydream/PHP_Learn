<!DOCTYPE html>

<html>


<head>
<meta charset="utf-8">
<title>Cany's php Learning page</title>
</head>


<body>

<h1>我的标题</h1>
<p>This will be ignored by PHP and displayed by the browser.</p>
<p><?php echo "This is a php echo.";?></p>
<p>This will also be ignored by PHP and displayed by the browser.</p>

<!--使用条件的高级分离术
处于条件语句中间时，此时 PHP 解释器会根据条件判断来决定哪些输出，哪些跳过
-->
<?php
$expression=false;
if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>


<?php echo 'if you want to serve XHTML or XML documents, do it like this'; ?>

<script language="php">
        echo 'some editors (like FrontPage) don\'t
              like processing instructions';
</script>

<? echo 'this is the simplest, an SGML processing instruction'; ?>

<?= "expression" ?> This is a shortcut for "<?php echo "expression" ?>"

<% echo 'You may optionally use ASP-style tags'; %>

<%= $variable; # This is a shortcut for "<% echo . . ." %>

<?php

//======================================================================
// CATEGORY LARGE FONT
//======================================================================

//-----------------------------------------------------
// Sub-Category Smaller Font
//-----------------------------------------------------

/* Title Here Notice the First Letters are Capitalized */

# Option 1
# Option 2
# Option 3

/*
* This is a detailed explanation
* of something that should require
* several paragraphs of information.
*/

// This is a single line quote.
?>

<a href="https://github.com/canydream/PHP_Learn.git">这是一个链接(cany's github)</a>

</body>



</html>