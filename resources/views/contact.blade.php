@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <!--========== ISLANDS 1 ==========-->
            <section class="islands swiper-slide">
              <img
                src="{{ asset('frontend/assets/img/contact-hero.jpg') }}"
                alt=""
                class="islands__bg"
              />
              <div class="bg__overlay">
                <div class="islands__container container">
                  <div class="islands__data">
                    <h2 class="islands__subtitle">Estamos a tu servicio</h2>
                    <h1 class="islands__title">Contactanos</h1>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <!--==================== CONTACT ====================-->
      <section class="contact section" id="contact">
        <div class="contact__container container grid">
          <div class="contact__images">
            <div class="contact__orbe"></div>

            <div class="contact__img">
              <img src="{{ asset('frontend/assets/img/contact.jpg') }}" alt="" />
            </div>
          </div>

          <div class="contact__content">
            <div class="contact__data">
              <span class="section__subtitle">¿Necesitas ayuda?</span>
              <h2 class="section__title">No dudes en contactarnos</h2>
              <p class="contact__description">
                ¿Tiene algún problema para encontrar lugares para su próximo viaje?
                ¿Necesita una guía en su primer viaje o necesita una consulta sobre
                cómo viajar? solo contáctanos.
              </p>
            </div>

            <div class="contact__card">
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-phone-call"></i>
                  <div>
                    <h3 class="contact__card-title">Marca</h3>
                    <p class="contact__card-description">022.321.165.19</p>
                  </div>
                </div>

                <button class="button contact__card-button">Llamar ahora</button>
              </div>
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-message-rounded-dots"></i>
                  <div>
                    <h3 class="contact__card-title">Whatsapp</h3>
                    <p class="contact__card-description">022.321.165.19</p>
                  </div>
                </div>

                <button class="button contact__card-button">Escribe ahora</button>
              </div>
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-video"></i>
                  <div>
                    <h3 class="contact__card-title">Video llamada</h3>
                    <p class="contact__card-description">022.321.165.19</p>
                  </div>
                </div>

                <button class="button contact__card-button">
                  Llamar ahora
              </div>
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-phone-call"></i>
                  <div>
                    <h3 class="contact__card-title">Mensaje de texto</h3>
                    <p class="contact__card-description">022.321.165.19</p>
                  </div>
                </div>

                <button class="button contact__card-button">Escribe ahora</button>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
