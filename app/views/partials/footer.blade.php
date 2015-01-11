<!-- Footer -->

    <div id = "footer" class="outer-row dark breath">
        <div class="inner-row">
            <div class ="footer-col-1">
                <div class ="floater">
                    <img src="{{\Bluegallery\Helpers::image('interface/gmaps-icon.gif')}}" alt="google maps icon">
                    <p>Click <a href="<?php echo getenv('WEBPATH').'map.php' ?>">here</a> for a google map to our locations</p>
                </div>
                <p><i class="fa fa-phone"></i> Call us on: +233 303 300 121</p><p class="warning"><i class="fa fa-warning"></i>Our Tema and Max Mart branches are our only showrooms in Ghana.</p>
            </div>
            <div class ="footer-col-2">
                <ul>
                    <li><a href="{{getenv('WEBPATH')}}">Home</a></li>
                    <li><a href="{{getenv('WEBPATH')}}about">About</a></li>
                    <li><a href="{{getenv('WEBPATH')}}projects">Projects</a></li>
                    <li><a href="{{getenv('WEBPATH')}}contact">Contact Us</a></li>
                    <li><a href="{{getenv('WEBPATH')}}map">Locate Us</a></li>
                </ul>
            </div>
            <div class ="footer-col-3">
                <ul>
                    <li><a href="{{\Bluegallery\Helpers::linkToCategory(101)}}">Living Room</a></li>
                    <li><a href="{{\Bluegallery\Helpers::linkToCategory(102)}}">Dining Room</a></li>
                    <li><a href="{{\Bluegallery\Helpers::linkToCategory(103)}}">Bedroom</a></li>
                    <li><a href="{{\Bluegallery\Helpers::linkToCategory(104)}}">Accessories</a></li>
                    <li><a href="{{\Bluegallery\Helpers::linkToCategory(105)}}">Office Furniture</a></li>
                </ul>
            </div>
            <div class ="footer-col-4">
                <div class ="floater">
                    <img src="{{\Bluegallery\Helpers::image('interface/bg_trademark.png')}}" alt="Blue Gallery Trademark">
                    <p>Blue Gallery™ and the Blue Gallery logo are trademarks of Tarzan Ent. Ltd</p>
                </div>
                <hr>
                <p>Website designed, developed, built and maintained by Mustapha Hamoui</p>
                <p><a href="">Admin Login</a></p>
            </div>
        </div>


    </div>



</div> <!-- //paper -->

{{--
<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15958815-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- Statcounter -->
<script type="text/javascript">
var sc_project=3755389;
var sc_invisible=1;
var sc_security="0198baa1";
</script>
<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script>
<!-- End of StatCounter Code -->
--}}

</body>
</html>