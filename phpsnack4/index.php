<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php

  $alunni = [
          [
              'Nome' => 'Marco',
              'Cognome' => 'Filangieri',
              'Voti' => [5,3,4,6]
          ],
          [
              'Nome' => 'Francesca',
              'Cognome' => 'Benedictis',
              'Voti' => [6,3,10,6]
          ],
          [
              'Nome' => 'Bernardo',
              'Cognome' => 'Rossi',
              'Voti' => [6,7,5,6]
          ]
  ];

  for ($i = 0; $i < count($alunni); $i++) {
    $mediaVoti = array_sum($alunni[$i]['Voti'])/count($alunni[$i]['Voti']);
    ?>
    <div class="">
      <p><?= "Nome " .$alunni[$i]["Nome"] ?></p>
      <p><?= "Cognome " .$alunni[$i]["Cognome"] ?></p>
      <p><?= "Media voti : " .$mediaVoti ?></p>
    </div>
<?php  } ?>
