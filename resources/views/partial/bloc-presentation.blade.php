
<div style="height: 850px" class="d-flex justify-content-center align-items-center">
    <div  class="bloc-presentation d-flex flex-column align-items-center">
        <img src="{{asset('image/Logo-martin-site.png')}}" class="reveal-2" style="width: 50%" alt="">
        <p class="p-2 titre1 text-center reveal-3">Développeur Web</p>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a rel="alternate" class="dropdown-item cursor-none" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode, null, [], true)}}">
                    {{$properties['native']}}
                </a>
            @endforeach
            </ul>
</div>
</div>