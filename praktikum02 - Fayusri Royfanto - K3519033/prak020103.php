<htmL>
<head>Headings</head>
<body>
<?php
    for($i=1; $i <=6; $i++){
        if($i % 2 == 0){
            $warna = "red";
        } else{
            $warna = "black";
        }    
        echo "<font color= $warna ><h".$i.">Heading ".$i."</h".$i."></font>";
    }
?>
</body>
</html>