# HTML robot buttons

<<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Robot Control</title>
    <style>
        button { 
            font-size: 20px; 
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Control Robot Movement</h1>
    <button onclick="sendCommand('forward')">Forward</button>
    <button onclick="sendCommand('backward')">Backward</button>
    <button onclick="sendCommand('left')">Left</button>
    <button onclick="sendCommand('right')">Right</button>

   
</body>
</html>
