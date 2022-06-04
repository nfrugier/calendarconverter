<?php
$json = file_get_contents("./harptos.json");
$harptosYear = json_decode($json);
//echo "<pre>";
//print_r($harptosYear);
//echo "</pre>";
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>Convertisseur Harptos/Grégorien</h1>
            <p id="gregorian">Passer la souris sur une case pour avoir son équivalent dans le calendrier Grégorien.</p>
            <table id="harptos">
            <?php
                $harptosMonths = [];
                echo "<tr>";
                foreach ($harptosYear as $monthName => $harptosMonth) {
                    $harptosMonths[$monthName] = $harptosMonth;

                    echo "<th scope='col'>".$monthName;
                    foreach ($harptosMonth as $days => $gregorian) {
                        $gregorian = str_replace(' ', '&nbsp', $gregorian);
                        $daysDisplay = str_replace(' ', '&nbsp', $days);
                        $daysDisplay = str_replace("'", '`', $daysDisplay );
                        echo "<td scope=row onmouseover=this.innerHTML='";
                        echo $gregorian;
                        //echo "01&nbspJanvier";
                        echo "'; onmouseout=this.innerHTML='";
                        echo $daysDisplay;
                        echo "'><a id='".$monthName."_".$days."' >";
                        echo $days;
                        echo "</a></td>";
                    }
                    echo "</th>";
                    echo "</tr>";
                }

            ?>
            </table>
		<small>(oui, c'est moche et il faut scroll vers la droite pour voir la fin du calendrier)</small>
        </div>
    </body>
</html>
