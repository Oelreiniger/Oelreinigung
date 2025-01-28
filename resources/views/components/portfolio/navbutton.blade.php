@props(['link', 'imgSrc', 'imgAlt','text'])
<a href="{{$link}}" class="button-wrapper">
    <img class="navbar-button-image" src="{{asset($imgSrc)}}" alt="{{$imgAlt}}">
    <p>{{$text}}</p>
</a>
