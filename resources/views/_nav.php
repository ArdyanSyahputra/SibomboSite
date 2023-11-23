<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item" style="padding-top: 8px;">
            <b>Bengkel <!-- Your variable $tipeToko here --></b>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="antrian-servis" target="_blank" class="nav-link">Antrian Servis <i class="fa fa-desktop"></i></a>
        </li>
        <li class="nav-item">
            <a href="aksi/logout.php?logout" onclick="return confirm('Apakah anda yakin logout ?')" class="nav-link">Logout <i class="fa fa-sign-out"></i></a>
        </li>
    </ul>
</nav>

<div class="modal fade" id="modal-id-cabang">
    <div class="modal-dialog">
        <form role="form" action="" method="POST">
            <div class="modal-content">
                <div class="modal-header" style="padding-bottom: 0px;">
                    <p><b>Lokasi Toko: <!-- Your variable $tipeToko here --></b></p>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <select class="form-control select2bs4" required="" name="user_cabang">
                        <option selected="selected" value="">-- Pilih Cabang --</option>
                        <!-- Loop through your dataPilihCabang array and replace PHP code accordingly -->
                    </select>
                    <input type="hidden" name="user_id" value="<!-- Your session user_i
