<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing Page Smart English">
    <meta name="author" content="Kelompok 4 C2 2020">
    <title>Smart English Jatiuwung - Landing Page</title>
    <link rel="icon" href="pics/Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/styleReg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap');
    </style>
</head>
<header class="container-fluid bg-white sticky-top py-1" id="nav">
    <div class="container-fluid px-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between" id="header">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-md-3 me-1" width="81" src="pics/Logo.png">
            <h3 style="color: #06B6D4;">Smart English</h3>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fw-bold">
            <li><a href="/" class="nav-link px-md-4 link-dark">Home</a></li>
            <li><a href="/programs" class="nav-link px-md-4 link-dark">Program</a></li>
            <li><a href="/article" class="nav-link px-md-4 link-dark">Article</a></li>
            <li><a href="/contact" class="nav-link px-md-4 link-dark">Contact</a></li>
            <li><a href="/about" class="nav-link px-md-4 link-dark">About</a></li>
        </ul>

        <div class="col-md-3 col-0"></div>
    </div>
</header>

<body class="bg-light">
    <div class="container-fluid mt-3">
        <div class="d-flex align-items-center float-end">
            <select class="form-select bg-light border-0" aria-label="Default select example">
                <option value="Indonesia" selected>Indonesia</option>
                <option value="English">English</option>
            </select>
        </div>
    </div>

    <section class="container-fluid py-5">
        <div class="container-md bg-white" id="bgReg">
            <div class="row text-center py-3" id="navReg">
                <div class="col-6">
                    <ul class="nav justify-content-center">
                        <li>
                            <a href="/login" class="nav-link link-dark text-muted">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="nav justify-content-center">
                        <li>
                            <a href="/register" class="nav-link" style="color: #06B6D4;">
                                Register
                            </a>
                            <div id="activeNav">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>

            <div class="container-md px-md-5 px-3 py-md-4 py-3" id="formReg">
                <h2 class="text-center pb-md-3 pb-0 mb-4 mb-md-5">Hello! Let's join us!</h2>
                <form class="container col-md-8 col-12" action="/register/save" method="post">
                    <section class="my-5">
                        <h3 class="text-center pb-4">Data Akun</h3>
                        <div class="mb-4">
                            <label for="email" class="form-label">Alamat Surel</label>
                            <input type="email" class="form-control" placeholder="Alamat Surel" id="email" aria-describedby="email" name="email" value="<?= set_value('email') ?>">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="<?= set_value('password') ?>">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Masukkan Kembali Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan Kembali Password" id="Repassword" name="Repassword" value="<?= set_value('Repassword') ?>">
                        </div>
                    </section>

                    <section class="my-5">
                        <h3 class="text-center pb-4">Data Pribadi</h3>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="fname" class="form-label">Nama Depan</label>
                                    <input type="text" class="form-control" placeholder="Nama Depan" id="fname" aria-describedby="First Name" name="fname" value="<?= set_value('fname') ?>">
                                </div>
                                <div class="col-6">
                                    <label for="lname" class="form-label">Nama Belakang</label>
                                    <input type="text" class="form-control" placeholder="Nama Belakang" id="lname" aria-describedby="Last Name" name="lname" value="<?= set_value('lname') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-8">
                                    <label for="eduStages" class="form-label">Jenjang Pendidikan</label>
                                    <select class="form-select" aria-label="Educational Select" id="eduStages" name="eduStages">
                                        <option value="no" selected>Belum Sekolah</option>
                                        <option value="elementary">SD</option>
                                        <option value="junior">SMP</option>
                                        <option value="senior">SMA</option>
                                        <option value="college">Kuliah</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="eduGrades" class="form-label">Tingkatan</label>
                                    <select class="form-select" aria-label="Grade" id="eduGrades" name="eduGrades">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="school" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control" placeholder="Nama Sekolah" id="school" name="school">
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="birthPlace" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" placeholder="Tempat Lahir" id="birthPlace" aria-describedby="Birth Place" name="birthPlace">
                                </div>
                                <div class="col-6">
                                    <label for="birthDate" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Lahir" id="birthDate" aria-describedby="Birth Date" name="birthDate">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="parentJob" class="form-label">Pekerjaan Orang Tua</label>
                            <select class="form-select" aria-label="Parent's Job" id="parentJob" name="parentJob">
                                <option value="Belum Bekerja" selected>Belum Bekerja</option>
                                <option value="PNS">PNS</option>
                                <option value="TNIPOLRI">TNI/Polri</option>
                                <option value="Swasta">Karyawan Swasta</option>
                                <option value="Petani">Petani</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="domisili" class="form-check-label mb-2">Domisili</label>
                            <div class="row">
                                <div class="col-6">
                                    <input class="form-check-input" type="radio" name="Location" value="Local" id="Location" name="Location">
                                    <label class="form-check-label" for="domisiliLocal">
                                        Lokal
                                    </label>
                                </div>
                                <div class="col-6">
                                    <input class="form-check-input" type="radio" name="Location" value="International" id="Location" name="Location">
                                    <label class="form-check-label" for="domisiliInternational">
                                        Internasional
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="province" class="form-label">Provinsi</label>
                            <select class="form-select" aria-label="province" id="province" name="province">
                                <option value="jakarta" selected>Jakarta</option>
                                <option value="java">Java</option>
                                <option value="sumatra">Sumatra</option>
                                <option value="kalimantan">Kalimantan</option>
                                <option value="sulawesi">Sulawesi</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="city" class="form-label">Kota</label>
                            <select class="form-select" aria-label="City" id="city" name="city">
                                <option value="" disabled selected>Harap pilih provinsi terlebih dahulu</option>
                                <option value="java">Java</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="address" class="form-label">Alamat Tinggal</label>
                            <input type="text" class="form-control" placeholder="Alamat Tinggal" id="address" name="address">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" placeholder="Nomor Telepon" id="phone" name="phone">
                        </div>
                    </section>

                    <section class="mt-5">
                        <h3 class="text-center pt-5 my-5">Program Yang Akan Dipilih</h3>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="program" class="form-label">Program</label>
                                    <select class="form-select" aria-label="program" id="program" name="program">
                                        <option value="English Only" selected>English Only</option>
                                        <option value="English and Mathematics">English and Mathematics</option>
                                        <option value="Cram School">Cram School</option>
                                        <option value="TOEFL Preparation">TOEFL Preparation</option>
                                        <option value="TOEIC Preparation">TOEIC Preparation</option>
                                        <option value="IELTS Preparation">IELTS Preparation</option>
                                        <option value="In-company Training">In-company Training</option>
                                        <option value="English Conversation Training">English Conversation Training</option>
                                        <option value="Private Class">Private Class</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="schedule" class="form-label">Jadwal</label>
                                    <select class="form-select" aria-label="Schedule" id="schedule" name="schedule">
                                        <option value="" disabled selected>Harap pilih program terlebih dahulu</option>
                                        <option value="000:11:11">11:11</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" id="checkAgreement">
                            <label class="form-check-label" for="checkAgreement">
                                <p id="agreeTerms">Saya telah membaca dan menyetujui <a href="/" style="color:#06B6D4;" class="text-decoration-none">Ketentuan Layanan</a> dan <a href="/" style="color:#06B6D4;" class="text-decoration-none">Kebijakan Privasi</a></p>
                            </label>
                        </div>
                    </section>
                    <button type="submit" class="btn btn-primary col-12 mt-3 py-2" style="background-color: #06B6D4; border: none;">Register</button>
                </form>
            </div>
        </div>
    </section>

    <!-- JQUERY SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="js/reg.js"></script>
</body>

</html>