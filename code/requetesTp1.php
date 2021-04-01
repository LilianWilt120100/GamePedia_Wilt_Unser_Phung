<?php

class requetesTp1 {

    function question1($db)
    {
        echo "<p><strong> --------- Question 1 --------- <br> Lister les jeux dont le nom contient Mario </strong></p>";
        $resultat = $db::table('game')->where('name', 'like', '%Mario%')->get();
        foreach ($resultat as $res) {
            echo $res->name . "<br>";
        }
    }

    function question2($db)
    {
        echo "<p><strong> --------- Question 2 --------- <br> lister les compagnies installées au Japon </strong></p>";

        $resultat = $db::table('Company')->where('location_country',"=","Japan")->get();
        foreach ($resultat as $res) {
            echo $res->name . "<br>";
        }
    }
}