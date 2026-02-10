# Hostorio - Web Hosting Services Website

Hostorio is a web hosting services provider offering Shared Hosting, Business Hosting, Reseller Hosting, VPS, and Domain Registration/Transfer services.

## Project Structure

```
hostorio/
├── index.html                    # Homepage
├── pages/
│   └── package.html              # Hosting packages & pricing page
├── assets/
│   ├── css/
│   │   ├── main.css              # Entry point - imports all modules
│   │   ├── variables.css         # CSS custom properties (colors, fonts, spacing)
│   │   ├── base.css              # Reset, body defaults, container
│   │   ├── header.css            # Top bar, navigation, mobile menu
│   │   ├── hero.css              # Hero section styles
│   │   ├── pricing.css           # Pricing cards, plans comparison, FAQ, testimonials
│   │   └── utilities.css         # Domain search, services, WordPress, support, footer
│   ├── js/
│   │   ├── translations.js       # i18n translations (EN/BN)
│   │   ├── i18n.js               # I18nManager class for language/currency
│   │   ├── main.js               # Entry point / initialization
│   │   ├── header.js             # Mobile menu, dropdown navigation
│   │   ├── utils.js              # Language selector, currency switcher, localStorage
│   │   ├── pricing.js            # Service buttons, billing toggle, plan interactions
│   │   └── animations.js         # FAQ accordion, testimonial carousel
│   └── images/
│       ├── logo/                 # Brand logos
│       ├── hero/                 # Hero section images
│       ├── pricing/              # Pricing card icons
│       ├── services/             # Service section illustrations (SVG)
│       ├── flags/                # Country flag icons
│       ├── payment/              # Payment method logos
│       ├── testimonials/         # Testimonial photos
│       ├── icons/                # Misc icons
│       └── backgrounds/          # Background images
├── .gitignore
└── README.md
```

## Getting Started

### Prerequisites

No build tools required. This is a static HTML/CSS/JavaScript project.

- A modern web browser (Chrome, Firefox, Safari, Edge)
- A local web server for development (recommended for proper CSS @import loading)

### Local Development

1. **Clone the repository:**
   ```bash
   git clone https://github.com/arifbillah360/HO.git
   cd HO
   ```

2. **Start a local server** (choose one):
   ```bash
   # Python 3
   python -m http.server 8000

   # Node.js (if npx available)
   npx serve .

   # PHP
   php -S localhost:8000
   ```

3. **Open in browser:**
   ```
   http://localhost:8000
   ```

### Direct File Access

You can also open `index.html` directly in a browser, though some CSS @import features work best when served via HTTP.

## Pages

| Page | Path | Description |
|------|------|-------------|
| Homepage | `index.html` | Main landing page with hero, pricing cards, services, WordPress section |
| Packages | `pages/package.html` | Detailed hosting plans, comparison table, FAQ, testimonials |

## CSS Architecture

The CSS uses a modular `@import` structure loaded through `main.css`:

1. **variables.css** - Design tokens (colors, typography, spacing, border-radius)
2. **base.css** - CSS reset, body defaults, container wrapper
3. **header.css** - Top info bar, main navigation, mobile menu, language/currency selectors
4. **hero.css** - Hero banner with CTA
5. **pricing.css** - Cloud pricing cards, plan comparison table, floating icons, FAQ accordion, testimonials carousel
6. **utilities.css** - Domain search, services section, WordPress hosting section, support cards, footer

### Z-Index Hierarchy

```
Language/currency dropdowns:  1200
Top info bar:                 1100
Desktop dropdown menus:       1070
Header brand/right:           1060
Main header:                  1050
Mobile nav drawer:            1045
Mobile nav overlay:           1040
Service dropdown (pricing):   1001
Pricing hero content:         10
Floating icons:               2
Percentage icons:             1
```

## JavaScript Modules

All scripts load at the end of `<body>` for performance:

- **translations.js** - Complete English (en) and Bengali (bn) translations for all text content
- **i18n.js** - I18nManager class handling language switching, currency conversion, and DOM updates
- **header.js** - Mobile hamburger menu toggle, desktop/mobile dropdown menus, outside-click closing, resize handling
- **utils.js** - Language selector with flag updates, currency switcher (desktop buttons + mobile dropdown), localStorage persistence, i18n integration
- **pricing.js** - Service button selection, mobile service dropdown, billing period toggle
- **animations.js** - FAQ accordion with expand/collapse, testimonial carousel with keyboard navigation

## Internationalization & Currency Support

### Supported Languages
- **English (en)** - Default language
- **Bengali (bn)** - বাংলা

### Supported Currencies
- **BDT (৳)** - Bangladeshi Taka (Default)
- **USD ($)** - US Dollar

### Features
- ✅ **Manual Language Switching** - Click language selector in top bar (English/বাংলা)
- ✅ **Manual Currency Switching** - Click currency buttons in top bar (BDT/USD)
- ✅ **Automatic Price Conversion** - USD to BDT conversion (1 USD = 110 BDT)
- ✅ **Localized Number Formatting** - Bengali numerals for BDT prices (e.g., ৳২৪৬)
- ✅ **Persistent Settings** - Language and currency preferences saved in localStorage
- ✅ **No Auto-Detection** - Full manual control, no timezone or location detection

### Usage

#### For Users
1. **Change Language:**
   - Click the language selector in the top bar
   - Choose between "English" or "বাংলা"
   - All text instantly translates

2. **Change Currency:**
   - Click the currency button in the top bar (USD/BDT)
   - All prices automatically convert and format
   - Currency symbols update

3. **Settings Persist:**
   - Your language and currency preferences are saved
   - Refresh the page - settings remain

#### For Developers

**Adding Translations:**
```javascript
// Edit assets/js/translations.js
const translations = {
    en: {
        nav: {
            home: "Home",
            // Add more keys
        }
    },
    bn: {
        nav: {
            home: "হোম",
            // Add more keys
        }
    }
};
```

**Using in HTML:**
```html
<!-- Text Translation -->
<h1 data-i18n="hero.title">Fastest Data Center Web Hosting</h1>

<!-- Price Conversion -->
<span data-auto-price="2.24">$2.24</span>

<!-- Currency Symbol -->
<span data-currency-symbol>$</span>

<!-- Placeholder Translation -->
<input data-i18n-placeholder="domain.searchPlaceholder" placeholder="Search for your domain">
```

**Price Conversion Logic:**
- Base prices are always in USD
- `data-auto-price="2.24"` - Stores USD price
- When BDT selected: 2.24 × 110 = ৳246
- Formatting uses `Intl.NumberFormat` with locale

**API:**
```javascript
// Change language
window.i18n.setLanguage('bn'); // or 'en'

// Change currency
window.i18n.setCurrency('USD'); // or 'BDT'

// Get translation
window.i18n.translate('nav.home'); // Returns translated text

// Format price
window.i18n.formatPrice(2.24); // Returns formatted price in current currency
```

### Default Settings
- **Language:** English (en)
- **Currency:** BDT (৳)
- **Exchange Rate:** 1 USD = 110 BDT
- **Storage:** localStorage keys `selectedLanguage` and `selectedCurrency`

## Deployment

Upload all files to any static hosting provider:
- **GitHub Pages** - Push to repository and enable Pages in Settings
- **Netlify** - Drag and drop project folder or connect Git repository
- **Vercel** - Import project from Git
- **Any Web Server** - Upload files via FTP/SFTP

No build step needed - this is a static site.

## Tech Stack

- **HTML5** - Semantic markup
- **CSS3** - Custom properties, Flexbox, Grid, animations, gradients, media queries
- **Vanilla JavaScript** - No frameworks or dependencies
- **Font Awesome 6** - Icon library (loaded via CDN)

## Browser Support

- Chrome 80+
- Firefox 75+
- Safari 13+
- Edge 80+
- Mobile browsers (iOS Safari, Chrome for Android)

## License

All rights reserved. Copyright 2026 Hostorio.
