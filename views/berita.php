<?php
// Cek role user
if($_SESSION['role'] == 'admin'){ // Jika role-nya admin
    ?>
    <div class="pull-right">
        <a href="" class="btn btn-success">TAMBAH DATA</a>
    </div>
    <?php
}
?>

<h2 style="margin-top: 0;margin-bottom: 0;">Berita</h2>
<div class="clearfix"></div>
<hr />

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th style="width: 80px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Enam Bulan Gelar Operasi Yustisi di Kabupaten Tapin, Ribuan Warga Ditegur Lesan</td>
                <td>Hingga kini kegiatan operasi yustisi gabungan dalam rangka menekan lajunya perkembangan kasus Covid-19 di Kabupaten Tapin terus berlanjut.</td>
                <td>3 jam lalu</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>VIDEO Lamanya Antrean Vaksinasi di Tapin Utara, 100 Warga Nunggu Dua Bulan Setelah Daftar</td>
                <td>Warga Kecamatan Tapin Utara, Kabupaten Tapin harus mengantri selama dua bulan untuk bisa mendapatkan vaksinasi.</td>
                <td>5 jam lalu</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>VIDEO PPKM Level 3 Diperpanjang, Pemkab Tapin Gelar Rakor Percepatan Penanganan Covid-19</td>
                <td>BANJARMASINPOST.CO.ID, RANTAU - Pemerintah Kabupaten Tapin gelar rapat kordinasi percepatan penanganan covid-19 di Kabupaten Tapin bertempat ...</td>
                <td>1 Hari lalu</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
