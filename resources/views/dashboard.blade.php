<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/SidebarTest.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/fontawesome-free-6.5.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
        <div class="sidebar close" id="side_nav">
            <div class="logo-details py-2">
                <i class="fa-solid fa-graduation-cap"></i>
                <span class="logo_name">Cours_Travaux</span>
                <i class="fa-solid ms-5  fa-xmark btn-ferme" type="button"></i>
            </div>
            <div class="profile mt-2 p-2">
                <img height="32px" class="img-profile" src="/images/img_profil.jpg"></i>
                <span class="profile_name ms-3">Burturo</span>
                <i class="fa-solid ms-5  fa-xmark btn-ferme" type="button"></i>
            </div>
            <ul class="nav-links">
                <li class="active">
                    <a style="height: 50px;">
                        <i class="fa-solid fa-house"></i>
                        <span class="link_name">Tableau de bord</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name title-hover">Tableau de bord</a></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="#">
                            <i class="fa fa-solid fa-person-chalkboard"></i>
                            <span class="link_name">Cours</span>
                        </a>
                        <i class="fa fa-solid fa-angle-down arrow"></i>
                    </div>
                    <ul class="sub-menu">
                        <li>
                            <a class="link_name title-hover titre border-bottom border-white mb-2" href="#">Cours</a>
                        </li>
                        <li>
                            <a href="{{ route('courses.index') }}">Liste des cours</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="#">
                            <i class="bi bi-person-workspace"></i>
                            <span class="link_name">Travaux</span>
                        </a>
                        <i class="fa-solid fa-angle-down arrow"></i>
                    </div>
                    <ul class="sub-menu">
                        <li>
                            <a class="link_name title-hover titre border-bottom border-white mb-2" href="#">Travaux</a>
                        </li>
                        <li>
                            <a href="{{ route('travaux.index') }}">Liste des travaux</a>
                        </li>
                    </ul>
                </li>
                <li class="footer">
                    <div class="footer-details">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div class="footer-content">
                                <img src="/images/box-arrow-right.svg" alt="footer">
                            </div>

                            <div class="name-job">
                                <div class="footer_name">Se déconnecter</div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="home-section">
            <nav class="navbar navbar-expand-md other position-fixed shadow">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <button class="btn px-1 py-0 open-btn me-2 side_btn" type="button"><i class="fa fa-stream"></i></button>
                    </div>
                    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-angle-down rotate-icon"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-element">
                            <div class="col d-flex align-items-center">
                                <i class="fa-solid fa-bars-staggered fa-bars"></i>
                                <h5 class="m-0 ms-3">Tableau de bord</h5>
                            </div>
                            <div class="col-1 d-flex justify-content-between ">
                                <div class="notification">
                                    <i class="bi bi-bell"></i>
                                </div>
                                <button class="btn p-0 dropdown-toggle" type="button" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Fr
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><button class="dropdown-item"><img width="25px" src="/img/fr.png"> French</button></li>
                                    <li><button class="dropdown-item"><img width="25px" src="/img/en.png"> English</button></li>
                                </ul>

                                <i class="bi bi-gear"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="scroolAsignSubj h-100 px-4 pt-5 haut-rendbody">
                <div class="d-flex flex-column py-2 px-4 my-md-4 my-3 " style="height: 90vh;">
                    <div class="d-flex flex-md-row flex-column justify-content-between mb-md-5 mb-0 ">
                        <div class="col-md-4 col-12 mb-4 mb-md-0 card border-1 border-black shadow p-3 rounded">
                            <div class="card-body">
                                <h5 class="card-title">Nombre de cours</h4>
                                <div class="text-end">
                                {{ $reporting['totalCourseCount'] }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-4 mb-md-0 card border-1 border-black shadow p-3 rounded">
                            <div class="card-body">
                                <h5 class="card-title">Nombre de Travaux</h4>
                                {{ $reporting['totalTravauxCount'] }}
                                <div class="text-end">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 mb-4 mb-md-0 card border-1 border-black shadow p-3 rounded">
                            <div class="card-body">
                                <h5 class="card-title">Nombre d'utilisateur</h4>
                                <p class="card-text fs-5">{{ $reporting['totalUserCount'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-md-row flex-column justify-content-between">
                        <div class="col-md-7 col-12 card border-1 border-black shadow p-3 rounded">
                            <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                        </div>
                        <div class="col-md-4 col-12 mt-4 mt-md-0 card border-1 border-black shadow p-3 rounded">
                            <div class="card-body">
                                <h5 class="card-title border-2 border-bottom border-black">Notifications</h4> <!-- Titre de la section de notifications. -->
                                <div class="card-body">
                                    <h6 class="card-title">Non implementer</h6> <!-- Titre de la carte. -->
                                    <p class="card-text"></p> <!-- Affiche le nombre de courriers non lus. -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="{{ asset('js/SidebarTest.js') }}" asp-append-version="true"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> <!-- Script pour les graphiques. -->
        <script type="text/javascript">
            var resul_cour_env = {{ $reporting['totalCourseCount'] }};
            var resul_cour_rec = {{ $reporting['totalTravauxCount'] }};

            let totalCourriers = resul_cour_env + resul_cour_rec;

            if (totalCourriers % 2 !== 0) {
                totalCourriers += 1;
            }

            var xValues = ["Cours Envoyé",  "Travaux reçu"];
            var yValues = [resul_cour_env, resul_cour_rec,30];
            var barColors = ["#007716", "#FF7A00"];

            new Chart("myChart", {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: "Statistique des courriers"
                    }
                }
            });
        </script>
</body>
</html>
