@component('defaultLayout')
    <section id="projects">
        <h1 id="projects-title">Projects</h1>
        @for($i = 0; $i < 2 ; $i++)
            @component('components.projects.project_card')
            @endcomponent
        @endfor
    </section>
@endcomponent
