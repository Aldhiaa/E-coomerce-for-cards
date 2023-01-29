<header id="header">	
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{ url('index') }}"><img src="{{asset('assets/images/home/logo-2.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav"> 
                                                   
                            @if(auth()->user() && auth()->user()->type=='provider')                          
                            <li><a href="{{ route('addcard') }}" class="btn ">اضف بطاقتك</a></li>
                            @endif                          
                            @if((auth()->user() && auth()->user()->type=='Customer')||!auth()->user()) 
                            <li style="margin-left: 20px"><a href="{{ route('joinprovide') }}"  class="{{ request()->is('joinprovide') ? 'active' : '' }}" ></i>انظم إلينا</a></li>                                        
                            @endif 
                            @if(auth()->user() && auth()->user()->type =='Customer')
                            <li><a href="{{ url('favorite') }}" class="{{ request()->is('favorite') ? 'active' : ''}}"><i class="fa fa-star"></i> المفضلة</a></li>
                            @endif    
                            @if (!auth()->check())
                            <li style="margin-left: 59px;"><a href="{{route('login')}}" class="{{ request()->is('login') ? 'active' : '' }}" ><i class="fa fa-lock"></i> تسجيل الدخول</a></li>

                            @else
                            <li> <a href="#"> <i class="fa fa-user"></i>{{ auth()->user()->name }}</a></li>
                            @if( auth()->user()->type=='Customer')                          
                            <li><a href="{{ route('cart.index') }}" class="{{request()->is('cart') ? 'active' : '' }}"><i class="fa fa-shopping-cart"></i> عربة التسوق</a></li>                          
                            @endif
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-secondary">تسجيل الخروج</button>
                                </form>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">

            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ route('index') }}" class="{{ request()->is('index') ? 'active' : ''}}"> الرئيسية</a></li>
                            <li><a href="{{ url('index')}}" class="{{ request()->is('index') ? 'active' : '' }}">البطائق</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="بحث"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
