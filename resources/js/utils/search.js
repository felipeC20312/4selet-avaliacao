document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.getElementById('search-input');
  const searchButton = document.querySelector('.button-type-01');
  const resultsContainer = document.getElementById('search-results');

  function renderResults(filteredProducts) {
    resultsContainer.innerHTML = '';

    if (filteredProducts.length === 0) {
      resultsContainer.innerHTML = '<p class="text-center">No products found.</p>';
      return;
    }

    filteredProducts.forEach(product => {
      const productHTML = `
        <div class="col">
          <div class="card h-100 shadow-sm border-0">
            <div class="overflow-hidden" style="height: 260px;">
              <img src="/images/${product.image}" alt="${product.name}"
                  class="card-img-top" style="height: 100%; width: 100%; object-fit: cover;">
            </div>
            <div class="card-body">
              <h6 class="paragraph text-muted">${product.tag}</h6>
              <h5 class="card-title topic">${product.name}</h5>
              <p class="card-text paragraph">${product.description}</p>
              <p class="topic">$${product.value.toFixed(2)}</p>
            </div>
          </div>
        </div>
      `;
      resultsContainer.innerHTML += productHTML;
    });
  }

  searchButton.addEventListener('click', () => {
    const query = searchInput.value.trim().toLowerCase();

    const filtered = Object.values(window.products).filter(product => {
      return product.name.toLowerCase().includes(query) ||
        product.tag.toLowerCase().includes(query);
    });

    renderResults(filtered);
  });
});
