/**
 * CARL EMMANUEL RABANILLO - PORTFOLIO INTERACTIVITY ENGINE
 */

document.addEventListener('DOMContentLoaded', () => {
  initThemeToggle();
  initHomelabTelemetry();
  initSkillsFilter();
  initClipboardCopier();
  initLightbox();
  initMobileNav();
  initContactForm();
  initActiveNavSpy();
});

/* -------------------------------------------------------------------------
   1. Dark / Light Theme Toggle
   ------------------------------------------------------------------------- */
function initThemeToggle() {
  const toggleBtn = document.getElementById('themeToggleBtn');
  if (!toggleBtn) return;

  const currentTheme = localStorage.getItem('portfolio_theme') || 'dark';
  document.documentElement.setAttribute('data-theme', currentTheme);
  updateThemeIcon(currentTheme);

  toggleBtn.addEventListener('click', () => {
    const activeTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = activeTheme === 'dark' ? 'light' : 'dark';
    
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('portfolio_theme', newTheme);
    updateThemeIcon(newTheme);
  });
}

function updateThemeIcon(theme) {
  const iconSpan = document.getElementById('themeToggleIcon');
  if (!iconSpan) return;
  if (theme === 'light') {
    iconSpan.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;
    iconSpan.title = "Switch to Dark Mode";
  } else {
    iconSpan.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>`;
    iconSpan.title = "Switch to Light Mode";
  }
}

/* -------------------------------------------------------------------------
   2. Homelab Server Rack Telemetry Poller
   ------------------------------------------------------------------------- */
function initHomelabTelemetry() {
  const cpuEl = document.getElementById('rackCpu');
  const ramEl = document.getElementById('rackRam');
  const tempEl = document.getElementById('rackTemp');
  const uptimeEl = document.getElementById('rackUptime');

  if (!cpuEl && !uptimeEl) return;

  async function fetchTelemetry() {
    try {
      const res = await fetch('/api/rack-status');
      if (res.ok) {
        const data = await res.json();
        if (cpuEl) cpuEl.textContent = data.cpu_usage;
        if (ramEl) ramEl.textContent = data.ram_usage;
        if (tempEl) tempEl.textContent = data.temp;
        if (uptimeEl) uptimeEl.textContent = data.uptime;
      }
    } catch (e) {
      // Offline fallback
    }
  }

  // Poll every 8 seconds
  setInterval(fetchTelemetry, 8000);
}

/* -------------------------------------------------------------------------
   3. Skills Filter & Search
   ------------------------------------------------------------------------- */
function initSkillsFilter() {
  const tabBtns = document.querySelectorAll('.skill-tab-btn');
  const skillCards = document.querySelectorAll('.skill-card');
  const searchInput = document.getElementById('skillSearchInput');

  let activeCategory = 'all';

  function filterCards() {
    const query = (searchInput ? searchInput.value.toLowerCase().trim() : '');

    skillCards.forEach(card => {
      const cardCategory = card.getAttribute('data-category');
      const cardName = card.querySelector('.skill-name')?.textContent.toLowerCase() || '';
      const cardBadge = card.querySelector('.skill-badge')?.textContent.toLowerCase() || '';

      const matchesCat = (activeCategory === 'all' || cardCategory === activeCategory);
      const matchesQuery = query === '' || cardName.includes(query) || cardBadge.includes(query);

      if (matchesCat && matchesQuery) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeCategory = btn.getAttribute('data-filter');
      filterCards();
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', filterCards);
  }
}

/* -------------------------------------------------------------------------
   4. Clipboard Copier with Dynamic Toast
   ------------------------------------------------------------------------- */
function initClipboardCopier() {
  const copyButtons = document.querySelectorAll('[data-copy]');

  copyButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const textToCopy = btn.getAttribute('data-copy');
      const label = btn.getAttribute('data-label') || textToCopy;

      navigator.clipboard.writeText(textToCopy).then(() => {
        showToast(`Copied ${label} to clipboard!`);
      }).catch(() => {
        showToast(`Selected: ${textToCopy}`);
      });
    });
  });
}

function showToast(message) {
  let toast = document.getElementById('portfolioToast');
  if (!toast) {
    toast = document.createElement('div');
    toast.id = 'portfolioToast';
    toast.className = 'toast-msg';
    document.body.appendChild(toast);
  }

  toast.textContent = message;
  toast.classList.add('show');

  setTimeout(() => {
    toast.classList.remove('show');
  }, 3200);
}

/* -------------------------------------------------------------------------
   5. Interactive Lightbox Modal
   ------------------------------------------------------------------------- */
function initLightbox() {
  const lightboxModal = document.getElementById('lightboxModal');
  const lightboxImg = document.getElementById('lightboxImg');
  const closeBtn = document.getElementById('lightboxClose');

  if (!lightboxModal || !lightboxImg) return;

  const triggerElements = document.querySelectorAll('[data-lightbox-src]');

  triggerElements.forEach(el => {
    el.addEventListener('click', () => {
      const src = el.getAttribute('data-lightbox-src');
      lightboxImg.src = src;
      lightboxModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  function closeLightbox() {
    lightboxModal.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (closeBtn) closeBtn.addEventListener('click', closeLightbox);

  lightboxModal.addEventListener('click', (e) => {
    if (e.target === lightboxModal) closeLightbox();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && lightboxModal.classList.contains('active')) {
      closeLightbox();
    }
  });
}

/* -------------------------------------------------------------------------
   6. Mobile Navigation
   ------------------------------------------------------------------------- */
function initMobileNav() {
  const toggle = document.getElementById('mobileNavToggle');
  const links = document.getElementById('navLinks');

  if (!toggle || !links) return;

  toggle.addEventListener('click', () => {
    links.classList.toggle('mobile-open');
  });

  // Close when link clicked
  links.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
      links.classList.remove('mobile-open');
    });
  });
}

/* -------------------------------------------------------------------------
   7. Contact Form AJAX Handler
   ------------------------------------------------------------------------- */
function initContactForm() {
  const form = document.getElementById('contactForm');
  const statusBox = document.getElementById('contactStatusBox');
  const submitBtn = document.getElementById('contactSubmitBtn');

  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Send';
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = `<span>Transmitting...</span>`;
    }

    const formData = new FormData(form);

    try {
      const response = await fetch(form.action, {
        method: 'POST',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'application/json',
        },
        body: formData,
      });

      const result = await response.json();

      if (response.ok && result.success) {
        if (statusBox) {
          statusBox.innerHTML = `
            <div class="alert-box alert-success">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>${result.message}</span>
            </div>
          `;
          statusBox.style.display = 'block';
        }
        form.reset();
        showToast('Message successfully delivered to Carl!');
      } else {
        const errorMsg = result.message || 'Please check your inputs and try again.';
        if (statusBox) {
          statusBox.innerHTML = `
            <div class="alert-box" style="background:rgba(239,68,68,0.12);border:1px solid #ef4444;color:#f87171;">
              <span>${errorMsg}</span>
            </div>
          `;
          statusBox.style.display = 'block';
        }
      }
    } catch (err) {
      // Fallback normal submission if JS fetch errors
      form.submit();
    } finally {
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;
      }
    }
  });
}

/* -------------------------------------------------------------------------
   8. Active Navigation Spy on Scroll
   ------------------------------------------------------------------------- */
function initActiveNavSpy() {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-link');

  if (!sections.length || !navLinks.length) return;

  window.addEventListener('scroll', () => {
    let current = '';
    const scrollY = window.pageYOffset;

    sections.forEach(section => {
      const sectionHeight = section.offsetHeight;
      const sectionTop = section.offsetTop - 120;
      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  });
}
