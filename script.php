<?php
$json = file_get_contents("./harptos.json");
$harptosYear = json_decode($json, true);
$pikachu = "pikachu";
//echo gettype($harptosYear);
var_dump($harptosYear);
//echo $harptosYear;
$gregorianDisplay = "NaN";
$harptosMonths = [];
/*                echo "<tr>";
                foreach ($harptosYear as $monthName => $harptosMonth) {
                    $harptosMonths[$monthName] = $harptosMonth;

                    echo "<th scope='col'>".$monthName;
                    foreach ($harptosMonth as $days => $gregorian) {
                        /*echo "
                            <script type=\"text/javascript\">
                                function getGregorian() {
                                    const container = document.getElementById('gregorian');
                                    container.innerHTML = $gregorian;
                                }
                            </script>
                        ";
                        $gregorianDisplay = $gregorian;
                        echo "<td scope=row onmouseover=getGregorian();><a id='".$monthName."_".$days."' >";
                        echo $days;
                        echo "</a></td>";

                    }
                    echo "</th>";
                    echo "</tr>";
                }*/
