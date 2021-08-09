<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- external CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>

<!-- Exercise Basic 01 -->

<!-- <div class="myName">
    <?php 
            
        $name = "Claudia";
        echo "<h1>$name</h1>";

        ?>
</div> -->

<!-- END Exercise Basic 01 -->


<!--Exercise Basic 02  -->

<!-- <div class="myName">
    <?php 
            
        $name = "Claudia";
        $age = "32";
        $job = "Web developer";

        echo "Hi, my name is $name, and I am $age years old, and I (want to) work as a $job";

        ?>
</div> -->

<!-- END Exercise Basic 02 -->


<!--Exercise Basic 03  -->

<!-- <div class="myName">
<?php 
            
        $players = array("Mark", "John", "Georg", "Lisa");

        echo "The third player in the Team is $players[2]";
    
            ?>
    </div> -->

<!-- END Exercise Basic 03 -->


<!--Exercise ADVANCED - 01 -->

    <!-- <div class="row">
        <?php 

            $card_start = "<div class='card col-2'><div class='card-body'>";
            $card_end = "</div></div>";

            $characters = array(
                "super_mario" => "Super Mario",
                "goku" => "Goku",
                "mickey" => "Mickey Mouse",
                "donald_d" => "Donald Duck",
                "goofy" => "Goofy",
                "courage" => "Courage the Cowardly Dog"
            );
        

            echo $card_start."The carachter's name is <br> <strong> $characters[super_mario] </strong>".$card_end;
            echo $card_start."The carachter's name is <br> <strong>  $characters[goku] </strong>".$card_end;
            echo $card_start."The carachter's name is <br> <strong> $characters[mickey] </strong>".$card_end;
            echo $card_start."The carachter's name is <br> <strong>  $characters[donald_d] </strong>".$card_end;
            echo $card_start."The carachter's name is <br> <strong>  $characters[goofy] </strong>".$card_end;
            echo $card_start."The carachter's name is <br> <strong> $characters[courage] </strong>".$card_end;

        ?>
    </div> -->


<!-- END ADVANCED 01 -->


<!--Exercise ADVANCED - 02 -->

<div class="row w-100 justify-content-center p-4">
        <?php 

            
            $characters = array(
                "super_mario" => array(
                    "name" =>"Super Mario",
                    "type" => "game",
                    "extra" => "you should help him save the <strong> princess! </strong>"
                ),
                "goku" => array(
                    "name" =>"Goku",
                    "type" => "manga",
                    "extra" => "you should help him <strong> save the world! </strong>"
                ),
                "mickey" => array(
                    "name" =>"Mickey Mouse",
                    "type" => "cartoon",
                    "extra" => "you may help him investigate some sh*t he is <strong> not </strong> actually qualified to investigate.."
                ),
                "donald_d" => array(
                    "name" =>"Donald Duck",
                    "type" => "cartoon",
                    "extra" => "you, well.. there is not much you can do, the dude's bad luck is really <strong> TOO MUCH!!! </strong>"
                ),
                "goofy" =>array(
                    "name" =>"Goofy",
                    "type" => "game",
                    "extra" => "you should hang with him!"
                ),
                "courage" => array(
                    "name" =>"Courage the Cowardly Dog",
                    "type" => "game",
                    "extra" => "you <strong> PLS </strong> LOOK AFTER COURAGE! <strong> POOR DOG!!! </strong>"
                )
            );

            $card_start = "<div class='col-2 py-2'><div class='card p-4 h-100'><div class='card-text'>";
            $card_end = "</div></div></div>";

        
            echo $card_start.
                "<strong>"
                .$characters['super_mario']['name']
                ."</strong>"
                ." is the character of a famous "
                .$characters['super_mario']['type']
                .", and "
                .$characters['super_mario']['extra']
                .$card_end;


            echo $card_start.
                "<strong>"
                .$characters['goku']['name']
                ."</strong>"
                ." is the character of a famous "
                .$characters['goku']['type']
                .", and "
                .$characters['goku']['extra']
                .$card_end;

            echo $card_start.
                "<strong>"
                .$characters['mickey']['name']
                ."</strong>"
                ." is the character of a famous "
                .$characters['mickey']['type']
                .", and "
                .$characters['mickey']['extra']
                .$card_end;

            echo $card_start.
                "<strong>"
                .$characters['donald_d']['name']
                ."</strong>"
                ." is the character of a famous "
                .$characters['donald_d']['type']
                .", and "
                .$characters['donald_d']['extra']
                .$card_end;

            echo $card_start.
                "<strong>"
                .$characters['goofy']['name']
                ."</strong>"
                ." is the character of a famous "
                .$characters['goofy']['type']
                .", and "
                .$characters['goofy']['extra']
                .$card_end;

            echo $card_start.
                "<strong>"
                .$characters['courage']['name']
                ."</strong>"
                ." is the character of a famous "
                .$characters['courage']['type']
                .", and "
                .$characters['courage']['extra']
                .$card_end;
            
            

        ?>
    </div>


<!-- END ADVANCED 02 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>

