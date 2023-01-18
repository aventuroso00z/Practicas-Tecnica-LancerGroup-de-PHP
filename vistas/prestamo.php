<?php

ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: ../index.php");
}

else
{
require 'header.php';
?>

<?php

require 'footer.php';
?>
<script type="text/javascript" src="scripts/Autor.js"></script>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siAutores').addClass("active");
</script>