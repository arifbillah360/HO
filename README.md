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
├── .github/
│   └── workflows/
│       └── deploy.yml            # GitHub Pages auto-deploy
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

- **header.js** - Mobile hamburger menu toggle, desktop/mobile dropdown menus, outside-click closing, resize handling
- **utils.js** - Language selector with flag updates, currency switcher (desktop buttons + mobile dropdown), localStorage persistence
- **pricing.js** - Service button selection, mobile service dropdown, billing period toggle
- **animations.js** - FAQ accordion with expand/collapse, testimonial carousel with keyboard navigation

## Deployment

### GitHub Pages (Automatic)

The repository includes a GitHub Actions workflow (`.github/workflows/deploy.yml`) that automatically deploys to GitHub Pages on push to `main`.

To enable:
1. Go to repository **Settings** > **Pages**
2. Set Source to **GitHub Actions**
3. Push to `main` branch

### Manual Deployment

Upload all files to any static hosting provider (Netlify, Vercel, any web server). No build step needed.

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
