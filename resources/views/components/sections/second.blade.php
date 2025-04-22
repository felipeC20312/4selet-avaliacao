@props(['benefits'])

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="section-flag">Benefits</p>
        <div class="d-flex flex-column flex-lg-row justify-content-between">
          <h1 class="title-secondary" style="max-width: 425px">Benefits when using
            our services</h1>
          <p class="paragraph" style="max-width: 550px">Pellentesque etiam blandit in tincidunt at
            donec. Eget ipsum dignissim
            placerat nisi,
            adipiscing mauris non purus parturient.</p>
        </div>
      </div>

      <div class="col-12 d-flex flex-column flex-lg-row mt-4" style="gap: 30px">
        @foreach ($benefits as $benefit)
          <div class="benefit-card">
            <div
              style="background-color: var(--placeholder-color); width: fit-content; height: fit-content; border-radius: 100px;"
              class="p-2 p-lg-3">
              <img src="{{ asset('icons/' . $benefit['icon']) }}" alt="{{ $benefit['title'] }}">
            </div>
            <h6 class="topic">{{ $benefit['title'] }}</h6>
            <p class="paragraph">{{ $benefit['description'] }}</p>
          </div>
        @endforeach
      </div>

    </div>
  </div>
</section>
