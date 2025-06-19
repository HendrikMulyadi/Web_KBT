document.addEventListener('DOMContentLoaded', function () {
  const searchNama = document.getElementById('searchNama');
  const searchHarga = document.getElementById('searchHarga');
  const searchJenis = document.getElementById('searchJenis');
  const searchButton = document.getElementById('btnCari');
  const cards = document.querySelectorAll('.venue-card');
  const noResults = document.getElementById('no-results');

  function filterCards() {
    const namaValue = searchNama.value.toLowerCase().trim();
    const hargaValue = searchHarga.value;
    const jenisValue = searchJenis.value;
    let matchCount = 0;

    cards.forEach(card => {
      const title = card.querySelector('.card-title')?.textContent.toLowerCase() || '';
      const hargaText = card.querySelectorAll('.card-text')[1]?.textContent || '';
      const jenisText = card.querySelectorAll('.card-text')[0]?.textContent || '';

      const harga = parseInt(hargaText.replace(/[^\d]/g, '')) || 0;
      const jenis = jenisText.toLowerCase();

      let isMatch = true;

      // Filter nama mobil
      if (namaValue && !title.includes(namaValue)) isMatch = false;

      // Filter harga
      if (hargaValue === 'Rp >300.000' && harga <= 300000) isMatch = true;
      if (hargaValue === 'Rp >500.000' && harga <= 500000) isMatch = true;
      if (hargaValue === 'Rp >1.000.000' && harga <= 1000000) isMatch = true;

      // Filter jenis mobil
      if (jenisValue !== 'Pilih Tipe Mobil' && !jenis.includes(jenisValue.toLowerCase())) {
        isMatch = false;
      }

      card.parentElement.style.display = isMatch ? 'block' : 'none';
      if (isMatch) matchCount++;
    });

    noResults.style.display = matchCount === 0 ? 'block' : 'none';
  }

  searchButton.addEventListener('click', filterCards);
});
