@extends('layouts/app')
@section('content')


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




@endsection