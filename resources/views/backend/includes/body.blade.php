<section id="content">
    @include('backend.includes.navbar')
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download'></i>
                <span class="text">Download PDF</span>
            </a>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>137</h3>
                    <p>Permohonan Surat</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>123</h3>
                    <p>Pengguna</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>871</h3>
                    <p>Permohonan Bulan ini</p>
                </span>
            </li>
        </ul>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>137</h3>
                    <p>Surat Yang Terbit</p>
            </li>
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>123</h3>
                    <p>Pemohon Dengan Dokumen Tidak Lengkap</p>
                </span>
            </li>
        </ul>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Jensi Surat Dengan Permohonan Tertinggi</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis Layanan</th>
                            <th>Jenis Surat</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            {{-- <div class="todo">
                <div class="head">
                    <h3>Top 5 Perubahan Harga Terendah</h3>
                    <i class='bx bx-plus'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <ul class="todo-list">

                </ul>
            </div>
            <div class="todo">
                <div class="head">
                    <h3>Top 5 Perubahan Harga Tertinggi</h3>
                    <i class='bx bx-plus'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <ul class="todo-list">

                </ul>
            </div> --}}
        </div>
    </main>
    <!-- MAIN -->
</section>
