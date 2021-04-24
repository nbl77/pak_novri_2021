{{-- Header --}}
<div id="kt_header" class="header d-none d-md-flex {{ Metronic::printClasses('header', false) }}" {{ Metronic::printAttrs('header') }}>


  <!--begin::Container-->
    <div class="container d-flex align-items-stretch justify-content-between">
      <!--begin::Left-->
      <div class="d-flex align-items-stretch mr-3">
        <!--begin::Header Logo-->

        @if (config('layout.header.self.display'))

            @php
                $kt_logo_image = 'logo-light.png';
            @endphp
            @if (config('layout.header.self.theme') === 'light')
                @php $kt_logo_image = 'logo-dark.png' @endphp
            @elseif (config('layout.header.self.theme') === 'dark')
                @php $kt_logo_image = 'logo-light.png' @endphp
            @endif
        @else
            <div></div>
        @endif
        <div class="header-logo d-flex align-items-center mr-4">
            <a href="{{ url('/') }}">
                <img class="logo-default max-h-40px" alt="Logo" src="{{ asset('media/logos/'.$kt_logo_image) }}"/>
            </a>
        </div>
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
          <!--begin::Header Nav-->
          <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default {{ Metronic::printClasses('header_menu', false) }}" {{ Metronic::printAttrs('header_menu') }}>
              <ul class="menu-nav {{ Metronic::printClasses('header_menu_nav', false) }}">
                  {{ Menu::renderHorMenu(config('menu_header.items')) }}
              </ul>
          </div>
          <!--end::Header Nav-->
        </div>
        <!--end::Header Menu Wrapper-->
      </div>
      @include('layout.partials.extras._topbar_blog')
    </div>
</div>
