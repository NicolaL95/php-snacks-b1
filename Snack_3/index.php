<?php
$posts = [

    '21/12/2012' => [
        [
            'title' => 'Post Pagina',
            'author' => 'Paolo Rossi',
            'text' => 'Il mondo non è finito!!'
        ],
        [
            'title' => 'Post Home',
            'author' => 'Stefania Mentana',
            'text' => 'Il mondo non è finito?'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post Messaggio',
            'author' => 'Michele Roventini',
            'text' => 'Il mondo non è finito :('
        ]
    ],
    '23/01/2020' => [
        [
            'title' => 'Post Pagina',
            'author' => 'Ottavio Augusto',
            'text' => 'Questo virus è una banale influenza!'
        ],
        [
           'title' => 'Post Home',
            'author' => 'Giulio Cesare',
             'text' => 'Questo virus è una banale influenza?'
        ],
        [
           'title' => 'Post Messaggio',
            'author' => 'Scipione Africano',
             'text' => 'Questo virus è una banale influenza :('
        ]
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 foreach ($posts as &$post) {
   echo '<p>', key($post), '<br>';
  foreach ($posts as &$posted) {
   echo $posted;
}
echo '</p>';
} 
?>
</body>
</html>