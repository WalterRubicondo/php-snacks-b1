<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti
dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->

<?php
  $campionatoBasket = [
    [
      "SquadraCasa" => "Milano",
      "SquadraOspite" => "Torino",
      "PunteggioCasa" => 32,
      "PunteggioOspite" => 42
    ],
    [
      "SquadraCasa" => "Brescia",
      "SquadraOspite" => "Forlì",
      "PunteggioCasa" => 73,
      "PunteggioOspite" => 24
    ],
    [
      "SquadraCasa" => "Avellino",
      "SquadraOspite" => "Firenze",
      "PunteggioCasa" => 3,
      "PunteggioOspite" => 101
    ]
  ];

  var_dump($campionatoBasket);

  for ($i=0; $i < count($campionatoBasket); $i++) {  ?>
    <div class="">
      <?= $campionatoBasket[$i]["SquadraCasa"] ?> -
      <?= $campionatoBasket[$i]["SquadraOspite"] ?> |
      <?= $campionatoBasket[$i]["PunteggioCasa"] ?> -
      <?= $campionatoBasket[$i]["PunteggioOspite"] ?>
    </div>
<?php }

?>
