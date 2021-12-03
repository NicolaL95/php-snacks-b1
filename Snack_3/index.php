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
    $keys=array_keys($posts)
    for($i=0; $i < count($keys); $i++){
        $key = $keys[$i];?>

<h1><?php echo $key; ?></h1>

       <?php for($x=0; $x < count($posts[$keys]); $x++){
$post = $posts[$key][$j];?>
    <h4><?php echo $post['title']; ?></h4>
    <p><?php echo $post['text']; ?></p>
        }
    }
    ?>
</body>
</html>