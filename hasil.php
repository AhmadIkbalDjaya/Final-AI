<?php
    $V=0;
    $A=0;
    $R=0;
    $K=0;
    $gayaBelajar = "Gaya Belajar Tidak Diketahui";
    if(isset($_POST['submit'])){
        for($x=1; $x<=16; $x++){
            if($_POST["pil-soal-$x"]=='V'){
                $V = $V + 6.25;
            }
            else if($_POST["pil-soal-$x"]=='A'){
                $A = $A + 6.25;
            }
            else if($_POST["pil-soal-$x"]=='R'){
                $R = $R + 6.25;
            }
            else if($_POST["pil-soal-$x"]=='K'){
                $K = $K + 6.25;
            }
        }
        if($V>$A AND $V>$R AND $V>$K){
            $gayaBelajar = "Gaya belajar anda adalah Visual";
        }
        if($A>$V AND $A>$R AND $A>$K){
            $gayaBelajar = "Gaya belajar anda adalah Aural";
        }
        if($R>$V AND $R>$A AND $R>$K){
            $gayaBelajar = "Gaya belajar anda adalah Read/Write";
        }
        if($K>$V AND $K>$A AND $K>$R){
            $gayaBelajar = "Gaya belajar anda adalah Kinestetik";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Hasil Kuesioner Vark</h1>
        <div class="col-md-4">
            <h4>Hasil Anda Adalah</h4>
            <table class="table">
                <tr>
                    <td>Visual</td>
                    <td><?=$V?>%</td>
                </tr>
                <tr>
                    <td>Aural</td>
                    <td><?=$A?>%</td>
                </tr>
                <tr>
                    <td>Read/Write</td>
                    <td><?=$R?>%</td>
                </tr>
                <tr>
                    <td>Khinestetik</td>
                    <td><?=$K?>%</td>
                </tr>
            </table>
        </div>
        <h2>
            <?=$gayaBelajar?>
        </h2>
        <br><br>
        <?php if($gayaBelajar == "Gaya belajar anda adalah Visual") :?>
        <div class="strategiBelajar">
            <h1>Strategi belajar bagi tipe visual</h1>
            <div class="content">
                <p>Jika anda tergolong tipe <strong>Visual</strong>, sebaiknya anda mengikuti tips-tips di bawah ini</p>
                <h3>Penerimaan</h3>
                <h5>cara mudah menerima informasi</h5>
                <ul>
                    <li>menggarisbawahi, memakai beragam warna, menandai dengan spidol</li>
                    <li>memakai diagram alir</li>
                    <li>memakai buku ajar yang banyak diagram dan gambarnya</li>
                    <li>menyimak pembicara yang banyak menggunakan bahasa tubuh, mimik, dan bahasa gambar</li>
                    <li>memakai grafik</li>
                    <li>ruang kosong (di kertas atau di layar)</li>
                </ul>
                <h3>Belajar Tidak Pakai Susah &#8211; (TIPS)</h3>
                <ul>
                    <li>gunakan semua teknik di atas</li>
                    <li>gambar ulang dengan cara sendiri &#8211; mencoba-coba berbagai variasi pengaturan ruang</li>
                    <li>gambar ulang berdasarkan ingatan semata-mata</li>
                    <li>ganti kata-kata dengan simbol atau singkatan</li>
                    <li>amati dengan seksama halaman catatan yang dibuat</li>
                    <li>rangkum &#8220;catatan&#8221; anda menjadi paket yang lebih kecil, misalnya dari 3 halaman tulisan menjadi 1 halaman gambar</li>
                </ul>
                <h3>Luaran</h3>
                <h5>cara sukses menghadapi ujian</h5>
                <ul>
                    <li>banyak-banyak menggambar dan membuat diagram</li>
                    <li>tuliskan jawaban atau kisi-kisi jawaban ujian</li>
                    <li>ingat-ingat hasil gambar sendiri</li>
                    <li>berlatih mengubah gambar sendiri menjadi kata dan kalimat</li>
                </ul>
                <p style="text-align: center;"><em>Anda perlu gambaran besar dari suatu konsep jadi sepertinya pola pikir anda cenderung menyeluruh, bukan pendekatan reduksionis yang menyederhanakan segala sesuatu. Anda biasanya terlena oleh bentuk suatu benda. Anda menyukai warna, tata letak, dan desain; anda paham posisi anda dalam lingkungan anda. Sehabis ini mungkin anda akan menggambar sesuatu</em></p>
            </div>
        </div>
        <?php endif ?>
        <?php if($gayaBelajar == "Gaya belajar anda adalah Aural") :?>
        <div class="strategiBelajar">
            <h1>Strategi belajar bagi tipe aural/ auditorik</h1>
            <div class="content">
                <p>Jika anda tergolong tipe <strong>Aural</strong> (A = pengucap &amp; pendengar), sebaiknya anda mengikuti tips-tips di bawah ini</p>
                <h3>Penerimaan</h3>
                <h5>cara mudah menerima informasi</h5>
                <ul>
                    <li>hadir dalam kelas</li>
                    <li>hadir dalam diskusi kelompok, tutorial dan semacamnya</li>
                    <li>berdiskusi dengan orang lain</li>
                    <li>berdiskusi dengan pengajar (guru, dosen, asisten, dan lain-lain)</li>
                    <li>jelaskan ide yang baru ditangkap ke orang lain</li>
                    <li>memakai perekam suara</li>
                    <li>mengingat kisah, contoh, atau candaan yang menarik</li>
                    <li>menjelaskan tampilan di layar atau di papan tulis kepada orang yang tidak melihat langsung tampilan itu</li>
                    <li>hilangkan sedikit informasi di catatan anda supaya memicu anda untuk mengingat-ingat</li>
                </ul>
                <h3>Belajar Tidak Pakai Susah &#8211; (TIPS)</h3>
                <ul>
                    <li>Tidak perlu sedih kalau catatan anda jelek karena anda lebih suka mendengar. Anda perlu mengembangkan catatan anda dengan bicara ke orang lain dan mengumpulkan informasi dari buku ajar.</li>
                    <li>Rekam rangkuman catatan anda dan dengarkan rekaman tersebut<br />Minta teman anda mendengar penjelasan anda mengenai materi yang anda pelajari</li>
                    <li>Ucapkan keras-keras rangkuman catatan anda</li>
                    <li>Sampaikan catatan anda ke sesama tipe aural/ auditorik</li>
                    <li>Rangkum catatan anda menjadi paket kecil sampai kira-kira sepertiganya saja</li>
                </ul>
                <h3>Luaran</h3>
                <h5>cara sukses menghadapi ujian</h5>
                <ul>
                    <li>bayangkan anda bicara di depan penguji, khususnya pada ujian lisan</li>
                    <li>Dengarkan suara anda sendiri terlebih dahulu baru catat kemudian</li>
                    <li>Cari tempat yang tenang untuk mengingat-ingat materi belajar anda</li>
                    <li>berlatih menulis jawaban dari kumpulan soal-soal lama atau kisi-kisi soal ujian</li>
                </ul>
                <p style="text-align: center;"><em>Anda lebih suka jika seluruh halaman situs ini diucapkan/ dijelaskan ke anda. </em><br /><em>Anda lebih menghargai hal yang anda dengar daripada sekedar tulisan </em><br /><em>Sehabis ini mungkin anda akan bercerita ke seseorang tentang ini</em></p>
            </div>
        </div>
        <?php endif ?>
        <?php if($gayaBelajar == "Gaya belajar anda adalah Read/Write") :?>
        <div class="strategiBelajar">
            <h1>Strategi belajar bagi tipe pembaca/ penulis teks</h1>
            <div class="content">
                <p>Jika anda tergolong tipe <strong>Pembaca dan Penulis, (R)</strong>, sebaiknya anda mengikuti tips-tips di bawah ini</p>
                <h3>Penerimaan</h3>
                <h5>cara mudah menerima informasi</h5>
                <ul>
                    <li>membaca daftar</li>
                    <li>membaca judul, subjudul, sub-subjudul dan seterusnya</li>
                    <li>membaca kamus</li>
                    <li>membaca daftar istilah</li>
                    <li>membaca definisi atau pengertian</li>
                    <li>membaca diktat</li>
                    <li>membaca buku ajar</li>
                    <li>membaca di perpustakaan</li>
                    <li>membuat catatan yang detail (biasanya sampai kata-per-kata)</li>
                    <li>mendengar pembicara yang fasih memakai kata-kata dan kalimat yang penuh dengan informasi<br />membaca esai/ uraian</li>
                    <li>membaca petunjuk kerja (dalam hal komputer atau di laboratorium)</li>
                </ul>
                <h3>Belajar Tidak Pakai Susah &#8211; (TIPS)</h3>
                <ul>
                    <li>Tulis kata dan kalimat berulang-ulang</li>
                    <li>Ucapkan catatan anda berulang-ulang dalam hati</li>
                    <li>Tulis ulang suatu ide atau konsep dengan menggunakan kata dan kalimat lain</li>
                    <li>Susun berbagai gambar atau grafik menjadi kalimat, misalnya &#8220;Gambar-gambar ini kecenderungan…&#8221;</li>
                    <li>Ubah tindakan, reaksi, diagram, dan urutan peristiwa menjadi kalimat</li>
                    <li>Bayangkan daftar yang anda buat berubah menjadi pilihan-pilihan jawaban pada soal dan nyatakan perbedaan masing-masing pilihan tersebut</li>
                    <li>Rangkum catatan anda menjadi paket kecil sampai kira-kira sepertiganya saja</li>
                </ul>
                <h3>Luaran</h3>
                <h5>cara sukses menghadapi ujian</h5>
                <ul>
                    <li>Tulis jawaban ujian dari soal lama atau soal kisi-kisi</li>
                    <li>Berlatih membuat dan menjawab sendiri soal pilihan ganda</li>
                    <li>Berlatih menulis paragraf, kata-kata pendahuluan, dan kata-kata penutup</li>
                    <li>Sering-sering membuat daftar (a,b,c,d,1,2,3,4).</li>
                    <li>Susun ulang suatu kalimat menjadi hirarki (urutan) dan pokok-pokok penting</li>
                </ul>
                <p style="text-align: center;"><em>Anda suka halaman ini karena banyak daftar dan kata-katanya</em><br /><em>Anda meyakini kekuatan kata-kata tertulis, jadi lebih baik jika semua ucapannya ada tulisannya</em><br /><em>Sehabis ini mungkin anda akan pergi ke perpustakaan</em></p>
            </div>
        </div>
        <?php endif ?>
        <?php if($gayaBelajar == "Gaya belajar anda adalah Kinestetik") :?>
        <div class="strategiBelajar">
            <h1>Strategi belajar bagi tipe kinestetik</h1>
            <div class="content">
                <p>Jika anda tergolong tipe <strong>Kinestetik</strong>, sebaiknya anda mengikuti tips-tips di bawah ini</p>
                <h3>Penerimaan</h3>
                <h5>cara mudah menerima informasi</h5>
                <ul>
                    <li>menggunakan semua indera &#8211; melihat, menyentuh, mengecap, menghirup, mendengar…</li>
                    <li>bekerja di laboratorium</li>
                    <li>mengikuti belajar lapangan</li>
                    <li>mengikuti tur lapangan</li>
                    <li>memakai contoh penerapan prinsip-prinsip</li>
                    <li>mengikuti pembicara yang sering memberi contoh kehidupan nyata</li>
                    <li>menggunakan penerapan/ aplikasi langsung</li>
                    <li>mencoba sendiri (khususnya di bidang komputer)</li>
                    <li>mencoba-coba dan belajar dari kesalahan</li>
                    <li>mengumpulkan hal yang bisa dikoleksi, misalnya tipe-tipe batuan, cangkang, rerumputan, dll</li>
                    <li>menghadiri pameran, percontohan, dan mengambil foto</li>
                    <li>mengikuti prosedur atau resep &#8211; menggunakan jalan keluar atau jawaban dari soal/ permasalahan sebelumnya</li>
                </ul>
                <h3>Belajar Tidak Pakai Susah &#8211; (TIPS)</h3>
                <ul>
                    <li>Tidak perlu sedih kalau catatan anda jelek, khususnya pada topik yang anda anggap kurang nyata atau kurang relevan</li>
                    <li>Anda lebih mudah mengingat peristiwa yang betul-betul terjadi</li>
                    <li>Gunakan contoh-contoh yang banyak. Gunakan contoh kasus dan penerapan konsep untuk memahami konsep dan prinsip yang abstrak atau rumit</li>
                    <li>Bahas catatan anda dengan ke sesama tipe kinestetik</li>
                    <li>gunakan gambar atau foto yang mengungkapkan suatu ide</li>
                    <li>Sering-sering bekerja di laboratorium atau minimal membaca petunjuk kerja laboratorium</li>
                    <li>Ingat-ingat praktikum, belajar lapangan, dan kegiatan serupa yang sudah diikuti</li>
                    <li>Rangkum catatan anda menjadi paket kecil sampai kira-kira sepertiganya saja</li>
                </ul>
                <h3>Luaran</h3>
                <h5>cara sukses menghadapi ujian</h5>
                <ul>
                    <li>Tulis jawaban dari soal-soal ujian lama atau kisi-kisi soal</li>
                    <li>Bermain peran bersama teman sebelum ujian, khususnya pada ujian lisan/ ujian praktik</li>
                </ul>
                <p style="text-align: center;"><em>Anda perlu mengalami sendiri sebelum anda dapat memahami. </em><br /><em>Ide-ide di halaman ini hanya berharga jika bisa dipraktikkan, bersifat nyata, dan relevan dengan kondisi anda</em><br /><em>Anda perlu mengerjakan sesuatu untuk memahami hal tersebut</em></p>
            </div>
        </div>
        <?php endif ?>
    </div>
</body>
</html>