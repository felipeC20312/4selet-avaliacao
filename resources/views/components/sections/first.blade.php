@props(['products'])

<section id="first-section">
  <div class="container" style="margin-top: 180px">
    <div
      class="reative-margin-b col-12 d-flex flex-column align-items-center jsutify-items-center text-center"
      style="position:relative; gap: 30px;">
      <div style="max-width: 760px;">
        <h1 class="title-primary">Discover Forniture With High Quality Wood</h1>
        <p class="paragraph">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim
          placerat nisi,
          adipiscing mauris non. Purus
          parturient viverra nunc, tortor sit laoreet. Quam tincidunt aliquam adipiscing tempor.</p>
      </div>

      <img src="{{ asset('images/sketch-img-1.svg') }}" alt=""
        class="img-fluid d-none d-lg-block"
        style="position: absolute; z-index: 999; top: 1vw; left: 1vw; width: 30%;" loading="lazy">
      <img src="{{ asset('images/sketch-img-2.svg') }}" alt=""
        class="img-fluid d-none d-lg-block"
        style="position: absolute; z-index: 999; top: 80px; right: 15vw; width: 5%;" loading="lazy">
    </div>

    <div
      class="position-relative col-12 d-flex flex-column align-items-center jsutify-items-center gap-1 gap-lg-0"
      style="filter: drop-shadow(5px 5px 100px #00000008);">
      <div class="input-form d-flex justify-content-between align-items-center"
        style="max-width: 810px; width: 100%; background-color: var(--screen-color); padding: clamp(8px, 1vw, 16px); box-sizing: border-box;">
        <div class="d-flex gap-3 align-items-center" style="flex: 1;">
          <img src="{{ asset('icons/search-normal-icon.svg') }}" alt="" loading="lazy">
          <input type="text" id="search-input" placeholder="Search Property" class="paragraph"
            style="border: none; background: transparent; outline: none; width: 100%;">
        </div>
        <button class="button-type-01">
          <p class="common-text-secondary" style="margin: 0; padding: 0; color: white;">Search</p>
        </button>
      </div>

    </div>
    <img src="{{ asset('images/image-01.svg') }}" alt="search-icon.png" loading="lazy">

    <div id="search-results" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mt-5"></div>
  </div>


</section>

<script>
  window.products = @json($products);
</script>
