<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="container">
        <a href="" class="brand-link">
            <span class="brand-text font-weight-light">E-Library</span>
        </a>
    </div>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="dashboard.php?page=dashboard<?= $_SESSION['data']['Role']; ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard.php?page=databuku" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Data Buku
                        </p>
                    </a>
                </li>
                <?php
                if ($_SESSION['data']['Role'] == 'admin' || $_SESSION['data']['Role'] == 'petugas') { ?>
                    <li class="nav-item">
                        <a href="dashboard.php?page=kategoribuku" class="nav-link">
                            <i class="nav-icon fa fa-list"></i>
                            <p>
                                Kategori Buku
                            </p>
                        </a>
                    </li>
                <?php   }
                ?>
                <?php
                if ($_SESSION['data']['Role'] == 'user') { ?>
                    <li class="nav-item">
                        <a href="dashboard.php?page=koleksi" class="nav-link">
                            <i class="nav-icon fas fa-bookmark"></i>
                            <p>
                                Koleksi Pribadi
                            </p>
                        </a>
                    </li>
                <?php   }
                ?>
                <?php
                if ($_SESSION['data']['Role'] == 'admin' || $_SESSION['data']['Role'] == 'petugas') { ?>
                    <li class="nav-item">
                        <a href="dashboard.php?page=datapeminjaman" class="nav-link">
                            <i class="nav-icon fa fa-list-alt"></i>
                            <p>
                                Peminjaman
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <?php
                if ($_SESSION['data']['Role'] == 'admin') { ?>
                    <li class="nav-item">
                        <a href="dashboard.php?page=petugas" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                Petugas
                            </p>
                        </a>
                    </li>
                <?php   }
                ?>
                <li class="nav-item">
                    <a href="dashboard.php?page=ulasanbuku" class="nav-link">
                        <i class="nav-icon fas fa-comment-alt"></i>
                        <p>
                            Ulasan Buku
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=logout" onclick="return confirm('Apa anda yakin akan Logout?')" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">

            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">