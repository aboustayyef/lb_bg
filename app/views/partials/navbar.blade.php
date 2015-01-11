<!-- Navbar -->
<div id="navbar">
    <ul>
        <li><a href="{{getenv('WEBPATH')}}">Home</a></li>
        <li><a href="{{getenv('WEBPATH')}}about">About</a></li>
        <li id ="theCollection">
            Collection
            <?php  //Render::draw_navbar() ?>
        </li>
        <li><a href="{{getenv('WEBPATH')}}projects">Projects</a></li>
        <li><a href="{{getenv('WEBPATH')}}contact">Contact Us</a></li>
        <li><a href="{{getenv('WEBPATH')}}map">Locate Us</a></li>
    </ul>
</div>
