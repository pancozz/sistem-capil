<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang Admin!</h1>


    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Pengguna</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $anggota ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Pengguna Aktif</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $anggota_aktif ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Menunggu Aktivasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $menunggu_aktivasi ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mengenai Sistem Capil</h6>
                </div>
                <div class="card-body">
                    <p>Sistem Capil adalah Sistem Informasi Pengguna Dinas Kependudukan dan Catatan Sipil Provinsi Sulsel yang dikembangkan oleh Mahasiswa UNHAS dalam mengampu mata kuliah Kerja Praktek.</p>
                    <p class="mb-0">Sistem Capil memiliki fitur menyimpan data pengguna pada Dinas Kependudukan dan Catatan Sipil Provinsi Sulsel yang terdiri dari Admin dan User.</p>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->