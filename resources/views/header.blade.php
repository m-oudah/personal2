<body data-spy="scroll" data-target=".navbar" data-offset="51">
       
<!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="{{route('index',$lang)}}" class="navbar-brand">MyProfile</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{route('index',$lang)}}" class="nav-item nav-link active">{{__('trans.home')}}</a>
                        <a href="#about" class="nav-item nav-link">{{__('trans.About Me')}}</a>
                        <a href="#portfolio" class="nav-item nav-link">{{__('trans.Portofolio')}}</a>
                        <a href="#team" class="nav-item nav-link">{{__('trans.Videos')}}</a>
                        <a href="#blog" class="nav-item nav-link">{{__('trans.Blog')}}</a>
                        <a href="#contact" class="nav-item nav-link">{{__('trans.Contact')}}</a>
                        @if ($lang=='ar')
                        <a href="/en" class="navbarBtn">English</a>
                        @else
                        <a href="/ar" class="navbarBtn">العربية</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

