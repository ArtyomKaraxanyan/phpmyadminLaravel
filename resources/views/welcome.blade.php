@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav" id="databases-content">
                        <div class="sb-sidenav-menu-heading">Create Database</div>

                        <button class="btn btn-create" id="show_create_database" data-url="{{route('show_create_database')}}">
                            Create Database
                        </button>


                        <div class="sb-sidenav-menu-heading">Databases</div>
                        @foreach ( $databases as $database)

                            <a class="nav-link collapsed database"
                               data-url="{{route('show_tables',$database->Database)}}" href="#"
                               data-bs-toggle="collapse" data-bs-target="#{{$database->Database}}" aria-expanded="false"
                               aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>

                                {{$database->Database }}

                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse tables" id="{{$database->Database}}" aria-labelledby="headingOne"
                                 data-bs-parent="#sidenavAccordion">

                            </div>

                        @endforeach
                    </div>
                </div>

            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <div class="card mb-4">
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
