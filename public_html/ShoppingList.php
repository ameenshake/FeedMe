<?php
$swank = $_POST['swank'];
$response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/ingredients/autocomplete?query=".$swank,
  array(
    "X-Mashape-Key" => "MYlgyZwTALmsh1mQlncUoNic8a5yp1sidgZjsnGoQueys1SIEr"
  )
);
  echo "<table>"
  foreach($response as $value){
  echo "<tr>";
  echo "<td>".$value["name"]."</td>";
  echo "</tr>";
}
  echo "</table>";
 ?>
