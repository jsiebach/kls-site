@extends('master')

@section('page_title')
    {{$page->meta_title}}
@endsection

@section('body')
    @include('partials.page-title')

    <p>{!! $page->intro !!}</p>
    <div class="alert alert-info text-center">
        {!! $page->cta !!}
    </div>
    <div class="thumbnail" style="width:60%;margin:0 20%">
        <img src="/uploads/outreach/IMG_4975.jpg">
    </div>
    <br>
    <h3>Recent Keynote Talks</h3>
    <table class="table table-condensed table-striped table-hover">
        @foreach(json_decode($page->selected_examples) as $class)
            @if(isset($class->feature) && $class->feature)
            <tr>
                <td>
                    {!! $class->date !!}
                </td>
                <td>
                    {!! $class->description !!}
                    @if(isset($class->link))
                        <br><a href="{{$class->link}}" target="_blank">{{$class->link}}</a>
                    @endif
                </td>
            </tr>
            @endif
        @endforeach
    </table>
    <br>
    <h3>Videos</h3>
    <div class="row">
        <div class="col-xs-12 col-lg-4 text-center">
            <h4>SBU Postdoc Spotlight 2017</h4>
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/nQeJ945O-_g" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-lg-4 text-center">
            <h4>Google Science Fair Hangout</h4>
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/PqX27E_T8C4" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-lg-4 text-center">
            <h4>Houston Geological Society</h4>
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/NfpzGW2t_KU" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
<br><br>
    <div style="width:60%;margin:0 20%">
        <div class="slideshow">
            <ul class="bxslider">
                <li><img src="/uploads/outreach/IMG_1157.jpg"></li>
                <li><img src="/uploads/outreach/IMG_1199.jpg"></li>
                <li><img src="/uploads/outreach/2015-07-08 16.58.54.jpg"></li>
                <li><img src="/uploads/outreach/2015-06-10 12.02.25.jpg"></li>
                <li><img src="/uploads/outreach/photo 2.jpg"></li>
                <li><img src="/uploads/outreach/Inspiring Visit.JPG"></li>
            </ul>
        </div>
    </div>
    <h3>Additional Talks</h3>
    <table class="table table-condensed table-striped table-hover">
        @foreach(json_decode($page->selected_examples) as $class)
            @if(!isset($class->feature) || !$class->feature)
                <tr>
                    <td>
                        {!! $class->date !!}
                    </td>
                    <td>
                        {!! $class->description !!}
                        @if(isset($class->link))
                            <br><a href="{{$class->link}}" target="_blank">{{$class->link}}</a>
                        @endif
                    </td>
                </tr>
            @endif
        @endforeach
    </table>

    <br><br>

    <h3>Teaching Experience</h3>
    <table class="table table-condensed table-striped table-hover">
        @foreach(json_decode($page->teaching_experience) as $class)
        <tr>
            <td>
                {!! $class->description !!}
                @if(isset($class->link))
                <br><a href="{{$class->link}}" target="_blank">{{$class->link}}</a>
                @endif
            </td>
        </tr>
        @endforeach
    </table>

    <br><br>

    <h3>Additional outreach experience</h3>
    <table class="table table-condensed table-striped table-hover">
        @foreach(json_decode($page->adtl_experience) as $class)
        <tr>
            <td>
                {!! $class->description !!}
            </td>
        </tr>
        @endforeach
    </table>
@endsection