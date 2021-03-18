<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..."
                   required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="megamenu-container active">
                    <a href="{{ route('index') }}">Главная</a>

                </li>
                <li>
                    <a href="{{ route('categories') }}" class="sf-with-ul">Каталог</a>
                    <ul>
                        @foreach($category as $item)
                        <li><a href="{{ route('subcategories',['slug' => $item->slug]) }}">{{$item->title}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="{{route('services')}}" class="sf-with-ul">Услуги</a>
                    <ul>
                        @foreach($services as $item)
                        <li><a href="{{route('services-page',['slug' => $item->slug,'id'=>$item->id])}}">{{$item->title}}</a></li>
                        @endforeach

                    </ul>
                </li>
                <li>
                    <a href="{{route('ourwork')}}">Наши работы</a>

                </li>
                <li>
                    <a href="{{route('deliver')}}">Доставка</a>

                </li>

                <li>
                    <a href="{{route('about')}}">О компании</a>

                </li>
                <li>
                    <a href="{{route('contact')}}">Контакты</a>


                </li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->
