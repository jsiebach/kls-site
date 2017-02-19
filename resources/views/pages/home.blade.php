@extends('master')
@section('body')
    <div class="row">
        <div class="col-md-8 col-sm-7">
            <h1>{{$page->headline}}
                <small><i>{{$page->subheadline}}</i></small>
            </h1>
            <hr>
            <div class="slideshow">
                <ul class="bxslider">
                    <li><img src="uploads/slider/Kirsten-Siebach_Caltech_Graduation_2016.jpg" title="Caltech Graduation - 2016"></li>
                    <li><img src="uploads/slider/Kirsten-Siebach_LA_with_family.jpg" title="Touring Los Angeles with family - 2016"></li>
                    <li><img src="uploads/slider/Kirsten-Siebach_Giants_Causeway_Northern_Ireland.jpg" title="Giants Causeway, Northern Ireland – 2015"></li>
                    <li><img src="uploads/slider/Kirsten-Siebach_Singapore_Skyline.jpg" title="Singapore Skyline – 2015"></li>
                    <li><img src="uploads/slider/Kirsten-Siebach_Big_Sur_California.jpg" title="California Coast – 2015"></li>
                    <li><img src="uploads/slider/Kirsten-Siebach_Svinafellsjokul_Glacier_Iceland.jpg" title="Hiking Svinafellsjokul Glacier, Iceland – 2014"></li>
                </ul>
            </div>
            <div>
                <h3>Bio</h3>
                <p>{!! $page->bio !!}</p>
            </div>
            <div>
                <h3>Press</h3>
                <ul class="list-group">
                    @foreach(json_decode($page->press_links) as $press)
                        <li class="list-group-item">
                            <a href="{!! $press->link !!}" target="_blank">{!! $press->title !!}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-sm-5">
            <div class="text-center">
                <div class="thumbnail" style="border: none;margin-bottom:5px;">
                    <img class="img-circle" src="/uploads/ks-profile-pic.jpg" style="width:80%;margin-top:20px;">
                </div>
                <div class="panel-body">
                    <p>
                        {!! $page->intro !!}
                    </p>
                </div>
                <table class="table table-condensed text-left">
                    @foreach(json_decode($page->social_links) as $link)
                        <tr>
                            <td style="padding-left: 30px;">
                                <i class="fa {!! $link->icon !!}"></i>
                            </td>
                            <td>
                                <a href="{!! $link->link !!}" target="_blank">{!! $link->title !!}</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

@section('header-styles')
    <script type='application/ld+json'>
    {
      "@context": "http://www.schema.org",
      "@type": "person",
      "name": "Kirsten Siebach",
      "url": "https://kirstensiebach.com",
      "email": "kirsten.siebach@stonybrook.edu",
      "image": "https://kirstensiebach.com/uploads/ks-profile-pic.jpg",
      "sameAs": "http://orcid.org/0000-0002-6628-6297",
      "sameAs": "http://mars.nasa.gov/people/info.cfm?id=22897",
      "sameAs": "https://www.linkedin.com/in/kirsten-siebach-33433985",
      "sameAs": "https://www.flickr.com/photos/77604748@N07/albums",
      "sameAs": "https://www.researchgate.net/profile/Kirsten_Siebach",
      "sameAs": "https://scholar.google.com/citations?hl=en&btnA=1&authorid=15489039706247508211&user=TU6sGpYAAAAJ",
      "sameAs": "https://plus.google.com/+KirstenSiebach"
    }
     </script>
@append