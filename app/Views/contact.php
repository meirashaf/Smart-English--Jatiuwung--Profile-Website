<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing Page Smart English">
    <meta name="author" content="Kelompok 4 C2 2020">
    <title>Smart English Jatiuwung - Landing Page</title>
    <link rel="icon" href="pics/Logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/styleContact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap');
    </style>
</head>
<header class="container-fluid bg-white sticky-top py-1" id="shadow">
    <div class="container-fluid px-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between" id="header">
        <a href="/" class="d-flex align-items-center col-md-2 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-3" width="81" src="pics/Logo.png">
            <h3 style="color: #06B6D4;">Smart English</h3>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fw-bold">
            <li><a href="/" class="nav-link px-md-4 link-dark">Home</a></li>
            <li><a href="/programs" class="nav-link px-md-4 link-dark">Programs</a></li>
            <li><a href="/article" class="nav-link px-md-4 link-dark">Article</a></li>
            <li>
                <a href="/contact" class="nav-link px-md-4" style="color: #06B6D4;">
                    Contact
                    <div class="container" id="activeNav">
                    </div>
                </a>
            </li>
            <li><a href="/about" class="nav-link px-md-4 link-dark">About</a></li>
        </ul>

        <a href="/profile" class="d-flex align-items-center justify-content-center col-md-2 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-md-3 me-1" width="60" src="pics/Profpic.png" style="border-radius: 50%;">
            <h4 class="my-0 ms-2">Name</h4>
        </a>
    </div>

</header>

<body class="p-0">
    <div class="container-fluid mt-3" style="background-color: #dcdcdc;">
        <div class="d-flex align-items-center float-end">
            <select class="form-select border-0" aria-label="Default select example">
                <option value="Indonesia" selected>Indonesia</option>
                <option value="English">English</option>
            </select>
        </div>
    </div>

    <section class="container-fluid py-2">
        <h1 class="container-md my-md-5 mt-5 mb-3 text-center">Kontak Kami</h1>

        <div class="row justify-content-center px-5">
            <div id="listContact" class="col-md-4 col-auto me-0 me-md-5 mb-5 mb-md-0">
                <div class="d-flex align-items-center" id="email">
                    <svg xmlns="http://www.w3.org/2000/svg" height="60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <div class="container mt-4">
                        <h3>Email</h3>
                        <p class="text-dark">smartenglish.smartenglish@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex align-items-center" id="location">
                    <svg xmlns="http://www.w3.org/2000/svg" height="60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div class="container mt-4">
                        <h3>Alamat</h3>
                        <p class="text-dark">Jl. Bahagia Raya Blok D3 No. 1, Kel. Gebang Raya, Kec. Periuk Kota Tangerang, Banten 15132</p>
                    </div>
                </div>
                <div class="d-flex align-items-center" id="telp">
                    <svg xmlns="http://www.w3.org/2000/svg" height="60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <div class="container mt-4">
                        <h3>Telp</h3>
                        <p class="text-dark">(021) 5901209.</p>
                    </div>
                </div>
                <div class="d-flex align-items-center" id="WhatsApp">
                    <svg xmlns="http://www.w3.org/2000/svg" height="60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                    <div class="container mt-4">
                        <h3>WhatsApp</h3>
                        <p class="text-dark">+62 878-0977-8826</p>
                    </div>
                </div>
            </div>
            <div id="2" class="col-md-6 col-auto">
                <form>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="fname" class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Depan" id="fname" aria-describedby="First Name">
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" aria-describedby="First Name">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="subjek" class="form-label">Subjek</label>
                        <input type="text" class="form-control" placeholder="Subjek" id="subjek" aria-describedby="First Name">
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Pesan" id="Pesan" style="height: 321px"></textarea>
                        <label for="floatingTextarea2">Pesan</label>
                    </div>

                    <button type="submit" class="btn btn-primary col-12 mt-3 py-2" style="background-color: #06B6D4; border: none; height:48px;">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>