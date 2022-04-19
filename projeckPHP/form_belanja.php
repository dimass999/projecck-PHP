<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Form chekout</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Tugas_praktikum1.php">Praktikum 1</a>
                                    <a class="nav-link" href="form_belanja.php">Praktikum 2</a>
                                    <a class="nav-link" href="nilai.php">Praktikum 3</a>
                                    <a class="nav-link" href="class_persegipanjang.php">Praktikum 4</a>
                                    <a class="nav-link" href="dispenser.php">Praktikum 5</a>
                                    <a class="nav-link" href="HalamanBMI.php">Praktikum 6</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
				<?php


$nama = "";
$produk = "";
$jumlah = "";
$harga = "";

if (isset($_POST['proses'])) {
	$nama = $_POST['customer'];
	$produk = $_POST['produk'];
	$jumlah = $_POST['jumlah'];

	if ($produk == "Stik PS") {
		$harga = 2000000 * $jumlah;
	} elseif ($produk == "TV") {
		$harga = 5000000 * $jumlah;
	} elseif ($produk == "PS5") {
		$harga = 10000000 * $jumlah;
	}
}
?>
<?php
    include_once 'index.php';
?>
	<h1 class="mx-3">Depok GameStop</h1>

	<div class="container-fluid">
		<div class="card d-flex">
			<div class="row">
				<div class="col-8">
					<div class="Form mt-4 mx-5">
						<form action="form_belanja.php" method="post">
							<div class="form-group row">
								<label for="customer" class="col-2 col-form-label">Customer</label>
								<div class="col-4">
									<input id="customer" required name="customer" placeholder="Nama Customer" type="text" class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-2">Pilih Produk</label>
								<div class="col-8">
									<div class="custom-control custom-radio custom-control-inline">
										<input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Stik PS">
										<label for="produk_0" class="custom-control-label">Stik PS</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input name="produk" required id="produk_1" type="radio" class="custom-control-input" value="TV">
										<label for="produk_1" class="custom-control-label">TV</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input name="produk" id="produk_2" type="radio" class="custom-control-input" value="PS5">
										<label for="produk_2" class="custom-control-label">PS5</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="text" class="col-2 col-form-label">Jumlah</label>
								<div class="col-2">
									<input id="text" value="0" required name="jumlah" placeholder="Jumlah" type="number" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-1 col-8">
									<button name="proses" type="submit" class="btn btn-success">Kirim</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-4">
					<div class="list-group position-relative">
						<button type="button" class="list-group-item list-group-item-action active" aria-current="true">
							Daftar Harga :
						</button>
						<button type="button" class="list-group-item list-group-item-action">Stik PS: 2.000.000</button>
						<button type="button" class="list-group-item list-group-item-action">TV: 5.000.000</button>
						<button type="button" class="list-group-item list-group-item-action">PS5: 10.000.000</button>
						<button type="button" class="list-group-item list-group-item-action active" aria-current="true">
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="card mt-2 pb-2">
			<div class="row">
				<div class="col-12 d-flex flex-column px-4">
					<span>Nama Customer : <?= $nama; ?> </span>
					<span>Produk Pilihan : <?= $produk; ?> </span>
					<span>Jumlah : <?= $jumlah; ?></span>
					<span>Total Belanja : <?= $harga; ?></span>
				</div>
			</div>
		</div> 
	</div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>