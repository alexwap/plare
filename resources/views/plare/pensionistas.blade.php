@extends('layouts/app')
@section('content')
    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="{{ asset('static/images/avatar.jpg') }}" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li>
                                        <a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="mdi-action-settings"></i> Config</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="mdi-hardware-keyboard-tab"></i>
                                            Salir
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ auth()->user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">{{ $rol->nombre }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold active">
                        <a href="{{ url('plare') }}" class="waves-effect waves-cyan">
                            <i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="bold">
                        <a href="#" class="waves-effect waves-cyan">
                            <i class="mdi-editor-insert-invitation"></i>Calendario</a>
                    </li>

                    <li class="bold">
                        <a href="#" class="waves-effect waves-cyan">
                            <i class="mdi-communication-email"></i> Correos <span class="new badge">4</span></a>
                    </li>
                    @forelse( $rol->modulos as $modulo )
                        <li class="bold">
                            <a href="{{ url( 'plare/'.$modulo->url ) }}" class="waves-effect waves-cyan waves-cyan">
                                <i class="mdi-social-pages"></i> {{ $modulo->nombre }}</a>
                        </li>
                    @empty
                        No hay modulos activos
                    @endforelse

                </ul>

                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">
                    <div class="row">
                        <div class="col s12">-</div>
                    </div>
                    <div class="row">
                        <div class="col s12 ">
                            <nav class="light-blue">
                                <div class="nav-wrapper">
                                    <div class="col s12">
                                        <a href="#!" class="brand-logo">Planilla Pensionistas</a>
                                        <ul class="right hide-on-med-and-down">
                                            <li><a href="{{ asset('plare/plan_pensionistas/borrador') }}">Borrador</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>







                    <!--DataTables example-->
                    <div id="table-datatables">
                        <h4 class="header">Relacion de Pensionistas</h4>
                        <div class="row">
                            <div class="col s12 m8 l9">
                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>DNI</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Nombres</th>
                                        <th>Estatus</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>DNI</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Nombres</th>
                                        <th>Estatus</th>
                                    </tr>
                                    </tfoot>

                                    <tbody>

                                    @forelse($pensionistas as $pensionista)

                                        <tr>
                                            <td>{{ $pensionista->codigo }}</td>
                                            <td>{{ $pensionista->dni }}</td>
                                            <td>{{ $pensionista->paterno }}</td>
                                            <td>{{ $pensionista->materno }}</td>
                                            <td>{{ $pensionista->nombres }}</td>
                                            <td> Activo </td>

                                        </tr>
                                    @empty
                                        <h1>No hay datos de pensionsistas</h1>
                                    @endforelse

                                    </tbody>
                                </table>
                                {{ $pensionistas->links() }}
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="divider"></div>
                    <!--DataTables example Row grouping-->







                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->


        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->


@endsection