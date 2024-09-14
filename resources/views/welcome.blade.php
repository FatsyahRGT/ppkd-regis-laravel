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
        .small-font {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="form-title">Pendaftaran Calon Peserta</h2>
        <!-- Tambahkan logo di sini -->
        <div class="text-center">
            <img src="{{asset('storage/image/logo.png')}}" alt="Logo PPKD" class="img-fluid" style="max-width: 200px;">
            <img src="{{asset('storage/image/jakpus.jpg')}}" alt="Logo PPKD" class="img-fluid" style="max-width: 200px;">
        </div>

        <p class="description">
            Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Pusat membuka kembali pelatihan kerja untuk meningkatkan kompetensi warga DKI Jakarta agar mampu bersaing di dunia kerja. <br>
            Adapun Pelatihan yang diselenggarakan adalah:
            <ul class="small-font">
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
            <ul class="small-font">
                <li>Fotocopy KTP DKI Jakarta</li>
                <li>Fotocopy Kartu Keluarga</li>
                <li>Fotocopy ijazah terakhir</li>
                <li>Fotocopy Pas foto 3 x 4 (latar belakang merah)</li>
                <li>Fotocopy Sertifikat Vaksin Covid-19</li>
                <li>Surat Keterangan Domisili DKI Jakarta bagi KTP Luar DKI Jakarta</li>
            </ul>
        </p>
        

        <!-- Form pendaftaran -->
        <form action="{{ route('action-form') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>

            <div class="mb-3">
                <label for="nik" class="form-label">NIK (Nomor Induk Keluarga)</label>
                <input type="text" class="form-control" id="nik" name="nik" required>
            </div>

            <div class="mb-3">
                <label for="kartu_keluarga" class="form-label">Kartu Keluarga</label>
                <input type="text" class="form-control" id="kartu_keluarga" name="kartu_keluarga" required>
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
            </div>

            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <div class="mb-3">
                <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
            </div>

            <div class="mb-3">
                <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" required>
            </div>

            <div class="mb-3">
                <label for="kejuruan" class="form-label">Kejuruan</label>
                <input type="text" class="form-control" id="kejuruan" name="kejuruan" required>
            </div>

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" id="jurusan" name="jurusan" required>
                    <option value="" disabled selected>Pilih jurusan</option>
                    @foreach ($jurusans as $j)
                        <option value="{{$j->id}}">{{$j->nama_jurusan}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="aktivitas_saat_ini" class="form-label">Aktivitas Saat Ini</label>
                <input type="text" class="form-control" id="aktivitas_saat_ini" name="aktivitas_saat_ini" required>
            </div>

            <div class="mb-3">
                <label for="gelombang" class="form-label">Gelombang Yang Tersedia</label>
                <select class="form-select" name="gelombang" id="gelombang" required>
                    <option value="" disabled selected>Pilih gelombang</option>
                    @foreach ($gelombangs as $g)
                        <option value="{{ $g->id }}">{{ $g->nama_gelombang }} 2024 </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
