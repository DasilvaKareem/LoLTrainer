<?php

include("riot.php");
$ally = trim(strtolower($_GET['summoner']));
$rival = strtolower($_GET['rival']);
//Su//bmit Name into Riot APi then retrieves ID Then uses Id to query
if (empty($ally) || empty($rival)){

  die("Failed") ;

}
$que = new riotapi('na');

//Queries Basic information about the user]

$convert = $que->getSummonerByName($ally);
$convert2 = $que->getSummonerByName($rival);
$allyID =$convert[$ally]['id'];
$rivalID= $convert2[$rival]['id'];
$rankedAlly = $que->getLeague($allyID);
$rankedRival = $que ->getLeague($rivalID);
$allyStats = $que ->getStats($allyID);
$rivalStats = $que ->getStats($rivalID);
$ally = $convert[$ally]['name'];
$rival = $convert2[$rival]['name'];
//Get last 5 games
$allyMatchHistory = $que ->getMatchHistory($allyID);
$allyMatchque = array();
$to10 = 0;
for($to10; $to10<10; $to10++){

$allyMatch = $allyMatchHistory['matches'][$to10]['matchId'];
array_push($allyMatchque,$allyMatch);
}
$pairedMatches = array();
$rivalMatchHistory = $que ->getMatchHistory($rivalID);
$rivalMatchque = array();
$to10 = 0;
for($to10; $to10<10; $to10++){

  $rivalMatch = $rivalMatchHistory['matches'][$to10]['matchId'];
  array_push($rivalMatchque,$rivalMatch);
}

for ($i = 0; $i<10;$i++) {
  for ($k = 0;$k<10;$k++){
    if ($allyMatchque[$i] == $rivalMatchque[$k]){

      array_push($pairedMatches,$allyMatchque[$i]) ;
    }
    else {

    }
  }


}


//ALogrthim That gets all the details this is the most important
$pairedMatches = array_reverse($pairedMatches);





//Put Alogrthim to find Ranked Solo que


$i = 0 ;



do {

  $i++ ;

} while( $allyStats['playerStatSummaries'][$i]['playerStatSummaryType']  != 'RankedSolo5x5');


$j = 0;

do {

  $j++ ;

} while($rivalStats['playerStatSummaries'][$j]['playerStatSummaryType']  != 'RankedSolo5x5') ;

$k = 0 ;

  if($rankedAlly["status"]){
    echo 'nah';
}
else {

  do {

    $k++ ;
  } while( $rankedAlly[$allyID][0]["entries"][$k]["playerOrTeamName"]  != $ally);
}

$a = 0 ;
if($rankedRival["status"]){

  echo 'nah';

} else {

  do {

    $a++ ;

  } while( $rankedRival[$rivalID][0]["entries"][$a]["playerOrTeamName"]  != $rival);

}




//compares Win Rates

  $allyTotal = $allyStats['playerStatSummaries'][$i]['wins'] + $allyStats['playerStatSummaries'][$i]['losses'];

$allyWinRate = $allyStats['playerStatSummaries'][$i]['wins'] / $allyTotal;

$rivalTotal = $rivalStats['playerStatSummaries'][$j]['wins'] + $rivalStats['playerStatSummaries'][$j]['losses'];

$rivalWinRate = $rivalStats['playerStatSummaries'][$j]['wins'] / $rivalTotal;


  if($rivalWinRate > $allyWinRate){



  }
  else if ($rivalWinRate == $allyWinRate){



  }
   else {



  }

//Compares Most wins
  $allyWins =  $allyStats['playerStatSummaries'][$i]['wins'];
  $rivalWins = $rivalStats['playerStatSummaries'][$j]['wins'];
  if($allyWins > $rivalWins){



  } else if ($allyWins == $rivalWins){


  } else {



  }

//Compare Most Normal Wins

?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lol TRainer</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
<section class= "intro-section">
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
          <h1><?php echo $ally ?></h1>
          <h2><?php echo $rankedAlly[$allyID][0]["tier"]." ".$rankedAlly[$allyID][0]["entries"][$k]['division']." ".$rankedAlly[$allyID][0]["name"];?></h2>
          <table class="table">
          <tr>.
            <td>Ranked Wins </td><td>Ranked Losses</td>
            <tr>

              <td id="lwin"><?php echo $allyWins  ?></td>
              <td class="llose"><?php echo $allyStats['playerStatSummaries'][$i]['losses']; ?></td>
          </tr>
            </table>

        </div>
        <div class="col-sm-6">
          <h1><?php echo $rival ?></h1>
          <h2><?php echo $rankedRival[$rivalID][0]["tier"]." ".$rankedRival[$rivalID][0]["entries"][$a]['division']." ".$rankedRival[$rivalID][0]["name"];?></h2>
          <table class="table"
            <tr>
              <td>Ranked Wins </td><td> Ranked Losses</td>
              <tr>

                <td id="lwin"><?php echo $rivalWins  ?></td>
                <td class="llose"><?php echo $rivalStats['playerStatSummaries'][$j]['losses']; ?></td>
              </tr>
            </table>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <a class="btn btn-default page-scroll" href="#compare">Compare Stats</a>
      </div>
    </div>
  </div>
</section>



<?php
  if($pairedMatches){
    for ($i = 0; $i<count($pairedMatches);$i++){

      include("matches".$i.".php");

    }
}
else {

  echo "No matches found";

}

?>
</body>
</html>
