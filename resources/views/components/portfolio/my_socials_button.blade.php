@props(['link', 'imgSrc', 'imgAlt'])
<a href="{{$link}}" class="my-socials-button" target=”_blank”>
    <img src="{{asset($imgSrc)}}" alt="{{$imgAlt}}">
</a>
