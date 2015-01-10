<?php
  session_start();

  include ("riot.php");

  $rival = $_GET['rival'] ;
  $name = $_SESSION['name'] ;
  $summoner_name = $_SESSION['id'] ;

  $test = new riotapi('na');

  $r = $test->getStats($summoner_name);

  $convert = $test->getSummonerByName($rival);

  // Insert ranked solo que alogrthim
  include("rankedfind.php");

?>
<html>
<head>

</head>
<body>
  <div id="left">
    <?php include("results.php");?>
  </div>
  <div id="right">
    <?php $r = $test ->getStats($convert[$rival]['id']); include("rankedfind.php"); include("rivalresults.php");?>

    </form>
  </div>

</body>
</html>
