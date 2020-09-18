@extends('layouts.dashboard')


@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">

                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif

                @if(count($settings) <= 0)
                        <a href="/settings/create" class="btn btn-round btn-info"><i class="material-icons">add_circle</i>New
                        Settings</a>
                @else
                    @foreach($settings as $setting)

                        <p><a class="btn btn-round shiny btn-warning" href="/settings/{{ $setting->id }}/edit"> <i
                                    class="material-icons">edit</i>Edit Settings </a></p>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">
                        <label class="bmd-label">Главна адреса</label>
                    </div>
                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->mainurl }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Наслов</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->title }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Email адреса</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->email }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Адреса</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->address }}
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Logo</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="container">
                            @foreach($settings as $setting)
                                <img style="margin-top: 10px; margin-left: 15px" src="/assets/img/logo/originals/{{ $setting->logo }}" class="img-fluid"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Опис</label>
                    </div>
                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {!! $setting->description !!}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Link</label>
                    </div>
                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->link }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Мобилен телефон</label>
                    </div>
                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->mobilephone }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Телефон</label>
                    </div>
                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->phone }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Facebook</label>
                    </div>
                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                @if($setting->facebook != NULL)
                                    {{ $setting->facebook }}

                                @else
                                    n/a
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content title 1</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->ctitle1 }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content alternative title 1</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->calttitle1 }}
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content title 2</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->ctitle2 }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content alternative title 2</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->calttitle2}}
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content title 3</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->ctitle3 }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content alternative title 3</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->calttitle3 }}
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content title 4</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->ctitle4 }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content alternative title 4</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->calttitle4 }}
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content title 5</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->ctitle5 }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content alternative title 5</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->calttitle5 }}
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content title 6</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->ctitle6 }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Content alternative title 6</label>
                    </div>

                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->calttitle6 }}
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>

        </div>

            <div class="col-lg-6">
                <div class="form-group bmd-form-group card">
                    <div class="card-body">

                        <label class="bmd-label">Последни промени</label>
                    </div>
                    <!--Widget Header-->
                    <div class="row">
                        <div class="card-body" style="margin-left: 10px">
                            @foreach($settings as $setting)
                                {{ $setting->updated_at->diffForHumans() }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')



            <script>
                // initialization of google map
                function initMap() {
                    $.HSCore.components.HSGMap.init('.js-g-map');
                }



                $(document).on('ready', function () {
                    // initialization of carousel
                    $.HSCore.components.HSCarousel.init('.js-carousel');


                    // initialization of header
                    $.HSCore.components.HSHeader.init($('#js-header'));
                    $.HSCore.helpers.HSHamburgers.init('.hamburger');

                    // initialization of tabs
                    $.HSCore.components.HSTabs.init('[role="tablist"]');

                    // initialization of go to section
                    $.HSCore.components.HSGoTo.init('.js-go-to');

                    $('#processes [role="tablist"] .nav-link').on('click', function () {
                        setTimeout(function () {
                            $('#processesTabs .js-carousel').slick('setPosition');
                        }, 200);
                    });


                });



                $(window).on('load', function() {
                    // initialization of HSScrollNav
                    $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
                        duration: 700
                    });
                });

                $(window).on('resize', function () {
                    setTimeout(function () {
                        $.HSCore.components.HSTabs.init('[role="tablist"]');
                    }, 200);
                });
            </script>

        <!-- Google Maps -->
            <script type="text/javascript"
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8VZx7pTEJk6GqS4v93d-a9kSgeduiIu4&callback=initMap"></script>

@endsection
