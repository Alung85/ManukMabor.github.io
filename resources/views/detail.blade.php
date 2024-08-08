<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Spesial</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('/img/detail.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            position: relative;
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
            max-width: 800px;
            background: rgba(255, 255, 255, 0.1); /* Transparan dengan opacity tinggi */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s forwards;
            text-align: center;
        }
        h1 {
            color: #fff; /* Warna putih */
            font-family: 'Great Vibes', cursive;
            font-size: 36px;
            margin-bottom: 20px;
        }
        .highlight {
            background: #ff3737; /* Merah muda lembut */
            color: #fff;
            padding: 0 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .detail-content {
            text-align: left;
            margin-top: 20px;
            font-size: 18px;
            color: #fff; /* Warna putih */
            line-height: 1.6;
        }
        .image-wrapper {
            margin: 20px 0;
        }
        .image-wrapper img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .button {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            color: #fff;
            background: #ff3737; /* Merah muda lembut */
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: background 0.3s;
        }
        .button:hover {
            background: #d87a9c; /* Warna pink lebih gelap */
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
        <h1>Detail Spesial untuk <span class="highlight" id="nameDisplay"></span></h1>

        <div class="detail-content">
            <p>Halo beb, aku buat ginian karna gabut aja si sebenernya dan juga mau minta maap kalo waktuku dikit banget buat kamu, sama makasih ya udah mau nerima aku yang yaa taulah kayak gimana ya kan.</p>
            <p>Oiya sebenernya aku juga bingung kenapa aku bisa kamu terima dan ampe sekarang juga masih heran kok bisa kamu mau sama aku, tapi makasih yaa buat waktunya selama ini padahal aku juga jarang banget ngasih waktu ke kamu.</p>
            <p style="text-align: center">Udah si itu aja, aku juga gatau mau ngetik apaan lagi</p>
        </div>
        <a href="pesan" class="button">Kembali ke Halaman Utama</a>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const name = localStorage.getItem('name');
            if (name) {
                document.getElementById('nameDisplay').textContent = name;
            } else {
                window.location.href = 'index.html';
            }
        });
    </script>
</body>
</html>
