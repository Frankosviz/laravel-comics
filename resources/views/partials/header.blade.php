<header>
<div class="container d-flex justify-content-between bg-white">
        <div class="d-flex align-items-center justify-content-center">
            <a href="{{ route('homepage') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo"></a>
        </div>
        <div >
            <ul class="d-flex align-items-center justify-content-center gap-5 list-unstyled  ">
                <li class="active" v-for="(link, index) in links" :key="index">
                    
                </li>
            </ul>
        </div>
    </div>
</header>