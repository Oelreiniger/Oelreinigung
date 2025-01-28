@component('defaultLayout')
    <div class="video-background">
        <video autoplay muted loop>
            <source src="{{asset("storage/homepage/Komp1.mp4")}}" type="video/mp4">
        </video>
    </div>
    <section>
        <div id="centered-navbar-border"></div>
        <div id="centered-navbar">
            @include('components.portfolio.navbutton', ['link' => 'me',
                                                        'imgSrc' => 'storage/homepage/book.svg',
                                                        'imgAlt' => 'About-me Icon',
                                                        'text' => 'ABOUT ME'])

            @include('components.portfolio.navbutton', ['link' => 'projects',
                                                        'imgSrc' => 'storage/homepage/projects.svg',
                                                        'imgAlt' => 'Projects Icon',
                                                        'text' => 'PROJECTS'])

            @include('components.portfolio.navbutton', ['link' => 'contact',
                                                        'imgSrc' => 'storage/homepage/contact.svg',
                                                        'imgAlt' => 'Contact Icon',
                                                        'text' => 'CONTACT'])
        </div>
    </section>
@endcomponent
