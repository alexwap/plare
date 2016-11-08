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

                    <!--chart dashboard start-->
                    <div id="chart-dashboard">
                        <div class="row">
                            <div class="col s12 m8 l8">
                                <div class="card">
                                    <div class="card-move-up waves-effect waves-block waves-light">
                                        <div class="move-up cyan darken-1">
                                            <div>
                                                <span class="chart-title white-text">Revenue</span>
                                                <div class="chart-revenue cyan darken-2 white-text">
                                                    <p class="chart-revenue-total">$4,500.85</p>
                                                    <p class="chart-revenue-per"><i class="mdi-navigation-arrow-drop-up"></i> 21.80 %</p>
                                                </div>
                                                <div class="switch chart-revenue-switch right">
                                                    <label class="cyan-text text-lighten-5">
                                                        Month
                                                        <input type="checkbox">
                                                        <span class="lever"></span> Year
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="trending-line-chart-wrapper">
                                                <canvas id="trending-line-chart" height="70"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                        <div class="col s12 m3 l3">
                                            <div id="doughnut-chart-wrapper">
                                                <canvas id="doughnut-chart" height="200"></canvas>
                                                <div class="doughnut-chart-status">4500
                                                    <p class="ultra-small center-align">Sold</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m2 l2">
                                            <ul class="doughnut-chart-legend">
                                                <li class="mobile ultra-small"><span class="legend-color"></span>Mobile</li>
                                                <li class="kitchen ultra-small"><span class="legend-color"></span> Kitchen</li>
                                                <li class="home ultra-small"><span class="legend-color"></span> Home</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m5 l6">
                                            <div class="trending-bar-chart-wrapper">
                                                <canvas id="trending-bar-chart" height="90"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Revenue by Month <i class="mdi-navigation-close right"></i></span>
                                        <table class="responsive-table">
                                            <thead>
                                            <tr>
                                                <th data-field="id">ID</th>
                                                <th data-field="month">Month</th>
                                                <th data-field="item-sold">Item Sold</th>
                                                <th data-field="item-price">Item Price</th>
                                                <th data-field="total-profit">Total Profit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>January</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>February</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>March</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>April</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>May</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>June</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>July</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>August</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Septmber</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Octomber</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>November</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>December</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>

                            <div class="col s12 m4 l4">
                                <div class="card">
                                    <div class="card-move-up teal waves-effect waves-block waves-light">
                                        <div class="move-up">
                                            <p class="margin white-text">Browser Stats</p>
                                            <canvas id="trending-radar-chart" height="114"></canvas>
                                        </div>
                                    </div>
                                    <div class="card-content  teal darken-2">
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                        <div class="line-chart-wrapper">
                                            <p class="margin white-text">Revenue by country</p>
                                            <canvas id="line-chart" height="114"></canvas>
                                        </div>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Revenue by country <i class="mdi-navigation-close right"></i></span>
                                        <table class="responsive-table">
                                            <thead>
                                            <tr>
                                                <th data-field="country-name">Country Name</th>
                                                <th data-field="item-sold">Item Sold</th>
                                                <th data-field="total-profit">Total Profit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>USA</td>
                                                <td>65</td>
                                                <td>$452.55</td>
                                            </tr>
                                            <tr>
                                                <td>UK</td>
                                                <td>76</td>
                                                <td>$452.55</td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>65</td>
                                                <td>$452.55</td>
                                            </tr>
                                            <tr>
                                                <td>Brazil</td>
                                                <td>76</td>
                                                <td>$452.55</td>
                                            </tr>
                                            <tr>

                                                <td>India</td>
                                                <td>65</td>
                                                <td>$452.55</td>
                                            </tr>
                                            <tr>
                                                <td>France</td>
                                                <td>76</td>
                                                <td>$452.55</td>
                                            </tr>
                                            <tr>
                                                <td>Austrelia</td>
                                                <td>65</td>
                                                <td>$452.55</td>
                                            </tr>
                                            <tr>
                                                <td>Russia</td>
                                                <td>76</td>
                                                <td>$452.55</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--chart dashboard end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="invoice-line" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                                        <h4 class="card-stats-number">$806.52</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristate" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                                        <h4 class="card-stats-number">$8990.63</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div id="sales-compositebar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->



                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                        <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                        <div id="right-search" class="row">
                            <form class="col s12">
                                <div class="input-field">
                                    <i class="mdi-action-search prefix"></i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Search</label>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="li-hover">
                        <ul class="chat-collapsible" data-collapsible="expandable">
                            <li>
                                <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                                <div class="collapsible-body recent-activity">
                                    <div class="recent-activity-list chat-out-list row">
                                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#">just now</a>
                                            <p>Jim Doe Purchased new equipments for zonal office.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row">
                                        <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#">Yesterday</a>
                                            <p>Your Next flight for USA will be on 15th August 2015.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row">
                                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#">5 Days Ago</a>
                                            <p>Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row">
                                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#">Last Week</a>
                                            <p>Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row">
                                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#">5 Days Ago</a>
                                            <p>Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                                <div class="collapsible-body sales-repoart">
                                    <div class="sales-repoart-list  chat-out-list row">
                                        <div class="col s8">Target Salse</div>
                                        <div class="col s4"><span id="sales-line-1"></span>
                                        </div>
                                    </div>
                                    <div class="sales-repoart-list chat-out-list row">
                                        <div class="col s8">Payment Due</div>
                                        <div class="col s4"><span id="sales-bar-1"></span>
                                        </div>
                                    </div>
                                    <div class="sales-repoart-list chat-out-list row">
                                        <div class="col s8">Total Delivery</div>
                                        <div class="col s4"><span id="sales-line-2"></span>
                                        </div>
                                    </div>
                                    <div class="sales-repoart-list chat-out-list row">
                                        <div class="col s8">Total Progress</div>
                                        <div class="col s4"><span id="sales-bar-2"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                                <div class="collapsible-body favorite-associates">
                                    <div class="favorite-associate-list chat-out-list row">
                                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                        </div>
                                        <div class="col s8">
                                            <p>Eileen Sideways</p>
                                            <p class="place">Los Angeles, CA</p>
                                        </div>
                                    </div>
                                    <div class="favorite-associate-list chat-out-list row">
                                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                        </div>
                                        <div class="col s8">
                                            <p>Zaham Sindil</p>
                                            <p class="place">San Francisco, CA</p>
                                        </div>
                                    </div>
                                    <div class="favorite-associate-list chat-out-list row">
                                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                        </div>
                                        <div class="col s8">
                                            <p>Renov Leongal</p>
                                            <p class="place">Cebu City, Philippines</p>
                                        </div>
                                    </div>
                                    <div class="favorite-associate-list chat-out-list row">
                                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                        </div>
                                        <div class="col s8">
                                            <p>Weno Carasbong</p>
                                            <p>Tokyo, Japan</p>
                                        </div>
                                    </div>
                                    <div class="favorite-associate-list chat-out-list row">
                                        <div class="col s4"><img src="{{ asset('static/images/avatar.jpg') }}" alt="" class="circle responsive-img offline-user valign profile-image">
                                        </div>
                                        <div class="col s8">
                                            <p>Nusja Nawancali</p>
                                            <p class="place">Bangkok, Thailand</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->

@endsection