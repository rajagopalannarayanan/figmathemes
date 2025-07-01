# Figma Custom WordPress Theme

This is a fully custom-built WordPress theme created from a Figma design. It includes a responsive homepage with modern styling, accessibility features, and performance optimizations using best practices.

---

## Installation Steps

1. Download the provided `figma-custom-theme.zip` file.
2. Extract the contents.
3. Copy the extracted folder into your WordPress installation directory under:
   wp-content/themes/
4. Log in to your WordPress admin dashboard.
5. Go to Appearance > Themes.
6. Activate the theme named "Figma Custom Theme".

---

## Performance Optimizations Implemented

- Lazy Loading: Implemented using the Largon library to defer image loading until needed.
- Image Compression: All `.jpg` and `.svg` assets have been optimized to reduce file size.
- CDN Usage: Font Awesome is loaded via a high-speed CDN.
- Deferred JS: JavaScript is loaded in the footer for better page rendering.
- Versioning with filemtime(): CSS and JS are versioned based on last modified time to avoid caching issues.

---

## Custom Post Types

Not Used  
Custom post types such as "Testimonials" were not implemented as they were not part of the final design.

---

## Responsive Design

- Mobile-first layout using CSS Flexbox and Media Queries
- Tested across screen sizes (mobile, tablet, desktop)
- Navigation menu and grid sections adapt to screen size

---

## WordPress Standards Followed

- functions.php used to enqueue scripts and styles properly
- style.css includes the required theme header
- Theme supports dynamic title tags, thumbnails, and Gutenberg editor styling
- Clean and modular file structure
- No page builders used; only core Block Editor

---

## Theme Screenshot

Include a file named screenshot.png (1200x900) inside the theme folder to preview the theme in the WordPress dashboard.

---

## Notes

- Built using only WordPress core features (no plugins or builders)
- Optimized for speed, accessibility, and maintainability
- Includes “Load More” functionality for location grid via custom JS

---

Built for the Web Developer Role Assessment
