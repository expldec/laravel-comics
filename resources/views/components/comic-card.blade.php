<div class="comics__item">
    <a href="{{ route('comic', ['id' => $id]) }}">
        <img src="{{ $thumb }}" alt="{{ $title }}" />
        <h3>{{ $title }}</h3>
    </a>
</div>
