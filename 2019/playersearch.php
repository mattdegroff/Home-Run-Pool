<?php
if (isset($_POST["player"])) {
  $p = $_POST["player"];
  echo '<p>'.playerSearch($p).'</p>';
}

function playerSearch($player) {
  $playerLink = "http://www.espn.com/mlb/player/_/id/";
  $player = ltrim($player);
  $player = rtrim($player);
  $new = str_replace(" ", "+", $player);
  echo $new."<br>";

  $search = "http://google.com/search?q=".$new."+espn";
  echo $search."<br>";

  $link = file_get_contents($search);

  $len = strlen($playerLink);
  if (strpos($link, $playerLink)) {
    $pos = strpos($link, $playerLink);
    $pos += $len;

  while ($link[$pos] != '/') {
    $playerLink .= $link[$pos];
    $pos++;
  }
  echo $playerLink;
  return $playerLink;
} else {
  echo "none";
  return null;
}
}
?>
<script>
<form action="playersearch.php" method="post">
<input type="text" name="player"><br>
<input type="submit" value="Submit">
</form>
</div>