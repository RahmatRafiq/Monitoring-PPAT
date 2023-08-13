<section id="content">
    <!-- NAVBAR -->
    @include('backend.includes.navbar')
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="#">Daftar Permohonan</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class="bx bxs-cloud-download"></i>
                <span class="text">Download PDF</span>
            </a>
        </div>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Daftar Permohonan</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>jenis Layanan</th>
                            <th>Jenis Surat</th>
                            <th>Nama Pemohon</th>
                            <th>Tanggal Permohonan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
