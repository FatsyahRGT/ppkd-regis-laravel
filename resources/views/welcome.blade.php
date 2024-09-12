<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Calon Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .description {
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="form-title">Pendaftaran Calon Peserta</h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<body>
    <div class="container">
        
        <p class="description">
            Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Pusat membuka kembali pelatihan kerja untuk meningkatkan kompetensi warga DKI Jakarta agar mampu bersaing di dunia kerja. <br>
            Adapun Pelatihan yang diselenggarakan adalah :
            <ul>
                <li>Operator Komputer</li>
                <li>Bahasa Inggris</li>
                <li>Desain Grafis</li>
                <li>Tata Boga</li>
                <li>Tata Busana</li>
                <li>Tata Graha</li>
                <li>Teknik Pendingin</li>
                <li>Teknik Komputer</li>
                <li>Otomotif Sepeda Motor</li>
                <li>Jaringan Komputer</li>
                <li>Barista</li>
                <li>Bahasa Korea</li>
                <li>Make Up Artist</li>
                <li>Multimedia - Video Editor</li>
                <li>Content Creator</li>
                <li>Web Programming</li>
            </ul>
            Setelah mendaftar, pastikan syarat pendaftaran berikut sudah disiapkan:
            <ul>
                <li>Fotocopy KTP DKI Jakarta</li>
                <li>Fotocopy Kartu Keluarga</li>
                <li>Fotocopy ijazah terakhir</li>
                <li>Fotocopy Pas foto 3 x 4 (latar belakang merah)</li>
                <li>Fotocopy Sertifikat Vaksin Covid-19</li>
                <li>Surat Keterangan Domisili DKI Jakarta bagi KTP Luar DKI Jakarta</li>
            </ul>
            * Semua persyaratan tersebut dipersiapkan ketika anda lolos tahap seleksi <br><br>
            Waktu pelatihan: Daftar Segera <br>
            Hari pelatihan: Senin – Jumat <br>
            Pukul: 08.00 – 15.00 WIB <br><br>
            *Keputusan hasil seleksi berlaku mutlak dan tidak bisa diganggu gugat.
        </p>       
    </div>
</body>
<body>
    <div class="container">
        <h2 class="form-title">Data Calon Peserta</h2>
        <form action="/submit" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">NIK(Nomor Induk Keluarga)</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Kartu Keluarga</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Jenis Kelamin</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Tempat Lahir</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Tanggal Lahir</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Pendidikan Terakhir</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Nama Sekolah</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Jurusan</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Nomor HP</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Email</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Aktivitas Saat Ini</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Status</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
        </form>
    </div>
</body>

<body>
    <div class="container">
        <h2 class="form-title">Pilih Jurusanmu!!</h2>
        <form action="/submit" method="POST">
            @csrf
            <div class="mb-3">
                <label for="program" class="form-label">Program Pilihan</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program1" value="program-1" required>
                    <label class="form-check-label" for="program1">Operator Komputer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program2" value="program-2" required>
                    <label class="form-check-label" for="program2">Bahasa Inggris</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program3" value="program-3" required>
                    <label class="form-check-label" for="program3">Desain Grafis</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program4" value="program-4" required>
                    <label class="form-check-label" for="program4">Tata Boga</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program5" value="program-5" required>
                    <label class="form-check-label" for="program5">Tata Busana</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program6" value="program-6" required>
                    <label class="form-check-label" for="program6">Tata Graha</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program7" value="program-7" required>
                    <label class="form-check-label" for="program7">Teknik Pendingin</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program8" value="program-8" required>
                    <label class="form-check-label" for="program8">Teknik Komputer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program9" value="program-9" required>
                    <label class="form-check-label" for="program9">Otomotif Sepeda Motor</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program10" value="program-10" required>
                    <label class="form-check-label" for="program10">Jaringan Komputer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program11" value="program-11" required>
                    <label class="form-check-label" for="program11">Bahasa Korea</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program12" value="program-12" required>
                    <label class="form-check-label" for="program12">Make Up Artist</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program13" value="program-13" required>
                    <label class="form-check-label" for="program13">Multimedia - Video Editor</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program14" value="program-14" required>
                    <label class="form-check-label" for="program14">Content Creator</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" id="program15" value="program-15" required>
                    <label class="form-check-label" for="program15">Make Up Artist</label>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<body>
    <div class="container">
        <h2 class="form-title">Pilih Jurusanmu!!</h2>
        <form action="/submit" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Angkatan 1 2024</label>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Angkatan 2 2024</label>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Angkatan 3 2024</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


