<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<?php
error_reporting(0);
$name = $_GET["name"];
$name = urlencode($name);
$dados = file_get_contents("http://localhost/sites/league%20of%20the%20end/api.py?name=$name");
$oi = json_decode($dados);
$accId =$oi->id;
$nome =$oi->name;
$IconID = $oi->profileIconId;
$level = $oi->summonerLevel;
$ranked_data = file_get_contents("https://br1.api.riotgames.com/lol/league/v4/positions/by-summoner/$accId?api_key=");
$rd = json_decode($ranked_data);
$Tipo = $rd[0]->queueType;
$Tipo = str_replace("RANKED_SOLO_5x5","Solo Duo ",$Tipo);
$Tipo = str_replace("RANKED_FLEX_TT","Flex_5x5 ",$Tipo);
$Tipo = str_replace("RANKED_FLEX_SR","Flex_5x5 ",$Tipo);
$elo = $rd[0]->tier;
$elo = str_replace("PLATINUM","Platina ",$elo);
$elo = str_replace("GOLD","Ouro ",$elo);
$elo = str_replace("DIAMOND","Diamante ",$elo);
$elo = str_replace("GRANDMASTER","Mestre ",$elo);
$elo = str_replace("CHALLENGER","Desafiante ",$elo);
$elo = str_replace("SILVER","Prata ",$elo);
$elo = str_replace("IRON","Ferro ",$elo);
$elo = str_replace("BRONZE","Bronze ",$elo);
$elo = $elo." ".$rd[0]->rank;
$vic = $rd[0]->wins;
$pec = $rd[0]->losses;
$lp = $rd[0]->leaguePoints;
$Tipo2 = $rd[2]->queueType;
$Tipo2 = str_replace("RANKED_SOLO_5x5","Solo Duo ",$Tipo2);
$Tipo2 = str_replace("RANKED_FLEX_SR","Flex_5x5 ",$Tipo2);
$Tipo2 = str_replace("RANKED_FLEX_TT","Flex_3x3 ",$Tipo2);
$elo2 = $rd[2]->tier;
$elo2 = str_replace("PLATINUM","Platina ",$elo2);
$elo2 = str_replace("DIAMOND","Diamante ",$elo2);
$elo2 = str_replace("MASTER","Mestre ",$elo2);
$elo2 = str_replace("GOLD","Ouro ",$elo2);

$elo2 = str_replace("CHALLENGER","Desafiante ",$elo2);
$elo2 = str_replace("SILVER","Prata ",$elo2);
$elo2 = str_replace("IRON","Ferro ",$elo2);
$elo2 = str_replace("BRONZE","Bronze ",$elo2);
$elo2 = $elo2." ".$rd[2]->rank;
$vic1 = $rd[2]->wins;
$pec1 = $rd[2]->losses;
$lp1 = $rd[2]->leaguePoints;

$Tipo1 = $rd[1]->queueType;
$Tipo1 = str_replace("RANKED_SOLO_5x5","Solo Duo ",$Tipo1);
$Tipo1 = str_replace("RANKED_FLEX_TT","Flex_3x3 ",$Tipo1);
$Tipo1 = str_replace("RANKED_FLEX_SR","Flex_5x5 ",$Tipo1);

$elo1 = $rd[1]->tier;
$elo1 = str_replace("PLATINUM","Platina ",$elo1);
$elo1 = str_replace("DIAMOND","Diamante ",$elo1);
$elo1 = str_replace("MASTER","Mestre ",$elo1);
$elo1 = str_replace("GOLD","Ouro ",$elo1);
$elo1 = str_replace("CHALLENGER","Desafiante ",$elo1);
$elo1 = str_replace("SILVER","Prata ",$elo1);
$elo1 = str_replace("IRON","Ferro ",$elo1);
$elo1 = str_replace("BRONZE","Bronze ",$elo1);
$elo1 = $elo1." ".$rd[1]->rank;
echo "<br>";
$vic2 = $rd[1]->wins;
$pec2 = $rd[1]->losses;
$lp2 = $rd[1]->leaguePoints;


?>

<img id="joao" widht="50px" src=<?php echo "http://avatar.leagueoflegends.com/br/$name.png"?>>  
<h2 id ="nome"><?php echo "nome: $nome"; ?></h2>
<h2 id ="nivel"><?php echo "nivel: $level"; ?></h2>
<h2 id ="tp"><?php echo"Tipo: $Tipo"."Elo:$elo" ?></h2>

<h2 id ="lp"><?php echo "lp: $lp"; ?></h2>
<h2 id ="vic"><?php echo "Vitórias $vic"; ?></h2>
<h2 id ="per"><?php echo "Perdas $pec"; ?></h2>
<h2><?php echo"Tipo: $Tipo1"."Elo:$elo1" ?></h2>

<h2 id ="lp1"><?php echo "lp: $lp1"; ?></h2>
<h2 id ="vic1"><?php echo "Vitórias $vic1"; ?></h2>
<h2 id ="per1"><?php echo "Perdas $pec1"; ?></h2>
<h2><?php echo"Tipo: $Tipo2"."Elo:$elo2" ?></h2>

<h2 id ="lp2"><?php echo "lp: $lp2"; ?></h2>
<h2 id ="vic2"><?php echo "Vitórias $vic2"; ?></h2>
<h2 id ="per2"><?php echo "Perdas $pec2"; ?></h2>
<div id="solo"></div>
<div id="flex"></div>
<div id="tt"></div>
<div id="info"></div>

<script>
    $(function()
    {    

        $("#info").append($("#nome"))
        $("#info").append($("#nivel"))
        $("#info").append($("#joao"))
        
        

        
    })
    </script>