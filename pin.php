<?php
$urls = [
    'Link1',
    'Link2'
];

$file = 'ping_log.txt';

function pingChatbots($urls, $file) {
    foreach ($urls as $url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        
        // Registro de la fecha y hora del ping
        $current = file_get_contents($file);
        $current .= "Ping ejecutado a $url en " . date("Y-m-d H:i:s") . "\n";
        
        // Verifica si hubo un error
        if (curl_errno($ch)) {
            $current .= 'Error en el ping a ' . $url . ': ' . curl_error($ch) . "\n";
        } else {
            $current .= "Ping exitoso al chatbot en $url\n";
        }
        
        file_put_contents($file, $current);
        curl_close($ch);
    }
}

// Configura el intervalo de ping cada 20 segundos
while (true) {
    pingChatbots($urls, $file);
    sleep(20);  // Pausa el script por 20 segundos
}
