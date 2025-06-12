document.addEventListener('DOMContentLoaded', function () {
  const searchInput = document.querySelector('input[placeholder="Cari nama mobil"]');
  const cards = document.querySelectorAll('.venue-card');
  const noResults = document.getElementById('no-results');

  if (!searchInput || cards.length === 0) return;

  searchInput.addEventListener('input', function () {
    const searchTerm = this.value.toLowerCase().trim();
    let matchCount = 0;

    cards.forEach(card => {
      const titleElement = card.querySelector('.card-title');
      if (!titleElement) return;

      const title = titleElement.textContent.toLowerCase();
      const isMatch = title.includes(searchTerm);

      card.style.display = isMatch ? '' : 'none';
      if (isMatch) matchCount++;
    });

    if (noResults) {
      noResults.style.display = matchCount === 0 ? 'block' : 'none';
    }
  });
});
