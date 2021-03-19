<htmL>
<head>Headings</head>
<body>
<?php
    $i=1;
    do {
        if($i % 2 == 0){
            $warna = "red";
        } else{
            $warna = "black";
        }    
        echo "<font color= $warna ><h".$i.">Heading ".$i."</h".$i."></font>";
        $i++;
    } while($i <= 6);
?>
</body>
</html>