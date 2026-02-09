# Hostorio Theme - Setup Checklist

Step-by-step installation checklist. Complete each item in order.

---

## Pre-Installation

- [ ] WordPress 6.0+ installed and running
- [ ] PHP 7.4+ on server
- [ ] SSL certificate active (HTTPS)
- [ ] Purchase ACF PRO license from advancedcustomfields.com

## Plugin Installation

- [ ] Install and activate **Advanced Custom Fields PRO**
- [ ] Install and activate **Polylang** (free or PRO)
- [ ] Verify both plugins show on Plugins page as "Active"

## Theme Installation

- [ ] Upload `hosting-theme/` to `wp-content/themes/`
- [ ] Go to **Appearance > Themes**
- [ ] Activate **Hostorio Hosting Theme**
- [ ] Verify no PHP errors on activation

## Permalinks

- [ ] Go to **Settings > Permalinks**
- [ ] Select **Post name** (`/%postname%/`)
- [ ] Click **Save Changes**
- [ ] Verify homepage loads without 404

## Polylang Language Setup

- [ ] Go to **Languages > Languages**
- [ ] Add **English** (en_US) as default language
- [ ] Add **Bangla** (bn_BD) as second language
- [ ] Go to **Languages > Settings**
- [ ] URL: Select "directory name in pretty permalinks"
- [ ] Check "Hide URL language info for default language"
- [ ] Post types: Check **Hosting Plans** and **Pages**
- [ ] Click **Save Changes**

## Theme Settings

- [ ] Go to **Theme Settings** in admin sidebar
- [ ] **Currency tab**: Set exchange rate (default: 0.0091)
- [ ] **Currency tab**: Set default currency (BDT or USD)
- [ ] **Company tab**: Enter company name and description
- [ ] **Contact tab**: Enter email, phone, address
- [ ] **Social tab**: Enter Facebook, Twitter, YouTube, LinkedIn URLs
- [ ] Click **Update**

## Create Hosting Plans

### Plan 1: Starter

- [ ] Go to **Hosting Plans > Add New**
- [ ] Title: "Starter Cloud"
- [ ] Fill Basic Info: plan_name, description, is_popular = No
- [ ] Fill Pricing: BDT price, USD price, original prices, badge
- [ ] Fill Resources: storage, bandwidth, RAM, etc.
- [ ] Fill Features: add repeater rows
- [ ] Fill Order Link: URL and button text
- [ ] Set **Page Attributes > Order**: 10
- [ ] **Publish**
- [ ] Click **+** on Bangla flag to create translation
- [ ] Translate text fields in Bangla version
- [ ] **Publish** Bangla version

### Plan 2: Professional (repeat above with Order: 20)

- [ ] Create English version with is_popular = Yes
- [ ] Create Bangla translation

### Plan 3: Enterprise (repeat above with Order: 30)

- [ ] Create English version
- [ ] Create Bangla translation

## Create Pages

### Homepage

- [ ] Create page titled "Home"
- [ ] Go to **Settings > Reading**
- [ ] Select "A static page"
- [ ] Set "Homepage" to "Home"
- [ ] Verify homepage displays correctly

### Pricing Page

- [ ] Create page titled "Pricing" or "Packages"
- [ ] In **Page Attributes > Template**, select "Pricing Page"
- [ ] **Publish**
- [ ] Create Bangla translation of the page

## Navigation Menu

- [ ] Go to **Appearance > Menus**
- [ ] Create menu named "Primary Menu"
- [ ] Add pages and custom links matching the header design
- [ ] Assign to **Primary Navigation** location
- [ ] If using Polylang: create Bangla version of menu

## Translate Theme Strings

- [ ] Go to **Languages > Strings translations**
- [ ] Filter by "Hosting Theme - Navigation"
- [ ] Enter Bangla translations for all nav items
- [ ] Filter by "Hosting Theme - Hero"
- [ ] Enter Bangla translations for hero section
- [ ] Repeat for all groups (Pricing, Services, Footer, etc.)
- [ ] Click **Save Changes**

## Final Verification

### Desktop Testing

- [ ] Homepage loads correctly with all sections
- [ ] Pricing cards display with correct prices
- [ ] Currency switcher toggles BDT/USD without reload
- [ ] Currency preference persists after page refresh
- [ ] Language switcher shows in top bar
- [ ] Clicking Bangla switches to /bn/ URL
- [ ] All Bangla text displays correctly
- [ ] Navigation dropdown menus work
- [ ] Footer displays all columns correctly
- [ ] Package page loads with all sections

### Mobile Testing (< 768px)

- [ ] Hamburger menu appears
- [ ] Mobile navigation drawer opens/closes
- [ ] Mobile currency dropdown works
- [ ] Pricing cards stack vertically
- [ ] All sections are readable on mobile
- [ ] Language switcher accessible on mobile

### Functional Testing

- [ ] Domain search input is visible
- [ ] FAQ accordion expands/collapses (package page)
- [ ] Testimonial carousel navigates (package page)
- [ ] 404 page displays for invalid URLs
- [ ] All links point to correct destinations

### Cross-Browser

- [ ] Chrome (latest)
- [ ] Firefox (latest)
- [ ] Safari (latest)
- [ ] Edge (latest)
- [ ] Mobile Safari (iOS)
- [ ] Chrome Mobile (Android)

---

**Setup complete!** Your Hostorio hosting theme is ready for production.
