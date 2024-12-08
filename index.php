<?php
$questions = [
    1 => "Jelaskan apa itu PHP?",
    2 => "Sebutkan keunggulan PHP dibandingkan dengan bahasa pemrograman lainya dalam konteks pengembangan web?",
    3 => "Jelaskan perbedaan metode GET dan POST dalam penggunaan di sebuah website.",
    4 => "Berikan contoh kasus penggunaan yang tepat untuk masing-masing metode.",
    5 => "Jelaskan fungsi include dan require dalam PHP, termasuk perbedaan mendasar antara keduanya.",
    6 => "Berikan contoh implementasi sederhana untuk menyambungkan PHP dengan database MySQL.",
    7 => "Mengapa penggunaan include dan require penting dalam pengelolaan kode program yang besar dan kompleks?"
];

$answers = [
    1 => "PHP merupakan singkatandari PHPHypertext Preprocessor. PHP merupakan bahasa pemrogramanscriptyang  diletakkan  dalam  server  yang  biasa  digunakan  untuk  membuat  aplikasi  web  yang  bersifatdinamis. Hypertext Preprocessor atau lebih akrab dengan sapaan PHP merupakan bahasa pemrograman script server-side yang didesain untuk pengembangan web",
    2 => "PHP disebut bahasa pemrograman server-side karena diproses pada komputer server. Hal ini berbeda dengan bahasa pemrograman client-side seperti Javascript yang diproses di dalam web browser. PHP dapat digunakan secara gratis dan bersifat Open Source. PHP dirilis dalam lisensi PHP License, sedikit berbeda dengan lisensi GNU General Public License yang biasa digunakan untuk proyek Open Source.",
    3 => "$ GET Merupakan variable yang dihasilkan oleh query string URL atau melalui HTTP GET. $ GET sangat berhubungan dengan penerimaan data yang berasal dari halaman website diluar PHP, terutama variable yang berasal dari FORM HTML yang menggunakan method GET. Analogi $ GET untuk PHP versi sebelumnya adalah $ HTTP GET VARS.$ POST Merupakan variable yang dihasilkan melalui HTTP POST. $ POST sangat berhubungan dengan penerimaan data yang berasal dari halaman website diluar PHP, terutama variable yang berasal dari FORM HTML yang menggunakan method POST. Analogi $ POST untuk PHP versi sebelumnya adalah SHTTP POST VARS",
    4 => "Saat mengakses halaman index.html akan tampil tampilan, yang merupakan salah satu dari request klien, dari request klien tersebut yang mana akan tampil respon dari server,Untuk POST bahwa pada field yang kosong diisi sesusai yang diinginkan fieldnya sendiri.menunjukan bahwa klien ingin merequest hasil dari pengisian field tersebut yang mana nantinya yang diserver terjadi proses POST ",
    5 => "Terkait dengan fungsi include(), manual PHP menyatakan bahwa “The include statement includes and evaluates the specified file”. Artinya fungsi include() akan menyertakan dan mengevaluasi seluruh program yang ada di file yang disertakan Perintah require() pada dasarnya sama dengan perintah include(). Perbedaannya hanya terletak pada saat file yang disertakan tidak ditemukan, maka perintah-perintah selanjutnya tidak akan dijalankan",
    6 => "Aplikasi Berita dengan PHP dan MySQL Merancang Struktur Database, Merancang Struktur Database ,Membuat File Koneksi Database ,Membuat Halaman Input Berita ,Menampilkan Berita Terbaru di Halaman Depan ,Menampilkan Berita Lengkap ,Membuat Halaman Arsip Berita ,Membuat Halaman Edit Berita ,Membuat Halaman Delete Berita ,CSS sebagai Pemanis Tampilan",
    7 => "require_once memastikan file hanya dimuat sekali, mencegah duplikasi dan potensi error. Intinya, include dan require adalah mekanisme penting dalam PHP untuk membuat kode lebih terstruktur, modular, dan mudah dipelihara, terutama pada proyek-proyek besar dan kompleks"
];

$questionNumber = isset($_GET['question']) ? (int)$_GET['question'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN TEORI</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #ffffffd2;
            padding: 15px;
        }
        .content {
            flex-grow: 1;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>DAFTAR SOAL</h4>
        <div class="d-grid gap-2">
            <?php foreach ($questions as $key => $question): ?>
                <button class="btn btn-outline-primary" onclick="showAnswer(<?= $key ?>)">Soal <?= $key ?>: <?= htmlspecialchars($question, ENT_QUOTES, 'UTF-8') ?></button>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="content">
        <h1 class="text-primary">LAPORAN TEORI</h1>
        <h2 class="text-secondary">Meutia Ananda | 202331246 </h2>
        <div id="question-answer">
            <?php if ($questionNumber && isset($answers[$questionNumber])): ?>
                <h4>Soal <?= $questionNumber ?>: <?= htmlspecialchars($questions[$questionNumber], ENT_QUOTES, 'UTF-8') ?></h4>
                <p><?= $answers[$questionNumber] ?></p>
            <?php else: ?>
                <p>Klik salah satu soal di sidebar untuk melihat jawabannya.</p>
            <?php endif; ?>
        </div>
    </div>

    <script>
        function showAnswer(questionNumber) {
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.set('question', questionNumber);
            window.location.search = urlParams.toString();
        }
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

