<?php
session_start();
include("riot.php");
  $name = $_GET['summoner'];
  $_SESSION['name'] = $name;

  //Su//bmit Name into Riot APi then retrieves ID Then uses Id to query

  $test = new riotapi('na');

  //Queries Basic information about the user]

  $convert = $test->getSummonerByName($name);
  $r = $test ->getStats($convert[$name]['id']);
  $_SESSION['id'] = $convert[$name]['id'];
  //Put Alogrthim to find Ranked Solo que
  include('rankedfind.php');


?>


<html>
  <head>

  </head>
  <body>
    <div id="left">
      <?php include("results.php");?>
    </div>
    <div id="right">
      <form action="rival.php" method="get">
        <h1>Select your Rival</h1>
        <input type="text" name="rival">
        <input type="submit" value="submit">
      </form>
    </div>

  </body>
</html>
