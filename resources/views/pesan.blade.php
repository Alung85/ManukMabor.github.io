<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan untuk Seseorang</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('/img/rose.jpg') no-repeat center bottom;
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            position: relative;
            transition: opacity 1s ease-in;
        }
        body.fade-in {
            opacity: 1;
        }
        body.fade-out {
            opacity: 0;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: -1;
        }
        .container {
            max-width: 600px;
            background: rgba(255, 255, 255, 0.1); /* Transparan */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s forwards;
            text-align: center;
        }
        h1 {
            color: #fff;
            font-family: 'Great Vibes', cursive;
        }
        p {
            font-size: 16px;
            color: #fff;
            line-height: 1.6;
            margin: 10px 0;
        }
        .highlight {
            background: #ff3737;
            color: #fff;
            padding: 0 5px;
            border-radius: 3px;
            font-weight: bold;
        }
        blockquote {
            font-style: italic;
            color: #ddd;
            border-left: 4px solid #ff3737;
            padding-left: 15px;
            margin: 20px 0;
        }
        .signature {
            font-family: 'Dancing Script', cursive;
            font-size: 20px;
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
        <h1>Pesan untuk <span class="highlight" id="nameDisplay"></span></h1>
        <p>Halo <span class="highlight" id="nameDisplay2"></span>,</p>
        <blockquote>
            "Halo buat gatau siapa yang akses ini tapi ini cuman coba coba dikit"
        </blockquote>
        <p>Tapi pesan ini ditujukan buat seseorang yang spesial dan sangat istimewa.</p>
        <p></p>
        <p>Dibuat karena gabut</p>
        <p class="signature">[Saya Siapa]</p>
        <p><a href="detail" style="color: #ff4d4d; text-decoration: none;">Klik di sini untuk melihat lebih banyak</a></p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const name = localStorage.getItem('name');
            if (name) {
                document.getElementById('nameDisplay').textContent = name;
                document.getElementById('nameDisplay2').textContent = name;
                document.body.classList.add('fade-in');
            } else {
                window.location.href = 'index.html';
            }
        });
    </script>
</body>
</html>
