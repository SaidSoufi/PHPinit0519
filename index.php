<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
  <h1>Mon titre</h1>
   
   <?php
        // Affichage de Bonjour
        echo 'Bonjour Said';
    
    $nb1 = 1.55;
    $isPublished = true;
    
    $content = "<p> Contenu de mon \"paragraphe\" : $nb1</p>";
    $content2 = '<p> Conte  nu de mon paragraphe : $nb1 </p>';

    
    echo $content;
    echo $content2;
    
    
    // Les constantes (soit const soit define)
    const NB_ARTICLES_PER_PAGE = 6;
    define ("DATABASE_NAME", "6");
    
    echo NB_ARTICLES_PER_PAGE;
    echo DATABASE_NAME;
    
    
    var_dump ($nb1); 
        
    $str1 = "Bonjour";
    $str2 = " tout le monde";
    
    echo "Bonjour : " .$str2;
    
    $nb = 4;
    $result = ($nb === 1);
    
    $temp = -122;
    
//    if ($temp > 0 && $temp < 20) {
//         echo "<p>Temps agréable</p>";
//    } elseif ($temp < 50 && $temp > 20) {
//         echo "<p>Temps magnifique</p>";
//    } elseif ($temp < 0) {
//        echo "<p>Il caille</p>";
//    } elseif ($temp > 20 && $temp < 50) {
//        echo "<p>Il caille</p>";
//    } else {
//        echo "<p>Tu ne sais pas quel temps il fait</p>";
//    }
    
    if ($temp < 0) {
        echo "<p>Il caille</p>";
    } elseif ($temp < 20) {
        echo "<p>Temps agréable</p>";
    }elseif ($temp < 50) {
        echo "<p>Temps magnifique</p>";
    } else {
        echo "<p>Il fait bien trop chaud</p>";
    }
    
    
    
    
    ?>
</body>
</html>