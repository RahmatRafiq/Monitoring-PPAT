<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">AdminHub</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="{{ Route('Dashboard') }}">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="active">
            <a href="{{ route('Daftar Permohonan') }}">
                <i class='bx bxs-shopping-bag-alt'></i>
                <span class="text">Daftar Permohonan Surat</span>
            </a>
        </li>
        <li>
            <a href="{{ route('Daftar Pemohon') }}">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Daftar Pemohon </span>
            </a>
        </li>
        <li>
            <a href="{{ route('Status Surat Pemohon') }}">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Status Surat Pemohon </span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
