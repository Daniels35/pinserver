# 📡 PinServer (Keep-Alive Bot)

**Sistema automatizado de pings para mantener activos servicios web y chatbots.**

Este repositorio contiene dos implementaciones ligeras (en **Node.js** y **PHP**) diseñadas para enviar peticiones HTTP periódicas a una lista de URLs. Su objetivo principal es evitar que servidores gratuitos (como Render, Heroku o Glitch) entren en modo de suspensión por inactividad, o simplemente para monitorear que tus servicios estén respondiendo.

## 📋 Características Principales

### 🚀 Implementación Node.js (`ping.js`)
* **Cliente HTTP Moderno:** Utiliza la librería `axios` para realizar peticiones asíncronas de manera eficiente.
* **Ejecución Continua:** Emplea `setInterval` para ejecutar el ciclo de pings cada **20 segundos** (20,000 ms) de forma indefinida mientras el proceso esté activo.
* **Logs en Consola:** Muestra en tiempo real el éxito o el error de cada intento de conexión.

### 🐘 Implementación PHP (`pin.php`)
* **Compatibilidad Universal:** Funciona en prácticamente cualquier servidor web o entorno CLI que soporte PHP y cURL.
* **Registro en Archivo:** A diferencia de la versión de Node, este script guarda un historial persistente en un archivo llamado `ping_log.txt`, registrando la fecha, hora exacta y el resultado de cada ping.
* **Ciclo Infinito:** Utiliza un bucle `while(true)` con la función `sleep(20)` para pausar la ejecución entre intentos.

## 📂 Estructura del Proyecto

* `ping.js`: Script principal en JavaScript. Requiere instalación de dependencias.
* `pin.php`: Script alternativo en PHP. Genera logs locales.
* `package.json`: Archivo de configuración para Node.js. Define el comando de inicio `npm start`.

## 🚀 Instalación y Uso

### Opción A: Node.js
1.  Instala las dependencias:
    ```bash
    npm install
    ```
2.  Ejecuta el servidor:
    ```bash
    npm start
    ```

### Opción B: PHP
Ejecuta el script desde la línea de comandos:
```bash
php pin.php
