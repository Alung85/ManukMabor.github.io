<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Nama</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Playfair Display', serif; /* Menggunakan font Playfair Display */
            background: url('/img/roses.jpg') no-repeat center center fixed;
            background-size: cover; /* Ensures the image covers the whole viewport */
            background-attachment: fixed; /* Keeps the background image fixed in place */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }
        .container {
            max-width: 400px;
            width: 90%; /* Adjust width for better mobile view */
            background: rgba(255, 255, 255, 0); /* Fully transparent background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: none; /* No shadow */
            text-align: center;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s forwards;
        }
        h1 {
            color: rgb(255, 255, 255);
            margin-bottom: 20px;
            font-weight: 800;
            font-family: 'Playfair Display', Optima, sans-serif /* Font untuk heading */
        }
        input[type="text"] {
            width: 95%; /* Adjusted width */
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #fff; /* White border */
            font-size: 16px;
            background: rgba(255, 255, 255, 0.05); /* 95% transparent background */
            color: #fff; /* White text color for readability */
            caret-color: #fff; /* White caret color */
            font-weight: 500;
            font-family: 'Playfair Display', serif; /* Font untuk input */
            text-align: center; /* Center text inside input */
        }
        input[type="text"]::placeholder {
            color: #fff; /* White placeholder color */
        }
        input[type="text"]:focus {
            border-color: #fff; /* White border on focus */
            outline: none; /* Remove default outline */
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.2); /* Semi-transparent background */
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            font-family: 'Playfair Display', serif; /* Font untuk button */
            position: relative; /* Make button positioning relative */
        }
        button:hover {
            background: rgba(255, 255, 255, 0.4); /* Lighter on hover */
            transform: scale(1.05); /* Slightly enlarge on hover */
        }
        .message {
            color: #fff; /* White color for message */
            font-size: 16px;
            margin-top: 20px;
            display: none; /* Hide message by default */
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Masukkan Nama Anda</h1>
        <input type="text" id="nameInput" placeholder="Nama Anda">
        <button onclick="submitName()">Masukkan</button>
        <div class="message" id="message">Coba klik lagi!</div>
    </div>

    <script>
        let clickCount = 0;
        const maxClicks = 5;

        function getRandomPosition(element) {
            const containerRect = document.querySelector('.container').getBoundingClientRect();
            const buttonRect = element.getBoundingClientRect();
            const maxX = containerRect.width - buttonRect.width;
            const maxY = containerRect.height - buttonRect.height;
            const randomX = Math.random() * maxX;
            const randomY = Math.random() * maxY;
            return [randomX, randomY];
        }

        function submitName() {
            const name = document.getElementById('nameInput').value;
            const button = document.querySelector('button');
            const message = document.getElementById('message');

            if (!name) {
                alert('Silakan masukkan nama Anda.');
                return;
            }

            clickCount++;

            if (clickCount < maxClicks) {
                const [newX, newY] = getRandomPosition(button);
                button.style.position = 'absolute';
                button.style.transform = `translate(${newX}px, ${newY}px)`;
                message.style.display = 'block'; // Show the message
            } else {
                localStorage.setItem('name', name);
                window.location.href = 'pesan';
            }
        }
    </script>
</body>
</html>
