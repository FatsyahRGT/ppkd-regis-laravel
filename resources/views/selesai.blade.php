<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pengiriman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .container img {
            max-width: 150px;
            margin-bottom: 20px;
        }
        .container h2 {
            margin-bottom: 20px;
        }
        .container p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .btn-home {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
        .btn-home:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Tambahkan logo di sini -->
        <div class="text-center">
            <img src="{{asset('storage/image/logo.png')}}" alt="Logo PPKD">
        </div>

        <h2>Terima Kasih!</h2>
        <p>Data Anda telah berhasil dikirim. Kami akan memproses pendaftaran Anda dan menghubungi Anda jika diperlukan.</p>
        <a href="{{ route('welcome') }}" class="btn-home">Kembali ke Beranda</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
