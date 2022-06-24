<section class="comics">
    <div class="container">
      <div class="section-tag">{{$section_title}}</div>
      <div class="comics__list">
        @foreach ($comic_array as $comic)
            @include('components.comic-card', $comic)
        @endforeach
      </div>
    </div>
  </section>