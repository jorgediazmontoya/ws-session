<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Ws</title>
</head>
<body>
    <h1>Ws Test</h1>
    <button id="startSessionFake">Login</button>
    <p id="alert"></p>

    <button id = "play">Play</button>
    <script>
        const startSessionFake = document.querySelector('#startSessionFake')
        const play = document.querySelector('#play')
        play.style.display = 'none'

        startSessionFake.addEventListener('click', () => {
            play.style.display = 'block'

            var conn = new WebSocket('ws://localhost:8080')
            conn.onopen = function(e) {
                console.log("Connection established!");

                let timeSession = 8
                conn.send(timeSession);

                // Listen
                conn.onmessage = function(e) {
                    console.log(e.data);
                    const alert = document.querySelector('#alert')
                    alert.textContent = JSON.parse(e.data).close
                };
            };
        })

        $num = 0
        play.addEventListener('click', () => {
            console.log($num ++)
        })
    </script>
</body>
</html>
