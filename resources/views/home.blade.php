<!doctype html>
<html lang="en">
<head>
	<title>Home Artikel</title>
	<link rel="icon" href="../../assets/img/logo.png" type="image/png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .navbar {
            transition: box-shadow 0.3s;
        }

        .navbar-scrolled {
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .list-group.no-border {
            border: none;

        }

        .list-group-item.no-border {
            border: none;
        }

        .list-group-item:hover {
            background-color: rgb(240, 240, 240);
        }

        .text-ubah {
            color: rgb(90, 90, 90);
            font-size: 18px;
        }

        .text-ubah:hover {
            color: black;
        }

        .img-container {
            height: 170px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-container img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3" style="background-color: #f1c376;">
        <div class="container" style="max-width: 1000px;">
            <a class="navbar-brand" href="index.php"><img src="../../assets/img/logo.png" alt="" height="40"></a>
			<div style="color: white; font-weight: 600; font-size: 25px">
				Artikel Ku
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item badge rounded-pill px-4" style="background-color: #eea931">
                        <a class="nav-link" style="font-size: 16px; font-weight: 600; color: white;" href="/sesi">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div style="background-color: #ededed; margin-top: -70px;">
            <div class="container" style="max-width: 1000px">
               <div class="jumbotron">
                <h3>Selamat Datang</h3>
                <p class="lead">Selamat datang di <b class="font-weight-bold text-warning">Artikel Ku</b>, destinasi terbaik untuk pencinta buku. Di sini, kami menghadirkan ragam koleksi buku dari berbagai genre, mulai dari fiksi hingga non-fiksi, sastra klasik hingga buku-buku terkini yang sedang tren. Dengan komitmen kami untuk menyediakan kualitas terbaik, BacaBudaya berusaha menjadi rumah bagi para pecinta kata-kata yang haus akan pengetahuan dan petualangan imajinasi.</p>
                <hr class="my-4">
                <p>"Telusuri, Temukan, dan Pelajari Lebih Lanjut Melalui Tulisan Saya"</p>
                </div>
            </div>
        </div>


        <div class="py-5">
        <div class="container" style="max-width: 1000px;">
            <h2 class="mb-3">Artikel-artikel terbaru</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($articles->sortByDesc('id') as $article)
                    <div class="col">
                        <a class="text-dark text-decoration-none" href="{{ route('show', $article->id) }}">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/' . $article->image) }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <span class="badge bg-warning text-white p-2">{{ $article->category->name }}</span>
                                <h5 class="card-title mt-3">{{ Str::limit($article->title, 10) }}</h5>
                                <p class="card-text">{{ Str::limit($article->content, 120) }}</p>
                            </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

            </div>
        </div>

    </main>

    <footer class="text-center text-white">
        <div class="text-center p-3" style="background-color: #f1c376;">
            © Copyright 2023 -
            <a class="text-white text-decoration-none" href="">Artikel Ku</a>
        </div>
    </footer>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>