@props(['testimonials'])

<section>
  <div class="container">
    <div class="col-12 d-flex flex-column align-items-center justify-content-center">
      <div class="text-center" style="max-width: 650px">
        <h6 class="section-flag">Testimonials</h6>
        <h1 class="title-secondary">What our customer say</h1>
        <p class="paragraph">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim
          placerat nisi,
          adipiscing mauris non purus parturient.</p>
      </div>
    </div>
  </div>

  <div class="swiper swiper-testimonials"
    style="margin-top: 50px; filter: drop-shadow(5px 5px 100px #00000008);">
    <div class="swiper-wrapper">
      @foreach ($testimonials as $testimonial)
        <div class="swiper-slide">

          <div class="testimonials-card">
            <img src="{{ asset('icons/quote-up-icon.svg') }}" alt="quote-up-icon.svg"
              style="width: 40px; aspect-ratio: 1;">
            <p class="paragraph">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum
              dignissim placerat nisi, adipiscing mauris non.</p>

            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-center"
                style="gap: 12px; height: fit-content; width: fit-content">
                <div
                  style="width: 50px; aspect-ratio: 1; border-radius: 100px; object-fit: contain; overflow: hidden;">
                  <img src="{{ asset('images/' . $testimonial['image']) }}"
                    alt="{{ $testimonial['image'] }}" style="width: 100%;">
                </div>
                <p class="common-text-primary">{{ $testimonial['name'] }}</p>
              </div>

              <div class="d-flex align-items-center"
                style="gap: 12px; height: fit-content; width: fit-content">
                <img src="{{ asset('icons/star-icon.svg') }}" alt="star-icon.svg">
                <p class="common-text-secondary">{{ $testimonial['evaluation'] }}</p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
