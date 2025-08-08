// Static version (no backend)
const form = document.getElementById('search-form');
const input = document.getElementById('partNumber');
const statusEl = document.getElementById('status');
const results = document.getElementById('results');
const yearEl = document.getElementById('year');
yearEl.textContent = new Date().getFullYear();

function renderComponents(components = []) {
  results.innerHTML = '';
  if (!components.length) {
    results.hidden = true;
    return;
  }
  for (const c of components) {
    const card = document.createElement('article');
    card.className = 'card';
    card.innerHTML = `
      <div class="thumb">${c.image ? `<img src="${c.image}" alt="" width="56" height="56"/>` : 'brak'}</div>
      <div>
        <h3>${c.name}</h3>
        <div class="meta">Kod: <strong>${c.code}</strong> · Ilość: <strong>${c.qty}</strong></div>
      </div>
      <div><span class="badge">${c.category || 'element'}</span></div>
    `;
    results.appendChild(card);
  }
  results.hidden = false;
}

async function search(partNumber) {
  statusEl.textContent = 'Szukam…';
  results.hidden = true;
  try {
    const res = await fetch('parts.json');
    const allData = await res.json();
    const data = allData[partNumber];
    if (!data) throw new Error('Brak danych');
    statusEl.textContent = `Znaleziono: ${data.components.length} element(y)`;
    renderComponents(data.components);
  } catch (err) {
    console.error(err);
    statusEl.textContent = 'Brak danych dla podanego numeru.';
  }
}

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const pn = input.value.trim();
  if (!pn) return;
  search(pn);
});

window.addEventListener('DOMContentLoaded', () => {
  const demo = '06A-115-561B';
  input.value = demo;
  search(demo);
});
