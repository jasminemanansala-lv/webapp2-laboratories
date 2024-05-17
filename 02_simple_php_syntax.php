<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SYNTAX</title>
</head>
<body>
    <p><?php 
        // TASK #1
        $name = 'Name: Jasmine Torres Manansala '; 
        $age = 'Age: 21 years old';
        $address = 'Address: Sta. Cruz, Macabebe, Pampanga';
        $hobbies = 'Hobbies: Eating, Anime, Music';
        $pet_peeve = 'Pet Peeve: Not paying attention when I ask them or talk to them.';

        echo $name, '<br>'; 
        echo $age, '<br>'; 
        echo $address, '<br>'; 
        echo $hobbies, '<br>'; 
        echo $pet_peeve, '<br>','<br>','<br>','<br>','<br>'; 


        // TASK #2
        // echo $hobbies, '<br>'; 
        // echo $pet_peeve, '<br>'; 


        // TASK #3
        define('NAME','Jasmine Torres Manansala');
        define('AGE','21 years old');
        define('ADDRESS','Sta. Cruz, Macabebe, Pampanga');
        define('HOBBIES','Eating, Anime, Music');
        define('PET_PEEVE','Not paying attention when I ask them or talk to them.');

        echo NAME, '<br>';
        echo AGE, '<br>';
        echo ADDRESS, '<br>';
        echo HOBBIES, '<br>';
        echo PET_PEEVE, '<br>','<br>','<br>','<br>','<br>';


        // TASK #4
        echo '<pre>';
        var_dump(NAME, AGE, ADDRESS, HOBBIES, PET_PEEVE);
        echo '</pre>';


        /* TASK #5
           Because I made an effort in trying to communicate but got ignored instead. 
           I can understand if they ignore me the first time, but if I constantly call out
           their attention, it becomes my pet peeve because it feels like being invisible
           to them. */
        ?>
    </p>
</body>
</html>