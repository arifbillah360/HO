# Hostorio

A fast, lightweight web hosting services website built with pure HTML, CSS, and JavaScript — no frameworks, no build tools.

**Live Site:** [hostorio.com](https://hostorio.com)

---

## 📄 Pages

| Page | File | Description |
|------|------|-------------|
| Homepage | `index.html` | Hero, pricing overview, domain search, services showcase |
| Web Hosting | `web-hosting.html` | Shared hosting plans (Starter, Lite, Standard, Advanced) |
| Turbo Hosting | `turbo-hosting.html` | LiteSpeed-powered high-performance hosting |
| Reseller Hosting | `reseller-hosting.html` | White-label hosting for agencies & designers |
| Student Hosting | `student-hosting.html` | Discounted plans for students |
| VPS Hosting | `vps.html` | Virtual private servers with dedicated resources |
| Business Email | `business-email.html` | Professional email hosting solutions |
| Packages | `package.html` | All plans comparison with interactive selector |
| Special Offers | `offer.html` | Limited-time promotional deals with countdown timer |
| Terms & Conditions | `terms-and-conditions.html` | Legal terms |
| Privacy Policy | `privacy-policy.html` | Privacy & data protection |

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| **Markup** | HTML5 (semantic, SEO-optimized) |
| **Styling** | CSS3 — Custom Properties, Flexbox, Grid |
| **Scripting** | Vanilla JavaScript (ES6+) |
| **Icons** | Font Awesome 6 (CDN) |
| **SEO** | JSON-LD structured data (Schema.org) |
| **Build Tools** | None — static files only |

---

## 📁 Project Structure

```
HO/
├── index.html                          # Homepage
├── web-hosting.html                    # Shared hosting page
├── turbo-hosting.html                  # Turbo hosting page
├── reseller-hosting.html               # Reseller hosting page
├── student-hosting.html                # Student hosting page
├── vps.html                            # VPS hosting page
├── business-email.html                 # Email hosting page
├── package.html                        # All packages comparison
├── offer.html                          # Special offers page
├── terms-and-conditions.html           # Legal terms
├── privacy-policy.html                 # Privacy policy
├── assets/
│   ├── css/
│   │   ├── styles.css                  # Main consolidated stylesheet (7593 lines)
│   │   └── new.css                     # Empty (legacy compatibility)
│   ├── js/
│   │   ├── i18n.js                     # I18nManager — language & currency logic
│   │   ├── header.js                   # Mobile menu, dropdown navigation
│   │   ├── utils.js                    # Language/currency selectors, localStorage
│   │   ├── pricing.js                  # Plan selection, billing toggle
│   │   ├── animations.js               # FAQ accordion, testimonial carousel
│   │   ├── countdown.js                # Offer countdown timer
│   │   ├── main.js                     # Initialization entry point
│   │   └── translations/               # Translation files (modular)
│   │       ├── header-footer/
│   │       │   ├── header.js           # Top bar, navigation
│   │       │   └── footer.js           # Footer links
│   │       ├── Home/
│   │       │   ├── hero.js             # Homepage hero
│   │       │   ├── pricing.js          # Homepage pricing cards
│   │       │   ├── services.js         # Services section
│   │       │   ├── domain.js           # Domain search
│   │       │   ├── wordpress.js        # WordPress features
│   │       │   └── support.js          # Support section
│   │       ├── Package/
│   │       │   ├── hero.js             # Package page hero + page-specific H1s
│   │       │   ├── pricing.js          # Pricing plans
│   │       │   ├── features.js         # Feature lists
│   │       │   ├── comparison.js       # Comparison table
│   │       │   ├── faq.js              # FAQ section
│   │       │   ├── testimonial.js      # Testimonials
│   │       │   ├── wordpress.js        # WordPress section
│   │       │   └── support.js          # Support section
│   │       ├── turbo-hosting/
│   │       │   └── pricing.js          # Turbo plan pricing
│   │       ├── reseller-hosting/
│   │       │   └── pricing.js          # Reseller plan pricing
│   │       ├── student-hosting/
│   │       │   └── pricing.js          # Student plan pricing
│   │       ├── vps/
│   │       │   └── pricing.js          # VPS plan pricing
│   │       ├── business-email/
│   │       │   └── pricing.js          # Email plan pricing
│   │       ├── offer/
│   │       │   └── pricing.js          # Special offer pricing
│   │       ├── terms-and-conditions/
│   │       │   └── terms.js            # T&C content
│   │       └── privacy-policy/
│   │           └── privacy.js          # Privacy content
│   └── images/
│       ├── logo/                       # Brand logos
│       ├── hero/                       # Hero images
│       ├── pricing/                    # Pricing card icons
│       ├── services/                   # Service illustrations
│       ├── flags/                      # Country flags (BD, US)
│       ├── payment/                    # Payment method logos
│       ├── testimonials/               # Customer photos
│       └── icons/                      # UI icons
├── .gitignore
└── README.md
```

---

## 🚀 Getting Started

No installation or build step needed.

### Option 1 — Open directly

```bash
Open index.html in any modern browser
```

### Option 2 — Local server (recommended)

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

## 🌐 Multi-Language Support (EN / BN)

The site supports **English** and **Bengali (বাংলা)** with instant switching — no page reload.

### How it works

1. Translation files in `assets/js/translations/` hold all string keys for both languages
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

### Translation file structure

Each page section has its own translation file for better organization:

```javascript
// assets/js/translations/Package/hero.js
window.translations = window.translations || { en: {}, bn: {} };

window.translations.en.packageHero = {
    headline: "Compare All Web Hosting Packages",
    wordpress: "Web Hosting",
    turbo: "Turbo Hosting"
};

window.translations.bn.packageHero = {
    headline: "সব হোস্টিং প্যাকেজ তুলনা করুন",
    wordpress: "ওয়েব হোস্টিং",
    turbo: "টার্বো হোস্টিং"
};
```

### Page-specific H1 translations

Each page has a unique H1 headline for SEO:

| Page | i18n Key | English | Bengali |
|------|----------|---------|---------|
| Web Hosting | `webHostingHero.headline` | Best Web Hosting Plans for Your Business | আপনার ব্যবসার জন্য সেরা ওয়েব হোস্টিং প্ল্যান |
| Turbo Hosting | `turboHostingHero.headline` | Lightning-Fast Turbo Web Hosting Plans | লাইটস্পিড টার্বো ওয়েব হোস্টিং প্ল্যান |
| Reseller Hosting | `resellerHostingHero.headline` | Start Your Web Hosting Business Today | আজই আপনার হোস্টিং ব্যবসা শুরু করুন |
| Student Hosting | `studentHostingHero.headline` | Affordable Web Hosting for Students | শিক্ষার্থীদের জন্য সাশ্রয়ী ওয়েব হোস্টিং |
| VPS Hosting | `vpsHero.headline` | Powerful VPS Hosting for Your Business | আপনার ব্যবসার জন্য শক্তিশালী ভিপিএস হোস্টিং |
| Business Email | `emailHero.headline` | Professional Business Email Solutions | পেশাদার বিজনেস ইমেইল সলিউশন |
| Special Offers | `offerHero.headline` | Exclusive Hosting Deals & Special Offers | এক্সক্লুসিভ হোস্টিং ডিল ও অফার |
| Packages | `packageHero.headline` | Compare All Web Hosting Packages | সব হোস্টিং প্যাকেজ তুলনা করুন |

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

## 💰 Multi-Currency Support (BDT / USD)

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

**Exchange rate:** 1 USD = 110 BDT

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

---

## 📦 Pricing Plans

### Shared Web Hosting

| Plan | Storage | Domains | Price (yearly) |
|------|---------|---------|----------------|
| Starter | 5GB NVMe | 1 | ৳3,000/yr |
| Lite Starter | 10GB NVMe | 5 | ৳4,200/yr |
| Standard | 20GB NVMe | 10 | ৳6,000/yr |
| Advanced | Unlimited | Unlimited | ৳12,000/yr |

### Turbo Hosting (LiteSpeed)

| Plan | RAM | CPU | Price (yearly) |
|------|-----|-----|----------------|
| Turbo Plus | 4GB | 4 cores | ৳14,388/yr |
| Turbo Power | 8GB | 8 cores | ৳21,588/yr |
| Turbo Enterprise | 16GB | 16 cores | ৳30,000/yr |

### VPS Hosting

| Plan | RAM | CPU | Storage | Price (yearly) |
|------|-----|-----|---------|----------------|
| VPS Starter | 4GB | 4 cores | 80GB SSD | ৳17,640/yr |
| VPS Business | 8GB | 8 cores | 160GB SSD | ৳35,280/yr |
| VPS Enterprise | 16GB | 16 cores | 320GB SSD | ৳70,560/yr |
| VPS Ultimate | 32GB | 16 cores | 640GB SSD | ৳141,120/yr |

### Reseller Hosting

| Plan | Disk Space | Bandwidth | Accounts | Price (yearly) |
|------|-----------|-----------|----------|----------------|
| R-Starter | 30GB | 300GB | 25 | ৳13,188/yr |
| R-Standard | 60GB | 600GB | 50 | ৳22,188/yr |
| R-Advanced | 90GB | 900GB | 75 | ৳33,000/yr |
| R-Advanced Pro | 120GB | 1200GB | 100 | ৳66,000/yr |

### Student Hosting

| Plan | Storage | Domains | Price (yearly) |
|------|---------|---------|----------------|
| SH Plan 1 | 3GB | 1 | ৳800/yr |
| SH Plan 2 | 5GB | 3 | ৳999/yr |
| SH Plan 3 | 10GB | 5 | ৳1,199/yr |

### Business Email

| Plan | Mailboxes | Storage/box | Price (yearly) |
|------|-----------|-------------|----------------|
| Starter | 5 | 5GB | ৳1,680/yr |
| Pro | 10 | 10GB | ৳3,360/yr |
| Ultimate | 25 | 25GB | ৳10,080/yr |

---

## 🔍 SEO & Structured Data

All pages are optimized for Google Search with comprehensive JSON-LD structured data:

### Schema Types Implemented

| Schema Type | Purpose | Pages |
|-------------|---------|-------|
| **Organization** | Brand identity | All pages |
| **LocalBusiness** | Local SEO (Bangladesh) | Homepage, web-hosting |
| **Product** | Google Merchant product listings | index, web-hosting, offer |
| **Service** | Service descriptions with pricing | All service pages |
| **AggregateOffer** | Price range displays | Service pages |
| **BreadcrumbList** | Navigation breadcrumbs | All pages |
| **FAQPage** | FAQ rich results | Service pages |

### Google Merchant Compliance

All Product schemas are fully compliant with Google Merchant requirements:

- ✅ Valid image URLs (JPG/PNG, not SVG)
- ✅ Complete `offers` with proper `@type: "Offer"`
- ✅ `shippingDetails` with `OfferShippingDetails` type
- ✅ `hasMerchantReturnPolicy` with 30-day return window
- ✅ Numeric rating values (not strings)
- ✅ Proper schema.org URL enum values

### SEO Best Practices

- ✅ Unique page titles (≤60 characters)
- ✅ Unique meta descriptions (≤165 characters)
- ✅ Unique H1 tags per page
- ✅ Canonical URLs on all pages
- ✅ Robots meta tags (`index, follow`)
- ✅ Open Graph tags for social sharing
- ✅ Twitter Card tags
- ✅ Image alt attributes
- ✅ Valid JSON-LD structured data

---

## ⏱️ Countdown Timer (offer.html)

The special offers page includes a countdown timer that creates urgency:

**Features:**
- Live countdown to offer expiration
- Displays days, hours, minutes, seconds
- Automatically updates every second
- Customizable end date in `countdown.js`

**Files:**
- Script: `assets/js/countdown.js`
- Markup: Countdown section in `offer.html`

---

## 📜 Script Loading Order

Scripts load at the end of `<body>`. Order matters — i18n scripts must load before other scripts:

```html
<!-- Core translations -->
<script src="assets/js/translations/header-footer/header.js"></script>
<script src="assets/js/translations/Package/hero.js"></script>
<script src="assets/js/translations/[page-specific]/pricing.js"></script>
<!-- ... other translation files ... -->

<!-- Core functionality -->
<script src="assets/js/i18n.js"></script>           <!-- I18n manager (must load before utils) -->
<script src="assets/js/header.js"></script>         <!-- Navigation -->
<script src="assets/js/utils.js"></script>          <!-- Language/currency selectors -->
<script src="assets/js/pricing.js"></script>        <!-- Plan interactions -->
<script src="assets/js/animations.js"></script>     <!-- Animations -->
<script src="assets/js/countdown.js"></script>      <!-- Countdown (offer.html only) -->
<script src="assets/js/main.js"></script>           <!-- Initialization -->
```

---

## 🎨 CSS Architecture

All CSS is consolidated into a single file for optimal performance:

**`assets/css/styles.css` (7,593 lines)**
- Design tokens (CSS custom properties)
- CSS reset & base styles
- Header & navigation (desktop + mobile)
- Hero sections
- Pricing cards & tables
- Service sections
- FAQ accordions
- Testimonials
- Footer
- Utility classes
- Responsive breakpoints

**`assets/css/new.css`**
- Empty file (kept for backwards compatibility)
- All styles have been moved to `styles.css`

### Responsive Breakpoints

```css
@media (max-width: 1024px) { /* Tablets */ }
@media (max-width: 968px)  { /* Small tablets */ }
@media (max-width: 768px)  { /* Mobile landscape */ }
@media (max-width: 480px)  { /* Mobile portrait */ }
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

## 🌍 Browser Support

- Chrome 80+
- Firefox 75+
- Safari 13+
- Edge 80+
- iOS Safari 13+
- Chrome for Android

---

## 🚢 Deployment

Upload all files as-is to any static host:

- **GitHub Pages** — enable in repository Settings → Pages
- **Netlify** — drag and drop the folder, or connect via Git
- **Vercel** — import from Git
- **cPanel / FTP** — upload via FileZilla / CyberDuck
- **Any web server** — Apache, Nginx, Caddy

**No build step. No dependencies to install.**

---

## 🔧 Development Workflow

### Adding a new page

1. Create HTML file (copy existing page as template)
2. Add SEO meta tags (title, description, canonical, OG, Twitter)
3. Add JSON-LD structured data (Organization, Product/Service, BreadcrumbList, FAQPage)
4. Create translation files in `assets/js/translations/[page-name]/`
5. Add `<script>` tags for translations in the page
6. Test language/currency switching
7. Validate structured data with [Google Rich Results Test](https://search.google.com/test/rich-results)

### Adding a new translation key

1. Open relevant translation file in `assets/js/translations/`
2. Add key to both `window.translations.en.[namespace]` and `window.translations.bn.[namespace]`
3. Use in HTML: `<element data-i18n="namespace.key">Fallback Text</element>`

### Testing

- **Multi-language:** Toggle language selector, verify all text changes
- **Multi-currency:** Toggle currency selector, verify all prices update
- **Mobile:** Test on device or use Chrome DevTools responsive mode
- **SEO:** Validate with [Google Rich Results Test](https://search.google.com/test/rich-results)
- **Accessibility:** Run Lighthouse audit in Chrome DevTools

---

## 📊 Performance

- **No framework overhead** — pure vanilla JS
- **No build process** — instant updates
- **Single CSS file** — one HTTP request for all styles
- **Modular JS** — load only what each page needs
- **localStorage caching** — language/currency preferences persist

---

## 📝 License

All rights reserved. © 2026 Hostorio.

---

## 🙋‍♂️ Support

For issues or questions, contact: **mail@hostorio.com**

**Live Site:** [hostorio.com](https://hostorio.com)
