<div class="fd-style">
    <ul class="containerArticles d-flex align-items-center justify-content-between">
        
        <li class="d-flex align-items-center gap-3">
        @foreach ($objectsShop as $object)
            <img class="imgArticles" src="{{$object['src']}}" alt="object.alt">
            <p class="pArticles">{{ $object['text'] }}</p>
            @endforeach
        </li>
        
    </ul>
</div>