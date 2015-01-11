<!-- Slideshow -->
    <div class="outer-row">
        <div id="slideshow">
            <div class="slide" style="z-index:3"><a href=""><img src="{{asset('img/slideshow')}}/824x347-elegance-simplicity-aran.jpg" width ="824" height="347" alt="blue gallery slide"></a></div>
            <div class="slide"><a href=""><img src="{{asset('img/slideshow')}}/824x347-enhance-your-home-scomfort.jpg" width ="824" height="347" alt="blue gallery slide"></a></div>
            <div class="slide"><a href=""><img src="{{asset('img/slideshow')}}/824x347-glass-coming-back-2-life-kostaboda.jpg" width ="824" height="347" alt="blue gallery slide"></a></div>
            <div class="slide"><a href=""><img src="{{asset('img/slideshow')}}/824x347-interstuhl-seating-knowledge.jpg" width ="824" height="347" alt="blue gallery slide"></a></div>
        </div>
        <div id="feat1">
            <?php
                $airpadPath = \Bluegallery\Helpers::linkToCategory(1052);
            ?>
            <a href="{{$airpadPath}}"><img src="{{asset('img/slideshow')}}/173x173-the-airpad.jpg" alt="feature 1"></a>
        </div>
        <div id="feat2">
            <a href="{{getenv('WEBPATH')}}special/potomanto"><img src="{{asset('img/slideshow')}}/173x173-potomanto.jpg" alt="feature 1"></a>
        </div>
    </div>