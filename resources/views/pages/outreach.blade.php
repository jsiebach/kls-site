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
    <h3>Selected Examples of Recent Outreach Talks</h3>
    <table class="table table-condensed table-striped table-hover">
        @foreach(json_decode($page->selected_examples) as $class)
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
        @endforeach
    </table>


    <div style="width:60%;margin:0 20%">
        <div class="slideshow">
            <ul class="bxslider">
                <li><img src="/uploads/outreach/IMG_1157.jpg"></li>
                <li><img src="/uploads/outreach/IMG_1199.jpg"></li>
                <li><img src="/uploads/outreach/2015-07-08 16.58.54.jpg"></li>
                <li><img src="/uploads/outreach/2015-06-10 12.02.25.jpd"></li>
                <li><img src="/uploads/outreach/photo 2.jpg"></li>
                <li><img src="/uploads/outreach/Inspiring Visit.JPG"></li>
            </ul>
        </div>
    </div>

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
    <div style="width:100%;text-align: center">
        <h3>Google Science Fair Hangout</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/PqX27E_T8C4" frameborder="0" allowfullscreen></iframe>
    </div>

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