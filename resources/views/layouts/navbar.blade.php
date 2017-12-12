<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    @if(Auth::user()->level == 2)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                <i class="fa fa-fw fa-bell"></i><span class="badge badge-pill">3 New</span>
                            </a>
                            <div class="dropdown-menu notification">
                                <div class="dropdown-header">Notification</div>
                                <a href="#" class="dropdown-item container-fluid">
                                    <strong class="float-left"><i class="fa fa-fw fa-inbox"></i>Nama BPP</strong>
                                    <span class="small float-right text-muted">10:22 AM</span>
                                    <br/>
                                    <div class="dropdown-message small">Pengajuan GU atau LS</div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item container-fluid">
                                    <strong class="float-left"><i class="fa fa-fw fa-inbox"></i>Nama BPP</strong>
                                    <span class="small float-right text-muted">10:22 AM</span>
                                    <br/>
                                    <div class="dropdown-message small">Pengajuan GU atau LS</div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item container-fluid">
                                    <strong class="float-left"><i class="fa fa-fw fa-edit"></i>Nama BPP</strong>
                                    <span class="small float-right text-muted">10:22 AM</span>
                                    <br/>
                                    <div class="dropdown-message small">Pengajuan Hasil Revisi</div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-footer">End of Result</div>
                            </div>
                        </li>
                    @endif
                    @if(Auth::user()->level == 3)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                <i class="fa fa-fw fa-bell"></i><span class="badge badge-pill">3 New</span>
                            </a>
                            <div class="dropdown-menu notification">
                                <div class="dropdown-header">Notification</div>
                                <a href="#" class="dropdown-item container-fluid">
                                    <strong class="float-left"><i class="fa fa-fw fa-check"></i>Nama BPP</strong>
                                    <span class="small float-right text-muted">10:22 AM</span>
                                    <br/>
                                    <div class="dropdown-message small">Nama Kegiatan</div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item container-fluid">
                                    <strong class="float-left"><i class="fa fa-fw fa-edit"></i>Nama BPP</strong>
                                    <span class="small float-right text-muted">10:22 AM</span>
                                    <br/>
                                    <div class="dropdown-message small">Nama Kegiatan</div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item container-fluid">
                                    <strong class="float-left"><i class="fa fa-fw fa-times"></i>Nama BPP</strong>
                                    <span class="small float-right text-muted">10:22 AM</span>
                                    <br/>
                                    <div class="dropdown-message small">Nama Kegiatan</div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-footer">End of Result
                                    <br>
                                    <strong>
                                    <i>
                                        Keterangan :
                                        <br>1 Yang lambangnya ceklis == Verifikasi Diterima
                                        <br>2 Yang lambangnya edit == Verifikasi Harus Diperbaiki
                                        <br>3 Yang lambangnya silang == Verifikasi Ditolak
                                    </i>
                                    </strong>
                                </div>
                            </div>
                        </li>
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>