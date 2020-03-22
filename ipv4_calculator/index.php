<html>

<head>
    <title>Ip calculator</title>
    <link rel="stylesheet" href="styles/frontend.css">
</head>

<body>
    <div id="in">
        <form method="POST" action="index.php">
            <input id="input" type="text" placeholder="host or network/mask" name="pole" id="pole"><br>
            <input id="submit" type="submit" value="Submit">
        </form>
    </div>
<?php
        $input = filter_input(INPUT_POST, 'pole', FILTER_SANITIZE_STRING);
        $IpAndMask = explode("/", $input);
        $Ip = $IpAndMask[0];
        $Mask = $IpAndMask[1];
        $ipsplit = explode(".", $Ip);




        if($Mask >= 32){
            echo"<p>Invalid Mask...</p>";
        }
        else{
            echo '<div id="main">';
        ///Network
        $netlast= 0;
        echo "<br>Network: $ipsplit[0].$ipsplit[1].$ipsplit[2].$netlast/$Mask"; 

        ///Brodcast
        for($i=0;$i!=4;$i++){
            $temp = decbin($ipsplit[$i]);
            $bin[$i] = $temp;
            $bin[$i] = substr("00000000",0,8 - strlen($bin[$i])) . $bin[$i];
        }
        $binstr = "$bin[0]$bin[1]$bin[2]$bin[3]";
        $binarray= str_split($binstr);
        echo"<br>";
        $x=0;
        $c = 32 - $Mask;
        $cc = $c++;

        for($i = 0; $i != $cc; $i++){
            $brodarray[$x]=1;
            $x++;
        }

        $brodbin = implode($brodarray);
        $lastdec = bindec($brodbin);
        echo "Brodcast: $ipsplit[0].$ipsplit[1].$ipsplit[2].$lastdec";

        /// First/last host and host range

        $hostmax = $lastdec -1;
        $firsthost = $netlast +1;
        $max = $lastdec -2;

        echo "<br>First host: $ipsplit[0].$ipsplit[1].$ipsplit[2].$firsthost<br>";
        echo "Last host: $ipsplit[0].$ipsplit[1].$ipsplit[2].$hostmax<br>";
        echo "Max host: $max";
}

echo '</div>';
?>
</body>

</html>