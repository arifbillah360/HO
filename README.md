# Hostorio

A fast, lightweight web hosting services website built with pure HTML, CSS, and JavaScript — no frameworks, no build tools.

---

## Live Pages

| Page | File | Description |
|------|------|-------------|
| Homepage | `index.html` | Hero, pricing cards, domain search, services, footer |
| Packages | `pages/package.html` | Full hosting plans, comparison table, FAQ, testimonials |

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Markup | HTML5 (semantic) |
| Styling | CSS3 — Custom Properties, Flexbox, Grid |
| Scripting | Vanilla JavaScript (ES6+) |
| Icons | Font Awesome 6 (CDN) |
| Build Tools | None — static files only |

---

## Project Structure

```
HO/
├── index.html
├── pages/
│   └── package.html
├── assets/
│   ├── css/
│   │   ├── styles.css            # Main stylesheet
│   │   ├── variables.css         # Design tokens (colors, fonts, spacing)
│   │   ├── base.css              # CSS reset & body defaults
│   │   ├── header.css            # Top bar, nav, mobile menu
│   │   ├── hero.css              # Hero section
│   │   ├── pricing.css           # Pricing cards, comparison, FAQ, testimonials
│   │   └── utilities.css         # Domain search, services, support, footer
│   ├── js/
│   │   ├── translations.js       # EN / BN translation strings
│   │   ├── i18n.js               # I18nManager — language & currency logic
│   │   ├── header.js             # Mobile menu, dropdown navigation
│   │   ├── utils.js              # Language selector, currency switcher, localStorage
│   │   ├── pricing.js            # Plan selection, billing toggle
│   │   ├── animations.js         # FAQ accordion, testimonial carousel
│   │   └── main.js               # Initialization entry point
│   └── images/
│       ├── logo/
│       ├── hero/
│       ├── pricing/
│       ├── services/
│       ├── flags/
│       ├── payment/
│       ├── testimonials/
│       ├── icons/
│       └── backgrounds/
├── .gitignore
└── README.md
```

---

## Getting Started

No installation or build step needed.

**Option 1 — Open directly:**
```
Open index.html in any modern browser
```

**Option 2 — Local server (recommended):**
```bash
# Python
python -m http.server 8000

# Node.js
npx serve .

# PHP
php -S localhost:8000
```
Then visit `http://localhost:8000`

---

## Multi-Language Support (EN / BN)

The site supports **English** and **Bengali (বাংলা)** with instant switching — no page reload.

### How it works

1. `translations.js` holds all string keys for both languages
2. HTML elements use `data-i18n="key.path"` attributes
3. `i18n.js` reads the attribute and swaps text on language change
4. Preference is saved in `localStorage`

### HTML attributes

```html
<!-- Text content -->
<h1 data-i18n="hero.title">Fastest Data Center Web Hosting</h1>

<!-- Input placeholder -->
<input data-i18n-placeholder="domain.searchPlaceholder" placeholder="Search domain...">
```

### Adding a new translation key

Open `assets/js/translations.js` and add the key to both `en` and `bn` objects:

```javascript
const translations = {
    en: {
        section: {
            myKey: "My Text"
        }
    },
    bn: {
        section: {
            myKey: "আমার টেক্সট"
        }
    }
};
```

Then use it in HTML:
```html
<p data-i18n="section.myKey">My Text</p>
```

### JavaScript API

```javascript
window.i18n.setLanguage('bn');          // Switch to Bengali
window.i18n.setLanguage('en');          // Switch to English
window.i18n.translate('nav.home');      // Get translated string
```

### Defaults

| Setting | Value |
|---------|-------|
| Default language | English (`en`) |
| localStorage key | `selectedLanguage` |

---

## Multi-Currency Support (BDT / USD)

Prices on the site display in either **BDT (৳)** or **USD ($)** — switchable from the top bar.

### How it works

1. All base prices are stored in USD via `data-auto-price`
2. `i18n.js` converts and formats prices when currency changes
3. BDT uses Bengali numeral formatting (`Intl.NumberFormat('bn-BD')`)
4. Preference is saved in `localStorage`

### HTML attributes

```html
<!-- Price amount (base value always in USD) -->
<span class="cloud-amount" data-auto-price="2.24">2.24</span>

<!-- Currency symbol (auto-updates to $ or ৳) -->
<span class="cloud-currency" data-currency-symbol>$</span>
```

### Conversion

| Currency | Format example | Logic |
|----------|---------------|-------|
| USD | `$2.24` | Base price as-is |
| BDT | `৳২৪৬` | price × 110, Bengali numerals |

Exchange rate: **1 USD = 110 BDT**

### JavaScript API

```javascript
window.i18n.setCurrency('BDT');         // Switch to Taka
window.i18n.setCurrency('USD');         // Switch to Dollar
window.i18n.formatPrice(2.24);          // Returns formatted string in current currency
window.i18n.convertPrice(2.24);         // Returns numeric value in current currency
```

### Defaults

| Setting | Value |
|---------|-------|
| Default currency | BDT (`৳`) |
| localStorage key | `selectedCurrency` |
| No auto-detection | Manual switching only |

---

## Pricing Plans

| Plan | Original Price | Current Price | Discount |
|------|---------------|---------------|----------|
| Starter Cloud | $8.95/mo | $2.24/mo | 75% off |
| Plus Cloud | $12.95/mo | $3.89/mo | 70% off |
| Turbo Cloud | $19.95/mo | $5.99/mo | 70% off |
| Business Cloud | $29.95/mo | $8.99/mo | 70% off |

---

## Script Loading Order

Scripts load at the end of `<body>`. Order matters — i18n scripts must load before `utils.js`:

```html
<script src="assets/js/translations.js"></script>  <!-- 1. Strings -->
<script src="assets/js/i18n.js"></script>           <!-- 2. Logic -->
<script src="assets/js/header.js"></script>         <!-- 3. Navigation -->
<script src="assets/js/utils.js"></script>          <!-- 4. Selectors (calls i18n) -->
<script src="assets/js/pricing.js"></script>        <!-- 5. Plan interactions -->
<script src="assets/js/animations.js"></script>     <!-- 6. Animations -->
<script src="assets/js/main.js"></script>           <!-- 7. Init -->
```

---

## CSS Architecture

Modular CSS loaded via `@import` in `styles.css`:

```
variables.css   →  Design tokens (colors, fonts, spacing)
base.css        →  Reset, body, container
header.css      →  Top bar, nav, mobile drawer, language/currency UI
hero.css        →  Hero banner, CTA
pricing.css     →  Cloud cards, comparison table, FAQ, testimonials
utilities.css   →  Domain search, services, WordPress, support, footer
```

### Z-Index Scale

```
1200  Language / currency dropdowns
1100  Top info bar
1070  Desktop nav dropdowns
1060  Header brand & right side
1050  Main header
1045  Mobile nav drawer
1040  Mobile nav overlay
1001  Service dropdown (pricing page)
  10  Pricing hero content
   2  Floating icons
   1  Percentage icons
```

---

## Browser Support

Chrome 80+, Firefox 75+, Safari 13+, Edge 80+, iOS Safari, Chrome for Android

---

## Deployment

Upload all files as-is to any static host:

- **GitHub Pages** — enable in repository Settings → Pages
- **Netlify** — drag and drop the folder
- **Vercel** — import from Git
- **Any web server** — copy files via FTP / SFTP

No build step. No dependencies to install.

---

## License

All rights reserved. © 2026 Hostorio.
