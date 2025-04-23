@props(['products'])

<section id="third-section">
  <div class=" container">
    <div class="col-12 d-flex flex-column align-items-center justify-content-center">
      <div class="text-center" style="max-width: 650px">
        <p class="section-flag">Products</p>
        <h1 class="title-secondary">Our popular product</h1>
        <p class="paragraph">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim
          placerat nisi,
          adipiscing mauris non purus parturient.</p>
      </div>
    </div>
  </div>

  <div class="swiper swiper-products" style="margin-top: 50px">
    <div class="swiper-wrapper">
      @foreach ($products as $product)
        <div class="swiper-slide">
          <div class="d-flex justify-content-center align-items-center mb-2"
            style="max-width: 395px; aspect-ratio: 1; overflow: hidden">
            <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}"
              style="width: 100%; height: 100%; object-fit: cover" loading="lazy">
          </div>
          <h6 class="paragraph">{{ $product['tag'] }}</h6>
          <p class="topic">{{ $product['name'] }}</p>
          <h6 class="paragraph">{{ $product['description'] }}</h6>
          <p class="topic">${{ $product['value'] }}</p>
        </div>
      @endforeach
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>
