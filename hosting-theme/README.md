# Hostorio Hosting Theme

A custom WordPress theme for **Hostorio** web hosting services. Features cloud hosting pricing plans, domain search, services showcase, bilingual support (English/Bangla), and real-time currency switching (BDT/USD).

---

## Theme Overview

| Feature | Details |
|---|---|
| Theme Name | Hostorio Hosting Theme |
| Version | 1.0.0 |
| WordPress | 6.0+ |
| PHP | 7.4+ |
| Languages | English (en_US), Bangla (bn_BD) |
| Currencies | BDT (৳), USD ($) |

### Key Features

- **Dynamic Hosting Plans** via custom post type (`hosting_plan`) with ACF fields
- **Real-time Currency Switching** (BDT/USD) without page reload, saved to localStorage
- **Bilingual Support** via Polylang with 70+ pre-registered translatable strings
- **Responsive Design** with breakpoints at 1200px, 1024px, 768px, 640px, 480px
- **Page Templates** for pricing pages and the homepage
- **ACF Options Page** for global settings (exchange rate, contact info, social links)

---

## Requirements

| Requirement | Version | Required? |
|---|---|---|
| WordPress | 6.0+ | Yes |
| PHP | 7.4+ | Yes |
| Advanced Custom Fields PRO | 6.0+ | Yes (repeater + options page) |
| Polylang | 3.0+ | Recommended (for bilingual) |
| Polylang PRO | 3.0+ | Optional (for ACF options translation) |

---

## Installation Steps

### 1. Upload Theme

```
wp-content/themes/hosting-theme/
```

Upload the `hosting-theme/` folder to your WordPress themes directory, or zip it and install via **Appearance > Themes > Add New > Upload**.

### 2. Install Required Plugins

Install and activate **before** activating the theme:

1. **Advanced Custom Fields PRO** - Purchase from [advancedcustomfields.com](https://www.advancedcustomfields.com/pro/)
2. **Polylang** - Install from WordPress.org (free) or purchase Polylang PRO

### 3. Activate Theme

Go to **Appearance > Themes** and activate **Hostorio Hosting Theme**.

The theme automatically:
- Registers the `hosting_plan` custom post type
- Creates ACF field groups programmatically
- Registers navigation menus
- Flushes permalink rules

### 4. Set Permalinks

Go to **Settings > Permalinks** and select **Post name** (`/%postname%/`). Click **Save Changes**.

---

## Plugin Setup

### ACF Pro Configuration

ACF fields are registered programmatically - **no JSON import needed**. After theme activation:

1. Go to **Hosting Plans > Add New** to see the "Hosting Plan Details" field group
2. Go to **Theme Settings** (admin sidebar) to see global settings
3. Fields appear automatically with tabs: Basic Info, Pricing, Resources, Features, Order Link

### Polylang Configuration

See the detailed guide in `polylang-setup-guide.txt`. Quick setup:

1. **Languages > Languages** - Add English (en_US) and Bangla (bn_BD)
2. **Languages > Settings > URL modifications** - Select "directory name" (`/bn/`)
3. **Languages > Settings > Custom post types** - Check "Hosting Plans"
4. **Languages > Strings translations** - Translate theme strings by group

---

## Initial Configuration

### Theme Settings (ACF Options Page)

Navigate to **Theme Settings** in the WordPress admin sidebar:

| Tab | Field | Default |
|---|---|---|
| Currency & Pricing | Exchange Rate (BDT > USD) | 0.0091 |
| Currency & Pricing | Default Currency | BDT |
| Company Info | Company Name | Hostorio |
| Company Info | Company Description | (pre-filled) |
| Contact Info | Email | mail@hostorio.com |
| Contact Info | Phone | +8801779440297 |
| Contact Info | Address Line 1 | Kanchan, Rupganj, Narayanganj |
| Contact Info | Address Line 2 | H-161, OABDA SOROK MATHBARIA |
| Social Media | Facebook, Twitter, YouTube, LinkedIn | (enter URLs) |

### Homepage Setup

**Option A: Use front-page.php (default)**
The theme includes `front-page.php` which WordPress uses automatically.

**Option B: Static page**
1. Create a page titled "Home"
2. Go to **Settings > Reading**
3. Set "A static page" and select "Home" as the front page

---

## Adding Hosting Plans

### Step 1: Create a Plan

Go to **Hosting Plans > Add New** and fill in:

**Basic Info tab:**
- Plan Name: `Starter Cloud`
- Plan Description: `Ideal for beginner/personal websites`
- Most Popular: No

**Pricing tab:**
- Price BDT: `250`
- Price USD: `2.24` (or leave empty for auto-calculation)
- Original Price BDT: `980` (strikethrough price)
- Discount Badge: `Save 75%`

**Resources tab:**
- Storage: `25GB NVMe RAID 1 (US)`
- Bandwidth: `Unlimited`
- RAM: `1 GB`
- Websites Allowed: `1`
- Monthly Visits: `~10,000`

**Features tab (repeater):**
Add rows with feature text and availability:
- `FREE cPanel` - Available
- `FREE & Auto SSL Certificate` - Available
- `FREE Website Migrations` - Available

**Order Link tab:**
- Order Button URL: `https://hostorio.com/cart/?pid=starter`
- Order Button Label: `Order Now`

### Step 2: Set Display Order

In the right sidebar under **Page Attributes**, set **Order**:
- Starter: 10
- Professional: 20
- Enterprise: 30

Plans display on the frontend in this order.

### Step 3: Publish

Click **Publish**. The plan appears on the homepage and any page using the Pricing Page template.

---

## Translation Workflow

### Translating a Hosting Plan

1. Edit the English plan
2. In the **Languages** metabox, click **+** next to the Bangla flag
3. Polylang creates a linked translation
4. Prices are auto-copied (synced)
5. Translate: plan_name, description, features, button text
6. Publish the translation

### Translating Theme Strings

1. Go to **Languages > Strings translations**
2. Filter by group (e.g., "Hosting Theme - Navigation")
3. Enter Bangla translations in the right column
4. Save Changes

### Translating Pages

1. Edit the English page
2. Click **+** in the Languages metabox
3. Translate content and publish

---

## Updating Exchange Rate

The exchange rate controls automatic BDT to USD conversion:

1. Go to **Theme Settings > Currency & Pricing**
2. Update **BDT > USD Exchange Rate** (e.g., `0.0091`)
3. Save

This affects:
- Auto-calculated USD prices (when USD field is empty in plan)
- The `hostingCurrency.rate` JavaScript variable
- The `hosting_theme_get_usd_price()` PHP helper

---

## Customization Guide

### Theme File Structure

```
hosting-theme/
├── style.css                              # Theme metadata
├── functions.php                          # Setup, enqueue, helpers
├── front-page.php                         # Homepage (dynamic)
├── index.php                              # Fallback (static)
├── header.php                             # Top bar + navigation
├── footer.php                             # Footer columns + bottom
├── page.php                               # Default page template
├── page-package.php                       # Hosting package template
├── 404.php                                # Error page
├── page-templates/
│   └── template-pricing.php               # Pricing page (WP_Query)
├── template-parts/
│   └── pricing-card.php                   # Reusable plan card
├── assets/
│   ├── css/
│   │   └── theme.css                      # All styles (5,282 lines)
│   ├── js/
│   │   ├── header.js                      # Mobile menu, dropdowns
│   │   ├── utils.js                       # Language/currency UI
│   │   ├── pricing.js                     # Pricing module
│   │   ├── animations.js                  # FAQ accordion, carousel
│   │   ├── main.js                        # Entry point
│   │   └── currency-switcher.js           # BDT/USD toggle
│   └── images/                            # Logo, hero, services, etc.
├── inc/
│   ├── custom-post-types.php              # hosting_plan CPT
│   ├── acf-fields.php                     # ACF field groups + Polylang sync
│   └── polylang-strings.php               # pll_register_string() calls
├── sample-data.txt                        # Sample plan data
├── polylang-setup-guide.txt               # Polylang configuration guide
└── README.md                              # This file
```

### Enqueued Assets

| Handle | File | Dependencies |
|---|---|---|
| `font-awesome` | CDN 6.5.2 | - |
| `hosting-theme-main` | `assets/css/theme.css` | font-awesome |
| `hosting-theme-style` | `style.css` | hosting-theme-main |
| `hosting-theme-header` | `assets/js/header.js` | - |
| `hosting-theme-utils` | `assets/js/utils.js` | - |
| `hosting-theme-pricing` | `assets/js/pricing.js` | - |
| `hosting-theme-animations` | `assets/js/animations.js` | - |
| `hosting-theme-main` | `assets/js/main.js` | header, utils, pricing, animations |
| `hosting-theme-currency` | `assets/js/currency-switcher.js` | - |

### CSS Variables (key colors)

```css
--primary-blue: #0170B9;
--orange-primary: #FF7800;
--color-dark: #1a1a2e;
--color-text: #555;
--color-light-bg: #f8f9fa;
```

### Adding a New Page Template

1. Create a file in `page-templates/`
2. Add the template header: `/* Template Name: My Template */`
3. Use `get_header()`, `get_footer()`, `get_template_part()`

### Using the Pricing Card Component

```php
$plans = new WP_Query( array(
    'post_type'      => 'hosting_plan',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
) );

if ( $plans->have_posts() ) :
    while ( $plans->have_posts() ) :
        $plans->the_post();
        get_template_part( 'template-parts/pricing-card' );
    endwhile;
    wp_reset_postdata();
endif;
```

### Currency Switcher Data Attributes

The pricing card outputs these attributes for JS:

```html
<div class="pricing-card"
     data-price-bdt="250"
     data-price-usd="2.24"
     data-original-bdt="980"
     data-original-usd="8.95">
```

---

## Troubleshooting

### Plans not showing on homepage

- Ensure plans are **Published** (not Draft)
- Check that the **Menu Order** (Page Attributes) is set
- If using Polylang, ensure plans exist in the current language
- Verify `hosting_plan` post type exists: check **Hosting Plans** in admin menu

### Currency switcher not working

- Check browser console for JavaScript errors
- Verify `hostingCurrency` object exists: type `hostingCurrency` in console
- Ensure `.pricing-card` class is on each plan card
- Check that `data-price-bdt` and `data-price-usd` attributes exist

### ACF fields not appearing

- Ensure **ACF PRO** is installed and activated (not the free version)
- Deactivate and reactivate the theme to trigger field registration
- Check **Custom Fields > Field Groups** - fields should show as "Synced"

### Polylang language switcher not showing

- Ensure Polylang is installed, activated, and at least 2 languages are added
- The switcher only appears when `pll_the_languages()` is available
- Check **Languages > Languages** to confirm both languages are active

### Permalinks returning 404

- Go to **Settings > Permalinks** and click **Save Changes** (flushes rewrite rules)
- Or deactivate/reactivate the theme

### Responsive layout issues

- Theme uses these breakpoints: 1200px, 1024px, 968px, 768px, 640px, 480px, 360px
- All styles are in `assets/css/theme.css`
- Test with browser DevTools responsive mode
