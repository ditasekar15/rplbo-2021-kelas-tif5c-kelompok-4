<!-- untuk menu kepsek -->
<?php if (session()->idlevel == 1) : ?>
    <li class="nav-item">
        <a href="<?= site_url('home') ?>" class="nav-link active">
            <i class=" nav-icon fa fa-home"></i>
            <p>Dashboard</p>
        </a>
    </li>


    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
                Pengajuan Surat
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('pengajuanleges') ?>" class="nav-link ">
                    <i class=" far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('pengajuanmasuk') ?>" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
        </ul>
    </li>


    <li class="nav-item has-treeview <? ($currentAdminMenu == 'Pengajuansurat') ? 'menu-open' : '' ?>">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-pen-alt"></i>
            <p>
                Tanda Terima Surat
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('tandaterimaleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('tandaterimasuratmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
                Mengelola Surat
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('suratmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('suratkeluar') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Keluar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('suratleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
        </ul>
    </li>


    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
                Arsip Surat
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('arsipmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('arsipkeluar') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Keluar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('arsipleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="<?= site_url('User') ?>" class="nav-link">
            <i class="nav-icon fas fa-user-alt"></i>
            <p>User</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?= site_url('login/keluar'); ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </a>
    </li>
<?php endif; ?>

<!-- untuk menu TU -->
<?php if (session()->idlevel == 2) : ?>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-pen-alt"></i>
            <p>
                Tanda Terima Surat
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('tandaterimaleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('tandaterimasuratmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
                Mengelola Surat
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('suratmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('suratkeluar') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Keluar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('suratleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
        </ul>
    </li>


    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
                Arsip Surat
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../search/simple.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('arsipkeluar') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Keluar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('arsipleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="<?= site_url('login/keluar'); ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </a>
    </li>
<?php endif; ?>

<!-- untuk menu staff tu -->
<?php if (session()->idlevel == 3) : ?>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-pen-alt"></i>
            <p>
                Tanda Terima Surat
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('tandaterimaleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('tandaterimasuratmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
                Mengelola Surat
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('suratmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('suratkeluar') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Keluar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('suratleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
        </ul>
    </li>


    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
                Arsip Surat
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('arsipmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('arsipkeluar') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Keluar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('arsipleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="<?= site_url('login/keluar'); ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </a>
    </li>
<?php endif; ?>

<!-- untuk menu resepsionis -->
<?php if (session()->idlevel == 4) : ?>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
                Pengajuan Surat
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('pengajuanleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('pengajuanmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-pen-alt"></i>
            <p>
                Tanda Terima Surat
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('tandaterimaleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('tandaterimasuratmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="<?= site_url('login/keluar'); ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </a>
    </li>
<?php endif; ?>


<!-- untuk menu alumni -->
<?php if (session()->idlevel == 5) : ?>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
                Pengajuan Surat
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('pengajuanleges') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Leges</p>
                </a>
            </li>
        </ul>
    </li>


    <li class="nav-item">
        <a href="<?= site_url('login/keluar'); ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </a>
    </li>
<?php endif; ?>

<!-- untuk menu pihak luar -->
<?php if (session()->idlevel == 6) : ?>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
                Pengajuan Surat
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= site_url('pengajuanmasuk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
        </ul>
    </li>


    <li class="nav-item">
        <a href="<?= site_url('login/keluar'); ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </a>
    </li>
<?php endif; ?>