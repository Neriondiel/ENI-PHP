<?php
header('Content-Type: application/json; charset=utf-8');

if ((isset($_GET["poids"])) && (isset($_GET["taille"])) )
    {
        $poids   = $_GET["poids"];
        $taille  = $_GET["taille"];
        $imc     = $poids / ($taille* $taille);
        $imc =  round($imc,1);
        $tranche = "";
        if ($imc < 18.5)
        {
            $tranche="maigreur";
        }
        else if ($imc < 25 ) // 18.5 < $imc < 25
        {
            $tranche="normale";
        }
        else
        {
            $tranche="surpoids";
        }
		$tab["imc"] = $imc;
		$tab["tranche"] = $tranche;
		// {"imc":"25", "tranche":"normale"}
		echo json_encode($tab);
    }
    else
    {
    	$tab["message"] = "error";
		echo json_encode($tab);
    }




