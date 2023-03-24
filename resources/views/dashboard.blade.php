@extends('layoutprincipal')

@section('contenido')
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="https://emovies.oui-iohe.org/wp-content/uploads/2020/09/logo-2-300x300.jpeg"alt="" >
    <span class="d-none d-lg-block">USTAGRAM</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">3</span>
      </a><!-- End Messages Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
          You have 3 new messages
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Maria Hudson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>4 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Anna Nelson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>6 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
            <div>
              <h4>David Muldon</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>8 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="dropdown-footer">
          <a href="#">Show all messages</a>
        </li>

      </ul><!-- End Messages Dropdown Items -->

    </li><!-- End Messages Nav -->
@auth
    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>{{auth()->user()->username}}</h6>
          <span>Estudiante</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>Mi perfil</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Configuración</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <form action="{{route('logout')}}" method="POST">
        @csrf
          <li>
            <input class="btn btn-primary w-100" type="submit" value="Cerrar sesion">
          </li>
        </form>
        
      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
@endauth
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="index.html">
      <i class="bi bi-grid"></i>
      <span>INICIO</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <!--<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="components-alerts.html">
          <i class="bi bi-circle"></i><span>Alerts</span>
        </a>
      </li>
      <li>
        <a href="components-accordion.html">
          <i class="bi bi-circle"></i><span>Accordion</span>
        </a>
      </li>
      <li>
        <a href="components-badges.html">
          <i class="bi bi-circle"></i><span>Badges</span>
        </a>
      </li>
      <li>
        <a href="components-breadcrumbs.html">
          <i class="bi bi-circle"></i><span>Breadcrumbs</span>
        </a>
      </li>
      <li>
        <a href="components-buttons.html">
          <i class="bi bi-circle"></i><span>Buttons</span>
        </a>
      </li>
      <li>
        <a href="components-cards.html">
          <i class="bi bi-circle"></i><span>Cards</span>
        </a>
      </li>
      <li>
        <a href="components-carousel.html">
          <i class="bi bi-circle"></i><span>Carousel</span>
        </a>
      </li>
      <li>
        <a href="components-list-group.html">
          <i class="bi bi-circle"></i><span>List group</span>
        </a>
      </li>
      <li>
        <a href="components-modal.html">
          <i class="bi bi-circle"></i><span>Modal</span>
        </a>
      </li>
      <li>
        <a href="components-tabs.html">
          <i class="bi bi-circle"></i><span>Tabs</span>
        </a>
      </li>
      <li>
        <a href="components-pagination.html">
          <i class="bi bi-circle"></i><span>Pagination</span>
        </a>
      </li>
      <li>
        <a href="components-progress.html">
          <i class="bi bi-circle"></i><span>Progress</span>
        </a>
      </li>
      <li>
        <a href="components-spinners.html">
          <i class="bi bi-circle"></i><span>Spinners</span>
        </a>
      </li>
      <li>
        <a href="components-tooltips.html">
          <i class="bi bi-circle"></i><span>Tooltips</span>
        </a>
      </li>
    </ul>
  </li>--><!-- End Components Nav -->

  <!--<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="forms-elements.html">
          <i class="bi bi-circle"></i><span>Form Elements</span>
        </a>
      </li>
      <li>
        <a href="forms-layouts.html">
          <i class="bi bi-circle"></i><span>Form Layouts</span>
        </a>
      </li>
      <li>
        <a href="forms-editors.html">
          <i class="bi bi-circle"></i><span>Form Editors</span>
        </a>
      </li>
      <li>
        <a href="forms-validation.html">
          <i class="bi bi-circle"></i><span>Form Validation</span>
        </a>
      </li>
    </ul>
  </li>--><!-- End Forms Nav -->

  <!--<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="tables-general.html">
          <i class="bi bi-circle"></i><span>General Tables</span>
        </a>
      </li>
      <li>
        <a href="tables-data.html">
          <i class="bi bi-circle"></i><span>Data Tables</span>
        </a>
      </li>
    </ul>
  </li>--><!-- End Tables Nav -->

  <!--<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="charts-chartjs.html">
          <i class="bi bi-circle"></i><span>Chart.js</span>
        </a>
      </li>
      <li>
        <a href="charts-apexcharts.html">
          <i class="bi bi-circle"></i><span>ApexCharts</span>
        </a>
      </li>
      <li>
        <a href="charts-echarts.html">
          <i class="bi bi-circle"></i><span>ECharts</span>
        </a>
      </li>
    </ul>
  </li>--><!-- End Charts Nav -->

  <!--<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="icons-bootstrap.html">
          <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
        </a>
      </li>
      <li>
        <a href="icons-remix.html">
          <i class="bi bi-circle"></i><span>Remix Icons</span>
        </a>
      </li>
      <li>
        <a href="icons-boxicons.html">
          <i class="bi bi-circle"></i><span>Boxicons</span>
        </a>
      </li>
    </ul>
  </li>--><!-- End Icons Nav -->

  <li class="nav-heading">Contenido</li>

  <li class="nav-item">
    <a class="nav-link " href="users-profile.html">
      <i class="bi bi-person"></i>
      <span>Perfil</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-faq.html">
    <i class="bi bi-people"></i>
      <span>Amigos</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-images"></i>
      <span>Fotos</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.html">
      <i class="bi bi-card-list"></i>
      <span>Publicaciones</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-login.html">
    <i class="bi bi-file-play"></i>
      <span>Estados</span>
    </a>
  </li><!-- End Login Page Nav -->
</ul>
</aside><!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Perfil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item">Usuario</li>
          <li class="breadcrumb-item active">Perfil</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-3">

          <div class="card">
            <div class="card-body profile-card pt-5 pb-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>{{$user->name}}</h2>
              <h3>{{$user->programa}}</h3>
              <span class="text-muted small ps-1">{{$user->semestre}} semestre</span>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-7">
          <div class="card">
            <div class="card-body pb-0">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Detalles del Perfil</h5>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Presentación</div>
                    <div class="col-lg-8 col-md-8">
                    <p class="small fst-italic">
                      {{$user->presentacion}}
                    </p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Nombre de Usuario</div>
                    <div class="col-lg-8 col-md-8">{{$user->username}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Correo Electronico</div>
                    <div class="col-lg-8 col-md-8">{{$user->email}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Celular</div>
                    <div class="col-lg-8 col-md-8">{{$user->celular}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Dirección</div>
                    <div class="col-lg-8 col-md-8">{{$user->direccion}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Genero</div>
                    <div class="col-lg-8 col-md-8">{{$user->genero}}</div>
                  </div>

                </div>

            </div>
          </div>

        </div>
        <div class="col-xl-2">
        <section class="section dashboard">
          <div class="row">
            <div class="col-lg-12">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Información <span>| Social</span></h5>

                  <div class="row align-items-center">
                  <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <h6 class="text-success" style="font-size: 20px;">145 <span class="text-muted small pt-2 ps-1">Seguidores</span></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <h6 class="text-success" style="font-size: 20px;">200 <span class="text-muted small pt-2 ps-1">Seguidos</span></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <h6 class="text-success" style="font-size: 20px;">40<span class="text-muted small pt-2 ps-1">Publicaciones</span></h6>
                      </div>
                    </div>
                  </div>  
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered align-items-center justify-content-center" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="publicaciones-tab" data-bs-toggle="tab" data-bs-target="#bordered-publicaciones" type="button" role="tab" aria-controls="publicaciones" aria-selected="true"><i class="bi bi-table"> </i>Publicaciones</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="reels-tab" data-bs-toggle="tab" data-bs-target="#bordered-reels" type="button" role="tab" aria-controls="reels" aria-selected="false"><i class="bi bi-camera-reels"> </i>Reels</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="guardados-tab" data-bs-toggle="tab" data-bs-target="#bordered-guardados" type="button" role="tab" aria-controls="guardados" aria-selected="false"><i class="bi bi-bookmark-check"> </i>Guardados</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="etiquetadas-tab" data-bs-toggle="tab" data-bs-target="#bordered-etiquetadas" type="button" role="tab" aria-controls="etiquetadas" aria-selected="false"><i class="bi bi-people"> </i>Etiquetadas</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-publicaciones" role="tabpanel" aria-labelledby="publicaciones-tab">
                  <div class="row pt-2 align-items-center justify-content-center">
                    <div class="col-lg-3">
                      <div class="card">
                        <img src="assets/img/card.jpg" class="card-img-top" alt="...">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card">
                        <img src="https://infoturlatam.com/wp-content/uploads/2022/09/pareja-viajera-1.jpg" class="card-img-top" alt="...">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfzR8tbvtI_94IcoQqrzBDdWgxVb5dcv0tOA&usqp=CAU" class="card-img-top" alt="...">
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center justify-content-center">
                    <div class="col-lg-3">
                      <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVB5wZashZL8neoNTRxEX4MGxOa9vnZeHVWw&usqp=CAU" class="card-img-top" alt="...">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLdyks21LhKTjsOabzRSA_1ZrcyGq3_dhZbo-HTtC2knNDIVY8Bm38v3YSdTNCE6av2Lk&usqp=CAU" class="card-img-top" alt="...">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8ULaMamFT-fV9ZydbEODFxRMtIKUZ9pEucr3mq9UPZmN1u-ZEsS9rgPjlk3YEFPY5wc8&usqp=CAU" class="card-img-top" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="bordered-reels" role="tabpanel" aria-labelledby="reels-tab">
                  Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
                </div>
                <div class="tab-pane fade" id="bordered-guardados" role="tabpanel" aria-labelledby="guardados-tab">
                  Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                </div>
                <div class="tab-pane fade" id="bordered-etiquetadas" role="tabpanel" aria-labelledby="etiquetadas-tab">
                  aea
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
          </div>
      </div>
    </section>

  </main>
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>USTAGRAM</span></strong>. Todos los derechos reservados
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer>
@endsection



   


         