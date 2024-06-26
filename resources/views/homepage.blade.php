@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
    <div class="swiper-container">
        <div>
            <!--========== ISLANDS 1 ==========-->
            <section class="islands">
                <img
                    src="{{ asset('frontend/assets/img/hero.jpg') }}"
                    alt=""
                    class="islands__bg"
                />
                <div class="bg__overlay">
                    <div class="islands__container container">
                        <div
                            class="islands__data"
                            style="z-index: 99; position: relative"
                        >
                            <h2 class="islands__subtitle">
                                Aventurate a
                            </h2>
                            <h1 class="islands__title">
                                Explorar El Mundo
                            </h1>
                            <p class="islands__description">
                                Es el momento perfecto para viajar y
                                disfrutar de <br />
                                la belleza del mundo.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!--==================== LOGOS ====================-->
<section
    class="logos"
    style="margin-top: 9rem; padding-bottom: 3rem"
>
    <div class="logos__container container grid">
        <div class="logos__img">
            <a href="https://www.tripadvisor.com.mx/"><img src="{{ asset('frontend/assets/img/tripadvisor.png') }}" alt="" /></a>
        </div>
        <div class="logos__img">
            <a href="https://www.airbnb.mx/?c=.pi0.pk968488319_51803035407&gclsrc=aw.ds&&c=.pi0.pk968488319_51803035407&localized_ghost=true&gad_
            source=1&gclid=CjwKCAjwl4yyBhAgEiwADSEjeIj2pdq9BIVGctX1Y2e3XvKkDL2Te_Z8ey_Ze-1hauIOQKB-HYZykBoCHl4QAvD_BwE">
            <img src="{{ asset('frontend/assets/img/airbnb.png') }}" alt="airbnb" /></a>
        </div>
        <div class="logos__img">
            <a href="https://www.booking.com/index.es-mx.html?label=gen173nr-1BCAEoggI46AdIM1gEaKABiAEBmAFSuAEXyAEM2AEB6AEBiAIBqAIDuALE246y
            BsACAdICJDE4YjM5ZWNiLTA5ODMtNDBkMS05NjViLTdkYTIxNjk3MWFhMdgCBeACAQ&sid=8a5aab7d28e82c57057f530675de2140&keep_landing=1&sb_price_
            type=total&"><img src="{{ asset('frontend/assets/img/booking.png') }}" alt="booking" /></a>
        </div>
        <div class="logos__img">
            <a href="https://www.airpaz.com/en/airlines/AK-AirAsia?a=21271355467&b=159323818302&c=582552839447&d=c&gad_source=1&gclid=
            CjwKCAjwl4yyBhAgEiwADSEjeFzCbWBkdjGzF0yz2VC-HUVFFBcZqDqyeD2ppQTqSQnSBX2lqCuHQBoCVQoQAvD_BwE&l=20721&n=g&p=&t=dsa-1465706623
            091&utm_medium=cpc&utm_source=gads"><img src="{{ asset('frontend/assets/img/airasia.png') }}" alt="airasia" /></a>
        </div>
    </div>
</section>

<!--==================== POPULAR ====================-->
<section class="section" id="popular">
    <div class="container">
        <span class="section__subtitle" style="text-align: center"
            >Te presentamos la mejor opción</span
        >
        <h2 class="section__title" style="text-align: center">
            Nuestros paquetes de viajes
        </h2>

        <div class="popular__container swiper">
            <div class="swiper-wrapper">
                @foreach($travel_packages as $travel_package)
                    <article class="popular__card swiper-slide">
                        <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                            <img
                                src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                                alt=""
                                class="popular__img"
                            />
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>{{ number_format($travel_package->price,2) }}
                                </h2>
                                <h3 class="popular__title">
                                    {{ $travel_package->location}}
                                </h3>
                                <p class="popular__description">{{ $travel_package->type }}</p>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            <div class="swiper-button-next">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="bx bx-chevron-left"></i>
            </div>
        </div>
    </div>
</section>

<!--==================== VALUE ====================-->
<section class="value section" id="value">
    <div class="value__container container grid">
        <div class="value__images">
            <div class="value__orbe"></div>

            <div class="value__img">
                <img src="{{ asset('frontend/assets/img/team.jpg') }}" alt="" />
            </div>
        </div>

        <div class="value__content">
            <div class="value__data">
                <span class="section__subtitle">¿Por qué escogernos?</span>
                <h2 class="section__title">
                    UNA EXPERIENCIA GARANTIZADA
                </h2>
                <p class="value__description">
                    Siempre estamos listos para servirte,
                    brindándote el mejor servicio.
                    Tomamos buenas decisiones para viajar por el mundo.
                </p>
            </div>

            <div class="value__accordion">
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-shield-x value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Los mejores lugares del mundo
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Ofrecemos los mejores lugares del mundo y
                            contamos con una buena calidad de servicio.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-x-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Precio asequible para ti
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Intentamos que tu presupuesto se ajuste al
                            destino al que quieres ir para que nada
                            impida que puedas vivir esa experiencia.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-bar-chart-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            El mejor plan para tu tiempo
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Su tiempo es valioso para GOTRAVEL,
                            Agendamos tu viaje para que puedas viajar
                            en el momento que desees.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-check-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Garantía de seguridad
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Nos aseguramos de que nuestros servicios
                            tengan un buen nivel de seguridad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<section class="blog section" id="blog">
    <div class="blog__container container">
        <span class="section__subtitle" style="text-align: center"
            >Nuestro Blog</span
        >
        <h2 class="section__title" style="text-align: center">
            LOS MEJORES TIPS DE VIAJE PARA TI
        </h2>

        <div class="blog__content grid">
            @foreach($blogs as $blog)
                <article class="blog__card">
                    <div class="blog__image">
                        <img
                            src="{{ Storage::url($blog->image) }}"
                            alt=""
                            class="blog__img"
                        />
                        <a href="{{ route('blog.show', $blog->slug) }}" class="blog__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                    <div class="blog__data">
                        <h2 class="blog__title">
                            {{ $blog->title }}
                        </h2>
                        <p class="blog__description">
                            {{ $blog->excerpt }}
                        </p>

                        <div class="blog__footer">
                            <div class="blog__reaction">
                                {{ date('d M Y', strtotime($blog->created_at)) }}
                            </div>
                            <div class="blog__reaction">
                                <i class="bx bx-show"></i>
                                <span>{{ $blog->reads }}</span>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
