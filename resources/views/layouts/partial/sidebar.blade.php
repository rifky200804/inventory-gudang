        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <div class="d-flex sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="{{ asset('admin/images/faces/face29.png') }}" alt="image">
                            <span class="sidebar-status-indicator"></span>
                        </div>
                        <div class="sidebar-profile-name">
                            <p class="sidebar-name">
                                Kenneth Osborne
                            </p>
                            <p class="sidebar-designation">
                                Welcome
                            </p>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="typcn typcn-home menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="typcn typcn-briefcase menu-icon"></i>
                        <span class="menu-title">Gudang</span>
                        <i class="typcn typcn-chevron-right menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="{{route('gudang.index')}}">Data Gudang</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                        aria-controls="form-elements">
                        <i class="typcn typcn-film menu-icon"></i>
                        <span class="menu-title">Kategori Barang</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('kategori.index')}}">Data Kategori Barang</a></li>
                        </ul>
                    </div>
                </li>
        </nav>