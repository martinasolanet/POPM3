const $ = s => document.querySelector(s);

const toggle = $('.menu-toggle');
const nav = $('.nav');

toggle?.addEventListener('click', () => {
    const abierto = nav.classList.toggle('open');
    toggle.setAttribute('aria-expanded', String(abierto));
});

const modal = $('#art-modal');

function showArt(o, src) {
    if (!modal) return;

    const img = document.createElement('img');
    img.src = src;
    img.alt = `${o.title} de ${o.artist}`;
    img.onerror = () => {
        const aviso = document.createElement('p');
        aviso.textContent = `Falta la imagen: ${src}`;
        img.replaceWith(aviso);
    };

    $('#modal-art').replaceChildren(img);
    $('#modal-kicker').textContent = `${o.artist} · ${o.year}`;
    $('#modal-title').textContent = o.title;
    $('#modal-description').textContent = o.description;
    $('#modal-detail').textContent = o.detail || '';
    modal.showModal();
}

$('.modal-close')?.addEventListener('click', () => modal.close());

modal?.addEventListener('click', e => {
    if (e.target === modal) modal.close();
});

const wg = $('#works-grid');

if (wg && typeof obras !== 'undefined') {
    obras.forEach((o, i) => {
        const n = String(i + 1).padStart(2, '0');
        const src = `imagenes/obras-principales/obra-${n}.jpg`;

        const b = document.createElement('button');
        b.className = 'art-tile';
        b.type = 'button';
        b.id = `obra-${n}`;
        b.innerHTML = `<img src="${src}" alt="${o.title} de ${o.artist}" loading="lazy"><span class="tile-caption">${o.title}<small>${o.artist} · ${o.year}</small></span>`;
        b.addEventListener('click', () => showArt(o, src));
        wg.append(b);

        if (location.hash === `#obra-${n}`) {
            b.scrollIntoView({ block: 'center' });
            showArt(o, src);
        }
    });
}

const gg = $('#gallery-grid');
const gm = $('#gallery-modal');

if (gg && typeof galeriaObras !== 'undefined') {
    galeriaObras.forEach((o, i) => {
        const n = String(i + 1).padStart(2, '0');
        const src = `imagenes/galeria/galeria-${n}.jpg`;

        const b = document.createElement('button');
        b.type = 'button';
        b.className = 'gallery-piece';
        b.id = `galeria-${n}`;
        b.dataset.title = `${o.title} · ${o.year}`;
        b.setAttribute('aria-label', `Ampliar ${o.title}`);

        const img = document.createElement('img');
        img.src = src;
        img.alt = `${o.title}, ${o.artist}, ${o.year}`;
        img.loading = 'lazy';
        b.append(img);

        b.addEventListener('click', () => {
            const ampliada = gm.querySelector('img');
            ampliada.src = src;
            ampliada.alt = img.alt;
            gm.showModal();
        });

        gg.append(b);

        if (location.hash === `#galeria-${n}`) {
            b.scrollIntoView({ block: 'center' });
            b.click();
        }
    });
}

$('.gallery-modal-close')?.addEventListener('click', () => gm.close());

gm?.addEventListener('click', e => {
    if (e.target === gm) gm.close();
});
