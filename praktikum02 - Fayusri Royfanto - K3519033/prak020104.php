<htmL>
<head>Headings</head>
<body>
<?php
    $i=1;
    while($i <= 6){
        if($i % 2 == 0){
            $warna = "red";
        } else{
            $warna = "black";
        }    
        echo "<font color= $warna ><h".$i.">Heading ".$i."</h".$i."></font>";
        $i++;
    }
?>
</body>
</html>