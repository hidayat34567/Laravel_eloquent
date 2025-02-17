<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Menentukan karakter set yang digunakan pada halaman ini (UTF-8 untuk karakter internasional) -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Mengatur tampilan halaman agar responsif di perangkat mobile -->
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>
    <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- Memuat file CSS dari Bootstrap untuk styling halaman -->
</head>

<body>
    <div class="container">
        <!-- Container utama yang membungkus seluruh konten agar rapi dan responsif -->
        <div class="card mt-5">
            <!-- Card untuk membungkus konten, memberi margin atas, dan membuat tampilannya lebih rapi -->
            <div class="card-body">
                <h3 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h3>
                <!-- Judul situs yang ditautkan ke URL -->
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To One & Many To Many</h5>
                <!-- Deskripsi singkat yang menjelaskan topik halaman -->
                <table class="table table-bordered table-striped">
                    <!-- Tabel untuk menampilkan data user, nomor telepon, dan roles -->
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <!-- Kolom untuk menampilkan nama user -->
                            <th>Nomor Telepon</th>
                            <!-- Kolom untuk menampilkan nomor telepon user -->
                            <th>Roles</th>
                            <!-- Kolom untuk menampilkan roles yang dimiliki user -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <!-- Looping untuk menampilkan data setiap user -->
                            <tr>

                                <td>{{ $user->name }}</td>
                                <!-- Menampilkan nama user -->
                                <td>{{ $user->phone->phone }}</td>
                                <!-- Menampilkan nomor telepon user yang memiliki relasi One to One dengan model Phone -->
                                <td>

                                    @foreach ($user->roles()->get() as $role)
                                        <!-- Looping untuk menampilkan setiap role yang dimiliki user (Many to Many relationship) -->
                                        <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
                                        <!-- Menampilkan role dalam bentuk button kecil dengan warna primer -->
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
