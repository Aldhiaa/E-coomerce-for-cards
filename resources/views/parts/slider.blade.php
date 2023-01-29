<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                    </ol>
                    
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>UR</span>-Card</h1>
                                <h2>عرض منتج 1</h2>
                             </div>
                            <div class="col-sm-6">
                                <img src="{{asset('assets/images/slider/1.png')}}" class="girl img-responsive" alt="" />
                                <img src="{{asset('assets/images/home/.png')}}"  class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>UR</span>-Card</h1>
                                <h2>عرض منتج 2</h2>
                                <button type="button" class="btn btn-default get">اشتري الآن</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('assets/images/slider/2.png')}}" class="girl img-responsive" alt="" />
                                <img src="{{asset('assets/images/home/.png')}}"  class="pricing" alt="" />
                            </div>
                        </div>                                
                    </div>                   
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section>