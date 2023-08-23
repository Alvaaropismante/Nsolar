<?php
    if (isset($_POST['n']) && isset($_POST['a']) && isset($_POST['e']) && isset($_POST['t']) && isset($_POST['d']) && isset($_POST['r']) && isset($_POST['c'])) {
        $n = $_POST['n'];
        $a = $_POST['a'];
        $e = nl2br($_POST['e']);
        $t = $_POST['t'];
        $d = $_POST['d'];
        $r = $_POST['r'];
        $c = $_POST['c'];
        $to = "contacto@nsolar.cl";
        $from = $e;
        $subject = 'Formulario contacto Nsolar webpage';
        $message = '<b>Nombre:</b> '.$n.' <br><b>Apellido:</b> '.$a.' <br><b>Correo:</b> '.$e.' <br><b>Telefono:</b> '.$t.' <br><b>Dirección:</b> '.$d.' <br><b>Región:</b> '.$r.' <br><b>Desea cotizar:</b> '.$c;
        $headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        if (mail($to, $subject, $message, $headers)) {
            echo "success";
        } else {
            echo "Ha fallado el evío, por favor intenta más tarde";
        }


        
    }
?>