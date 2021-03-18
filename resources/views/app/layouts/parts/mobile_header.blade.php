<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="megamenu-container active"><a href="{{ route('index') }}">Главная</a></li>
                <li>
                    <a href="{{ route('categories') }}" class="sf-with-ul">Каталог</a>
                    <ul>
                        @foreach($category as $item)
                        <li><a href="{{ route('subcategories',['slug' => $item->slug]) }}">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('services')}}  " class="sf-with-ul">Услуги</a>
                    <ul>
                        @foreach($services as $service)
                        <li><a href="{{ route('services-page',['slug' => $service->slug, 'id' => $service->id]) }}">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('ourwork') }}">Наши работы</a></li>
                <li><a href="{{ route('deliver') }}">Доставка</a></li>
                <li><a href="{{ route('about') }}">О компании</a></li>
                <li><a href="{{route('contact')}}">Контакты</a></li>
            </ul>
        </nav><!-- End .mobile-nav -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->
