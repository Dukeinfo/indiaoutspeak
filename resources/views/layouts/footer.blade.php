<div class="bg2 p-t-40 p-b-25">
    <div class="container">
        <div class="row">
            @php
                
                $getFooteraddress = DB::table('contact_infos')->where('deleted_at',Null)->first();

            @endphp
            <div class="col-lg-4 p-b-20">
                <div class="size-h-3 flex-s-c">
                    <a href="{{url('/')}}">
                        <img class="max-s-full" src="{{ isset($getFooteraddress->footer_logo) ? getSiteLogos($getFooteraddress->footer_logo) :  asset('assets/images/logo-white.png')}}" alt="LOGO">
                    </a>
                </div>
                <div>
                    <p class="f1-s-1 cl11 p-b-16">
                        @if(isset($getFooteraddress->disclaimer))
                        
                        {!!  Str::limit($getFooteraddress->disclaimer, 150) !!}
                        <a href="{{route('readmore')}}" class="cl17">Read more</a>
                        @else 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor magna eget elit efficitur, at accumsan sem placerat. Nulla tellus libero, mattis nec molestie at, facilisis ut turpis. Vestibulum dolor metus, tincidunt eget odio...
                        <a href="{{route('readmore')}}" class="cl17">Read more</a>
                        @endif

                    </p>
                    <div class="size-h-3 flex-s-c">
                        {{-- <h5 class="f1-m-7 cl0">
                        @if (session()->get('language') === 'hindi')
                            {!! 'हम सामाजिक हैं, हमसे जुड़ें'!!}
                       @elseif (session()->get('language') === 'english')
                                We're social, connect with us
                        @elseif (session()->get('language') === 'punjabi')
                                {!! 'ਅਸੀਂ ਸਮਾਜਿਕ ਹਾਂ, ਸਾਡੇ ਨਾਲ ਜੁੜੋ'!!}
                       @elseif (session()->get('language') === 'urdu')
                                {!! 'ہم سماجی ہیں، ہمارے ساتھ جڑیں۔' !!}
                       @endif
                        </h5> --}}
                    </div>
                    @php
                          $getsocialApps = \App\Models\SocialApp::where('status' , 'Active')->get();
                    @endphp
                    <div>
                        @forelse ($getsocialApps  as $socialApps )
                        <a href="{{$socialApps->link ?? '' }}" target="_blank" class="fs-18 cl11 hov-cl10 trans-03 m-r-10">
                            <span class="{{$socialApps->icon ?? '' }}"></span>
                        </a> 
                        @empty
                            
                        @endforelse
                    
              
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-5 p-b-20">
                <div class="size-h-3 flex-s-c">
                    <h5 class="f1-m-7 cl0">
                            @if (session()->get('language') === 'hindi')
                                 जुड़ा हो
                            @elseif (session()->get('language') === 'english')
                                  Get Connected
                             @elseif (session()->get('language') === 'punjabi')
                                    {{-- ਸੰਪਰਕ --}}
                                    Contact us
                            @elseif (session()->get('language') === 'urdu')
                                    جڑیں
                            @endif
                    </h5>
                </div>
                <address class="cl11">

                @if (session()->get('language') === 'hindi')
                <p class="mb-3"><i class="fa fa-map-marker-alt fa-fw mr-2"></i> 
                     
                     {!! $getFooteraddress->address ??  'NA'!!}
                     {!! $getFooteraddress->zip_code ??  ''!!}

                    </p>
               @elseif (session()->get('language') === 'english')
                    <p class="mb-3"><i class="fa fa-map-marker-alt fa-fw mr-2"></i> 
                        {!! $getFooteraddress->address ??  'NA'!!}
                          {!! $getFooteraddress->zip_code ??  ''!!}

                    </p>
                @elseif (session()->get('language') === 'punjabi')
                <p class="mb-3"><i class="fa fa-map-marker-alt fa-fw mr-2"></i> 

                     
                    {!! $getFooteraddress->address ??  'NA'!!}
                    {!! $getFooteraddress->zip_code ??  ''!!}

                     
                </p>
               @elseif (session()->get('language') === 'urdu')
               <p class="mb-3"><i class="fa fa-map-marker-alt fa-fw mr-2"></i> 
                {!! $getFooteraddress->address ??  'NA'!!}
                {!! $getFooteraddress->zip_code ??  ''!!}

                    
               </p>                    
               @endif
                  
                    <p class="mb-3"><i class="fa fa-envelope fa-fw mr-2"></i> 
                        <a href="mailto:{!! $getFooteraddress->email ??  ''!!}" 
                         class="cl11 hov-cl10 trans-03"> {!! $getFooteraddress->email ??  ''!!}</a>
                    </p>
                    <p class="mb-3"><i class="fa fa-mobile-alt fa-fw mr-2"></i>
                        <a href="tel:{{ $getFooteraddress->phone ?? 'NA' }}" class="cl11 hov-cl10 trans-03">{{ $getFooteraddress->phone ?? 'NA' }}</a>
                        <a href="tel:{{ $getFooteraddress->alternate_phone ?? '' }}" class="cl11 hov-cl10 trans-03">{{ $getFooteraddress->alternate_phone ?? '' }}</a>


                        </p>
                    <p class="mb-3"><i class="fa fa-globe fa-fw mr-2"></i> 
                        <a href="{!! $getFooteraddress->website ??  'NA'!!}" 
                         class="cl11 hov-cl10 trans-03">{!! $getFooteraddress->website ??  ''!!}</a></p>
                </address>

                <div class="size-h-3 flex-s-c">
                    <h5 class="f1-m-7 cl0">
                        
                @if (session()->get('language') === 'hindi')
                        {!! 'हमारा ऐप डाउनलोड करें'!!}
                   @elseif (session()->get('language') === 'english')
                            Download Our App
                    @elseif (session()->get('language') === 'punjabi')
                            {!! 'ਸਾਡੀ ਐਪ ਡਾਊਨਲੋਡ ਕਰੋ'!!}
                   @elseif (session()->get('language') === 'urdu')
                            {!! 'ہماری ایپ ڈاؤن لوڈ کریں۔' !!}
                   @endif
                    </h5>
                </div>
                <div>
                    <a href="{!! $getFooteraddress->Mobile_ios_link ??  ' javascript:void();'!!}"> 
                        <img src="{{ isset($getFooteraddress->Mobile_ios) ? getSiteLogos($getFooteraddress->Mobile_ios) :  asset('assets/images/app-logo.png')}}" class="img-fluid" width="180" alt="">
                    </a>
                    <a href="{!! $getFooteraddress->Mobile_android_link ??  ' javascript:void();'!!}">
                        <img src="{{ isset($getFooteraddress->Mobile_android) ? getSiteLogos($getFooteraddress->Mobile_android) :  asset('assets/images/apple-app.png')}}" class="img-fluid" width="180" alt="">
                    </a>
                </div>

            </div>
            <div class="col-sm-6 col-lg-3 p-b-20">
                <div class="size-h-3 flex-s-c">
                    <h5 class="f1-m-7 cl0">
                        
                    @if (session()->get('language') === 'hindi')
                            {!! 'वर्ग'!!}
                   @elseif (session()->get('language') === 'english')
                            Category
                    @elseif (session()->get('language') === 'punjabi')
                            {{-- {!! 'ਸ਼੍ਰੇਣੀ'!!} --}}
                            Category
                   @elseif (session()->get('language') === 'urdu')
                            {!! 'قسم' !!}
                   @endif
                    </h5>
                </div>
                <ul class="m-t--12">

             @php
                 $getFooterMenus = DB::table('categories')->take(8)->get();
             @endphp

                @forelse ($getFooterMenus as $key => $menu )
                    @if($key == 0 )  
                    @continue
                    @endif
                    <li class="how-bor1 p-rl-5 p-tb-10">
                        <a href="{{ route('home.category', ['id' => $menu->id, 'slug' => createSlug($menu->category_en)]) }}" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                            @switch(session()->get('language'))
                                @case('hindi')
                                    {{ $menu->category_hin ?? "NA" }}
                                    @break
                                @case('punjabi')
                                    {{ $menu->category_pbi ?? "NA" }}
                                    @break
                                @case('urdu')
                                    {{ $menu->category_urdu ?? "NA" }}
                                    @break
                                @case('english')
                                    {{ $menu->category_en ?? "NA" }}
                                    @break
                                @default
                                    {{ $menu->category_en ?? "NA" }}
                            @endswitch
                        </a>
                    </li>
                  
                @empty
                @endforelse

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="bg11">
    <div class="container size-h-4 p-tb-15">
        <div class="row">
            <div class="col-lg-4">
                <a href="{{route('readmore')}}" class="f1-s-1 cl10 hov-link1">
                    @if (session()->get('language') === 'hindi')
                        {!! 'हमारे बारे में'!!}
                    @elseif (session()->get('language') === 'english')
                            About Us
                    @elseif (session()->get('language') === 'punjabi')
                            {!! 'ਸਾਡੇ ਬਾਰੇ'!!}
                    @elseif (session()->get('language') === 'urdu')
                            {!! 'ہمارے بارے میں' !!}
                    @endif
                </a>
                <span>|</span>
                <a href="{{route('privacyPolicy')}}" class="f1-s-1 cl10 hov-link1">
                    @if (session()->get('language') === 'hindi')
                            {!! 'गोपनीयता नीति'!!}
                @elseif (session()->get('language') === 'english')
                            Privacy Policy
                    @elseif (session()->get('language') === 'punjabi')
                            {!! 'ਪਰਾਈਵੇਟ ਨੀਤੀ'!!}
                @elseif (session()->get('language') === 'urdu')
                            {!! 'رازداری کی پالیسی' !!}
                @endif
                </a>
            </div>
            <div class="col-lg-8">
                <span class="f1-s-1 cl0 txt-center">
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> 
                    {{-- All rights reserved
                    Maintained & Developed By: --}}
                    {!! $getFooteraddress->copyright ??  'NA'!!}
                    <a href="https://www.dukeinfosys.com" class="f1-s-1 cl10 hov-link1">
                                {{-- Duke Infosys --}}
                     {!! $getFooteraddress->designed_by ??  'NA'!!}
                    </a>
                </span>
            </div>
        </div>

    </div>
</div>