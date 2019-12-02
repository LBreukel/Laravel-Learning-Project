@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Welcome</h1>

     <div class="container-fluid">

        <div class="row">

            <div class="col-lg-9 col-12">

                <div class="row">
                
                    <div class="img-carousel col-12">

                        <img class="img-fluid" src="/img/bdo_header_2.jpg">
                        <img class="img-fluid" src="/img/bdo_header.jpg">
                        <img class="img-fluid" src="/img/bdo_header_3.jpg">
                        <img class="img-fluid" src="/img/bdo_header_4.jpg">
                        <img class="img-fluid" src="/img/bdo_header_5.jpg">

                    </div>

                    <div class="col-12 mt-3">

                        <p>
                            Black Desert Online is a sandbox, living-world MMORPG. Experience fast-paced, action-packed combat, hunt monsters and huge bosses, fight with friends in a guild to siege nodes and conquer castles, train your life skills such as fishing, trading,crafting, cooking, and much more! 
                        </p>

                        <p>
                           Welcome to Black Desert Online Hub (BDO Hub). This is a central gatherpoint for all the things Black Desert players need, with an extensive database that holds all the items in the game to an enhancing calculator and even a horse breeding calaculator. Using this site along Famme's bdo tools will provide the most optimal experience until we can provide our own map tools in the future.    
                        </p>

                        <p>
                           This site is in no way affeliated with KakaoGames or Pearl Abyss and is a fan made tool.
                        </p>

                    </div>
                
                </div>

                

            </div>

            <div class="col-lg-3 d-none d-lg-block sticky-top">

            <a class="twitter-timeline" data-height="90vh" href="https://twitter.com/BDO_News?ref_src=twsrc%5Etfw">Tweets by BDO_News</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

            </div>

            

            

        </div>

    </div>

    <script>

        $('body').hide();

        $(document).ready(function(){

            $('body').fadeIn(500);

            $('.img-carousel').slick({
                arrows: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 10000,
                speed: 1500,
                fade: true,
                cssEase: 'linear'
            });



        });

    </script>


@endsection
