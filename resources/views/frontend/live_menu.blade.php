@extends('frontend.layouts.app')

@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4 text-danger">{{ translate('Live Streaming') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home') }}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="#">"{{ translate('Live') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="row">
                       <div class="col-lg-12 mt-2 mb-2 mx-auto">
                            <!--<h4 class="text-center">Facebook Live</h4>-->
                            <div style="">
                             
                             
                <!--             <div class="row">-->
                <!--       <div class="col-lg-10 mt-2 mb-2 mx-auto">-->
                            <!--<h4 class="text-center">Facebook Live</h4>-->
                <!--            <div>-->
                <!--             <iframe width="560" height="315" src="https://www.youtube.com/embed/WbL4_ugzsDQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--</div>-->
                             
                             <iframe width="100%" height="550" src="https://www.youtube.com/embed/WbL4_ugzsDQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen> </iframe>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
</section>    



<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h2 class="fw-600 h4 text-danger">{{ translate('Recent Live (Youtube)') }}</h2>
            </div>
        </div>
    </div>
</section>


<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="row">
                        <div class="col-lg-4 mt-4">
                            
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/-htyjXWhbtw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        
                       
                        <div class="col-lg-4 mt-4">
                             <iframe width="100%" height="300" src="https://www.youtube.com/embed/f3NjbN8ceNI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        
                        <div class="col-lg-4 mt-4">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/ilC0KxE1EZ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4 mt-4">
                             <iframe width="100%" height="300" src="https://www.youtube.com/embed/W7qOmVXb_D0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        
                        <div class="col-lg-4 mt-4">
                             <iframe width="100%" height="300" src="https://www.youtube.com/embed/hMMOww7l880" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        
                        <div class="col-lg-4 mt-4">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/eAL4PPx3ImY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-lg-4 mt-4">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/Z2_sNCuRFhc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        
                        <div class="col-lg-4 mt-4">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/M5kPH-g4Q-0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        
                        <div class="col-lg-4 mt-4">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/zAdRQKzge4E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    

            </div>
        </div>
    </div>
</section>    





<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h2 class="fw-600 h4 text-danger">{{translate('Recent Live (Facebook)')}}</h2>
            </div>
        </div>
    </div>
</section>


<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="row">
                        <div class="col-lg-4 mt-4">
                            <iframe width="100%" height="300" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsobkisubazar%2Fvideos%2F741816263823149%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </div>
                        
                        <div class="col-lg-4 mt-4">
                             <iframe width="100%" height="300" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsobkisubazar%2Fvideos%2F3238275699651722%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </div>
                        
                        <div class="col-lg-4 mt-4">
                            <iframe width="100%" height="300" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsobkisubazar%2Fvideos%2F176115781868914%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </div>
                    </div>
                    
                    
                <!--<div class="row">-->
                <!--         <div class="col-lg-4 mt-4">-->
                <!--                <iframe width="100%" height="300" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsobkisubazar%2Fvideos%2F739501291095777%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>       -->
                <!--        </div>-->
                        
                <!--        <div class="col-lg-4 mt-4">-->
                <!--            <iframe width="100%" height="300" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsobkisubazar%2Fvideos%2F1594060567707129%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>-->
                <!--        </div>-->
                        
                <!--        <div class="col-lg-4 mt-4">-->
                <!--            <iframe width="100%" height="300" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsobkisubazar%2Fvideos%2F914837782858006%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>-->
                <!--        </div>-->
                <!--    </div>-->
                    


            </div>
        </div>
    </div>
</section>  

@endsection