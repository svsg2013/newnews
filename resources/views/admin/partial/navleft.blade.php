<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metisMenu nav" id="side-menu">
                <li class="menu-title">Navigation</li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-air-play"></i><span
                                class="badge badge-success pull-right">2</span> <span> Dashboard </span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="dashboard-2.html">Dashboard 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-paper"></i> <span> Bài viết</span>
                        <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="{{route('category.create')}}"><i class="fi-circle-plus"></i> Thêm danh mục</a></li>
                        <li><a href="{{route('category.index')}}"><i class="fi-layers"></i> Danh sách - DM</a></li>
                        <li><a href="{{route('news.create')}}"><i class="fi-circle-plus"></i> Thêm bài viết</a></li>
                        <li><a href="{{route('news.index')}}"><i class="fi-layers"></i> Danh sách - BV</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-menu"></i>
                        <span> Design Furniture </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        {{--<li><a href="{{route('catefurniture.create')}}"><i class="fi-circle-plus"></i> Add Category</a></li>--}}
                        <li><a href="{{route('catefurniture.index')}}"><i class="fi-layers"></i> List Categories</a>
                        </li>
                        <li><a href="{{route('furniture.create')}}"><i class="fi-circle-plus"></i> Add Article</a></li>
                        <li><a href="{{route('furniture.index')}}"><i class="fi-layers"></i> List Articles</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-menu"></i> <span> News and Feng Shui </span>
                        <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        {{--<li><a href="{{route('catefengshui.create')}}"><i class="fi-circle-plus"></i> Add Category</a></li>--}}
                        <li><a href="{{route('catefengshui.index')}}"><i class="fi-layers"></i> List Categories</a></li>
                        <li><a href="{{route('fengshui.create')}}"><i class="fi-circle-plus"></i> Add Article</a></li>
                        <li><a href="{{route('fengshui.index')}}"><i class="fi-layers"></i> List Articles</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-air-play"></i>
                        <span> Products </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="{{route('cateprod.create')}}"><i class="fi-circle-plus"></i> Add Category</a></li>
                        <li><a href="{{route('cateprod.index')}}"><i class="fi-layers"></i> List Categories</a></li>
                        <li><a href="{{route('prods.create')}}"><i class="fi-circle-plus"></i> Add Product</a></li>
                        <li><a href="{{route('prods.index')}}"><i class="fi-layers"></i> List Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-stack"></i> <span> Slider </span>
                        <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="{{route('slider.create')}}"><i class="fi-circle-plus"></i> Add Slider</a></li>
                        <li><a href="{{route('slider.index')}}"><i class="fi-layers"></i> List Slider</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-head"></i> <span> Images </span>
                        <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="{{route('partner.create')}}"><i class="fi-circle-plus"></i> Add Images</a></li>
                        <li><a href="{{route('partner.index')}}"><i class="fi-layers"></i> List Images</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-clipboard"></i>
                        <span> Báo giá </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="{{route('batu.create')}}"><i class="fi-circle-plus"></i> Add Báo giá</a></li>
                        <li><a href="{{route('batu.index')}}"><i class="fi-layers"></i> List Báo giá</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-eye"></i> <span> Tuyển dụng </span>
                        <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="{{route('tuyendung.create')}}"><i class="fi-circle-plus"></i> Add Tuyển dụng</a>
                        </li>
                        <li><a href="{{route('tuyendung.index')}}"><i class="fi-layers"></i> List Tuyển dụng</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>