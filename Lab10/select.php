<html>
<body>
<?php
if ($_GET['language'] == 'en') {
setcookie('lang', 'en', time() + 600);
}
elseif ($_GET['language'] == 'th'){
setcookie('lang','th', time() +600);
}

?>
</body>        
</html>