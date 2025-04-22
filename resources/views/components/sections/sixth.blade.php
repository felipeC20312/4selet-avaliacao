@props(['articles'])

<script>
  window.articlesData = @json(array_values($articles));
</script>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 d-flex flex-column justify-content-between" style="">
        <div>
          <h6 class="section-flag">Articles</h6>
          <h1 class="title-secondary">The best furniture comes from Lalasia</h1>
        </div>
        <p class="paragraph">Pellentesque etiam blandit in tincidunt at donec.</p>

        @php
          $activeArticle = collect($articles)->firstWhere('status', 'active');
        @endphp

        @if ($activeArticle)
          <div id="active-article" class="d-flex align-items-end position-relative"
            style="max-width: 582px; aspect-ratio: 1; background-size: cover; background-position: center; padding: 20px; gap: 20px; filter: drop-shadow(5px 5px 100px #00000008);">
            <div style="z-index: 10">
              <p class="paragraph" id="article-tag" style="color: white"></p>
              <h6 class="topic" id="article-title"
                style="color: white; font-size: clamp(16px, 3vw, 26px);"></h6>
              <p class="paragraph line-clamp-1" id="article-resume" style="color: white"></p>
              <a href="" class="common-text-secondary"
                style="color: white; font-weight: 500;">Read More</a>
            </div>

            <div class="d-none d-lg-flex position-absolute"
              style="bottom: -50px; right: 0; z-index: 999;">
              <button id="btn-prev" class="button-type-02"
                style="width: 70px; aspect-ratio: 1; padding: 21px;">
                <img src="{{ asset('icons/articles-left-arrow-icon.svg') }}" alt=""
                  loading="lazy">
              </button>
              <button id="btn-next" class="button-type-01"
                style="width: 70px; aspect-ratio: 1; padding: 21px;">
                <img src="{{ asset('icons/articles-rigth-arrow-icon.svg') }}" alt=""
                  loading="lazy">
              </button>
            </div>

            <div class="position-absolute"
              style="content: none; background: linear-gradient(0deg,rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0) 100%);; width: 100%; height: 100%; left: 0; bottom: 0;">
            </div>
          </div>
        @endif
      </div>

      <div id="inactive-articles-container" class="col-12 col-lg-6">
        @foreach ($articles as $article)
          @if ($article['status'] === 'inactive')
            <div class="d-flex"
              style="max-height: 260px; box-sizing: border-box; margin-top: 30px; gap: clamp(14px, 1.5vw, 26px);">
              <div style="max-width: 260px; min-width: 110px; aspect-ratio: 1; object-fit: cover;">
                <img src="{{ asset('images/' . $article['content-image']) }}"
                  alt="{{ $article['content-image'] }}" style="width: 100%; height: 100%;"
                  loading="lazy">
              </div>

              <div style="max-width: 330px; padding: 26px 0px;">
                <p class="topic-secondary" style="color: var(--paragraph-color)">
                  {{ $article['tag'] }}</p>
                <h6 class="topic line-clamp-2">{{ $article['title'] }}</h6>
                <p class="paragraph d-none d-lg-block line-clamp-1">{{ $article['resume'] }}</p>

                <div class="d-flex">
                  <div>
                    <img src="{{ asset('images/' . $article['author-image']) }}"
                      alt="{{ $article['author-image'] }}" loading="lazy">
                  </div>
                  <p class="topic-secondary">{{ $article['author'] }}</p>
                  <p class="d-none d-lg-block"
                    style="font-size: 14px; color: var(--paragraph-color); font-weight: 500;">
                    {{ $article['creation-date'] }}</p>
                </div>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>
    <div class="d-flex justify-content-between" style="margin-top: 180px">
      <h1 class="title-secondary">Join with me to get special discount</h1>
      <button class="button-type-01">
        <p class="common-text-secondary" style="margin: 0; padding: 0; color: white;">Learn More</p>
      </button>
    </div>
</section>
