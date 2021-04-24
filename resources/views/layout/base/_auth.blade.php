@if(config('layout.self.layout') == 'blank')
    <div class="d-flex flex-column flex-root">
        @yield('content')
    </div>
@else


    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">

            <div class="d-flex flex-column flex-row-fluid" id="kt_wrapper">

                <div class="content {{ Metronic::printClasses('content', false) }} d-flex flex-column flex-column-fluid" id="kt_content">
                    @include('layout.base._content')
                </div>

                @include('layout.base._footer')
            </div>
        </div>
    </div>

@endif
