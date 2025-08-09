<?php
?><!doctype html><html lang="pl"><head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>WAINEX — Części Składowe</title><meta name="theme-color" content="#0b0f17">
<meta name="description" content="WAINEX — szybki dobór części i zamówienia dla warsztatu.">
<link rel="manifest" href="manifest.json"><link rel="icon" sizes="192x192" href="assets/icons/icon-192.png">
<link rel="apple-touch-icon" href="assets/icons/icon-192.png"><link rel="stylesheet" href="assets/css/styles.css">
</head><body><header class="topbar"><div class="logo-wrap">
<svg class="logo" viewBox="0 0 220 60" aria-label="Logo WAINEX" role="img">
<defs><linearGradient id="g" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#e8edf9"/><stop offset="1" stop-color="#b8c3d9"/></linearGradient>
<filter id="shadow" x="-20%" y="-20%" width="140%" height="140%"><feDropShadow dx="0" dy="6" stdDeviation="6" flood-color="#000" flood-opacity="0.35"/></filter></defs>
<g filter="url(#shadow)"><rect x="0" y="8" rx="12" ry="12" width="58" height="44" fill="#0f1524" stroke="#26324e" stroke-width="2"/>
<rect x="10" y="18" rx="4" ry="4" width="38" height="24" fill="url(#g)" /><circle cx="22" cy="30" r="3" fill="#0f1524"/><circle cx="36" cy="30" r="3" fill="#0f1524"/>
<rect x="52" y="26" width="10" height="8" rx="2" fill="#e8edf9"/><path d="M95 50 L112 10 L129 50 Z M103 36 L121 36" fill="none" stroke="#e8edf9" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M121 36 L140 36" stroke="#e8edf9" stroke-width="6" stroke-linecap="round"/><circle cx="146" cy="36" r="5" fill="#e8edf9"/>
<rect x="152" y="33" width="10" height="6" rx="2" fill="#e8edf9"/><text x="170" y="42" font-family="system-ui, -apple-system, Segoe UI, Roboto" font-size="22" fill="#e8edf9">WAINEX</text></g></svg>
</div><div class="hello">Cześć, szefie! Gotowa do działania w WAINEX.</div></header>
<main class="container"><section class="search">
<input id="searchInput" type="text" inputmode="text" placeholder="Szukaj po numerze części / VIN / rejestracji…">
<button class="btn btn-primary" id="btnSearch">Szukaj</button><button class="btn btn-ghost" id="btnScan">Skanuj kod</button></section>
<section aria-label="Szybkie akcje" class="grid">
<button class="tile" data-action="register-vehicle"><span class="tile-icon">🚗</span><span class="tile-title">Rejestracja pojazdu</span><span class="tile-sub">VIN / rejestracja</span></button>
<button class="tile" data-action="parts"><span class="tile-icon">🧩</span><span class="tile-title">Dobór części</span><span class="tile-sub">AP, MekoNomen</span></button>
<button class="tile" data-action="order"><span class="tile-icon">🛒</span><span class="tile-title">Zamówienia</span><span class="tile-sub">Koszyk + przypomnienia</span></button>
<button class="tile" data-action="history"><span class="tile-icon">🗂️</span><span class="tile-title">Historia napraw</span><span class="tile-sub">Szybki podgląd</span></button>
<button class="tile" data-action="smartcallback"><span class="tile-icon">📱</span><span class="tile-title">SmartCallback</span><span class="tile-sub">SMS po rozmowie</span></button>
<button class="tile" data-action="voice"><span class="tile-icon">🎙️</span><span class="tile-title">Sterowanie głosem</span><span class="tile-sub">„Wyślij zamówienie”</span></button>
<button class="tile" data-action="suppliers"><span class="tile-icon">🏭</span><span class="tile-title">Hurtownie</span><span class="tile-sub">Godziny i loginy</span></button>
<button class="tile" data-action="settings"><span class="tile-icon">⚙️</span><span class="tile-title">Ustawienia</span><span class="tile-sub">Konfiguracja WAINEX</span></button>
</section><section class="panel"><h2>Panel podglądu</h2>
<div id="panelContent" class="panel-content">Witaj w wersji demonstracyjnej. Wybierz kafelek, aby zobaczyć działanie modułu.</div></section></main>
<footer class="footer"><span>WAINEX — Części Składowe · PWA · v0.1</span><button class="btn btn-ghost" id="btnInstall" hidden>Zainstaluj jako aplikację</button></footer>
<script src="assets/js/app.js"></script><script>
if('serviceWorker' in navigator){window.addEventListener('load',()=>{navigator.serviceWorker.register('./sw.js').catch(console.error);});}
</script></body></html>