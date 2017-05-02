@cache($card)

<div class="card">
    <div class="card-content">
        <div class="media">
            <div class="media-content">
                <h2>{{ $card->title }}</h2>
            </div>
        </div>

        <div class="content">
            <ul>
                @foreach ($card->notes as $note)
                    @include ('cards/_note')
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endcache
