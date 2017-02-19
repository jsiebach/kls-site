<header class="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Kirsten Siebach</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                @foreach($menu as $item)
                    <li><a class="{{Request::url() == $item->url() ? "active" : ""}}" href="{{$item->url()}}">{!! $item->name !!}</a></li>
                @endforeach
            <!--<ul class="nav navbar-nav navbar-right">-->
                <!--<li><a v-link="{ name: 'contact' }"></i> Contact Me</a></li>-->
                <!--</ul>-->
                </ul>
            </div>
        </div>
    </nav>
</header>