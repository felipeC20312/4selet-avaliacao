let articles = window.articlesData || [];
let currentIndex = articles.findIndex(article => article.status === 'active');

function updateArticle(index) {
  const article = articles[index];

  const container = document.getElementById('active-article');
  if (container) container.style.backgroundImage = `url(/images/${article['content-image']})`;

  document.getElementById('article-tag').textContent = article.tag;
  document.getElementById('article-title').textContent = article.title;
  document.getElementById('article-resume').textContent = article.resume;
}

function nextArticle() {
  currentIndex = (currentIndex + 1) % articles.length;
  updateArticle(currentIndex);
}

function prevArticle() {
  currentIndex = (currentIndex - 1 + articles.length) % articles.length;
  updateArticle(currentIndex);
}

document.addEventListener('DOMContentLoaded', () => {
  if (articles.length) {
    updateArticle(currentIndex);

    document.getElementById('btn-next')?.addEventListener('click', nextArticle);
    document.getElementById('btn-prev')?.addEventListener('click', prevArticle);
  }
});
