const axios = require('axios');

// Array de URLs
const pingURLs = [
    'Link1',
    'Link2'
];

// Función para hacer el ping
function pingChatbots() {
  pingURLs.forEach(url => {
    axios.get(url)
      .then(response => {
        console.log(`Ping exitoso al chatbot en ${url}`);
      })
      .catch(error => {
        console.error(`Error en el ping a ${url}:`, error);
      });
  });
}

// Configura el intervalo de ping cada 2 minutos (120,000 ms)
setInterval(pingChatbots, 20000);
