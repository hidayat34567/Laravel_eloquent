<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- Menentukan karakter set yang digunakan pada halaman ini (UTF-8 untuk karakter internasional) -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Mengatur tampilan halaman agar responsif di perangkat mobile -->

    <title>Eloquent Relationships : Relasi One to Many</title>
    <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- Memuat file CSS dari Bootstrap untuk styling halaman -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
        referrerpolicy="no-referrer" />
    <!-- Memuat Font Awesome untuk penggunaan ikon-ikon seperti ikon komentar -->

</head>

<body>
    <div class="container">
        <!-- Container utama yang membungkus seluruh konten agar rapi dan responsif -->
        <div class="card mt-5">
            <div class="card-body">
                <!-- Card untuk membungkus konten agar lebih terstruktur dan rapi -->
                <h3 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h3>
                <!-- Judul situs yang ditautkan ke URL -->
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To Many</h5>
                <!-- Deskripsi singkat yang menjelaskan topik halaman -->
                <table class="table table-bordered table-striped">
                    <!-- Tabel untuk menampilkan data post dan komentar -->
                    <thead>
                        <tr>
                            <th>Judul Post</th>
                            <!-- Kolom untuk menampilkan judul post -->
                            <th>Komentar</th>
                            <!-- Kolom untuk menampilkan komentar terkait post -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <!-- Looping untuk menampilkan setiap post yang ada -->
                            <tr>
                                <td>{{ $post->title }}</td>
                                <!-- Menampilkan judul post -->
                                <td>
                                    @foreach ($post->comments()->get() as $comment)
                                        <!-- Looping untuk menampilkan komentar-komentar terkait post ini -->
                                        <div class="card shadow-sm mb-2">
                                            <!-- Menampilkan setiap komentar dalam kartu kecil -->
                                            <div class="card-body">
                                                <!-- Menampilkan ikon komentar menggunakan Font Awesome -->

                                                <i class="fa fa-comments"></i> {{ $comment->comment }}
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
