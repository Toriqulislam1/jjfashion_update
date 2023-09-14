@extends('layouts.front-end.app')

@section('title',\App\CPU\translate('Store Location'))

@push('css_or_js')
    <meta property="og:image" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="og:title" content="Contact {{$web_config['name']->value}} "/>
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <meta property="twitter:card" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="twitter:title" content="Contact {{$web_config['name']->value}}"/>
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <style>
        .headerTitle {
            font-size: 25px;
            font-weight: 700;
            margin-top: 2rem;
        }

        .for-contac-image {
            padding: 6%;
        }

        .for-send-message {
            padding: 26px;
            margin-bottom: 2rem;
            margin-top: 2rem;
        }

        @media (max-width: 600px) {
            .sidebar_heading {
                background: {{$web_config['primary_color']}}

            }

            .headerTitle {

                font-weight: 700;
                margin-top: 1rem;
            }

            .sidebar_heading h1 {
                text-align: center;
                color: aliceblue;
                padding-bottom: 17px;
                font-size: 19px;
            }


        }
    </style>
@endpush
@section('content')
    <div class="container rtl">
        <div class="row">
            <div class="col-md-12 sidebar_heading text-center mb-2">
                <h1 class="h3  mb-0 folot-left headerTitle">Our Store Location</h1>
            </div>
        </div>
    </div>

    <!-- Split section: Map + Contact form-->
    <div class="container rtl" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
        <div class="row no-gutters">

            <div class="col-md-12 iframe-full-height-wrap ">
                <h2 class="h4 mb-4 text-center"
                    style="color: #030303; font-weight:400;">Dhaka</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49133.41208430023!2d90.34420408760322!3d23.75227499063936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ef6c85e9ed%3A0xd6f2fb2d35c4cca!2sJ%26J%20Fashion!5e0!3m2!1sen!2sbd!4v1694666615762!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-md-12 iframe-full-height-wrap " style="margin-right: 5px">
                <h2 class="h4 mb-4 text-center"
                    style="color: #030303; font-weight:400;">Dhaka</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3651.7935770950894!2d90.37099999678955!3d23.7547394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sShop%23303%2C%203rd%20Floor%2C%20Plaza%20A.R.%2C%20Dhanmondi%2C%20Dhaka-1209.%2C%20Dhanmondi%2C%20Dhaka-1209!5e0!3m2!1sen!2sbd!4v1694666203787!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-md-12 iframe-full-height-wrap " style="margin-right: 5px">
                <h2 class="h4 mb-4 text-center"
                    style="color: #030303; font-weight:400;">Dhaka</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.859630981534!2d90.37469027411856!3d23.752384488702468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ad9fa517b1%3A0x35432872356d26a0!2sMetro%20Shopping%20Mall!5e0!3m2!1sen!2sbd!4v1694666378654!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>

@endsection


@push('script')
{{-- recaptcha scripts start --}}
@if(isset($recaptcha) && $recaptcha['status'] == 1)
    <script type="text/javascript">
        var onloadCallback = function () {
            grecaptcha.render('recaptcha_element', {
                'sitekey': '{{ \App\CPU\Helpers::get_business_settings('recaptcha')['site_key'] }}'
            });
        };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async
            defer></script>
    <script>
        $("#getResponse").on('submit', function (e) {
            var response = grecaptcha.getResponse();

            if (response.length === 0) {
                e.preventDefault();
                toastr.error("{{\App\CPU\translate('Please check the recaptcha')}}");
            }
        });
    </script>
@else
<script type="text/javascript">
    function re_captcha() {
        $url = "{{ URL('/contact/code/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('default_recaptcha_id').src = $url;
        console.log('url: '+ $url);
    }
</script>
@endif
{{-- recaptcha scripts end --}}
@endpush

