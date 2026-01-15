# E-Learning UI Components Demo

This directory contains demo files showcasing the new professional e-learning UI components.

## Demo Files

### 1. `page-demo-components.php`
WordPress page template that demonstrates all new UI components:
- Progress bars and circular progress indicators
- Status badges (Completed, In Progress, Not Started, Locked)
- Modern button system
- Professional course cards
- Enhanced tabs
- Lesson navigation
- Learning path visualization

**Usage:**
1. Create a new page in WordPress admin
2. Select "Component Demo" from the Template dropdown
3. Publish and view the page

### 2. `ui-demo.html`
Standalone HTML file for quick preview without WordPress:
- Showcases the same components as the WordPress template
- Can be viewed directly in a browser
- Useful for rapid prototyping and testing

**Usage:**
1. Start a local web server in the theme directory
2. Navigate to `http://localhost:8080/ui-demo.html`

## Important Notes

### Placeholder Images
Both demo files use Unsplash placeholder images for demonstration purposes only. 

**For production:**
- Replace all Unsplash URLs with properly licensed local images
- Store images in `wp-content/uploads/` or `assets/images/`
- Ensure images are optimized for web (WebP format recommended)
- Use responsive images with srcset for better performance

### Accessibility
The components include:
- Proper ARIA labels and roles
- Keyboard navigation support
- Focus states for all interactive elements
- Reduced motion support via `prefers-reduced-motion` media query
- Semantic HTML structure

### Browser Support
Components are tested and working on:
- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers (iOS Safari, Chrome Android)

## Customization

All visual styles are controlled via CSS custom properties defined in `assets/css/main.css`:

```css
:root {
    --primary-color: #0056D2;
    --magenta-accent: #D9006C;
    --success-green: #1E8E3E;
    /* ... and more */
}
```

Modify these variables to match your brand colors.

## Integration with Tutor LMS / WooCommerce

These components are designed to work seamlessly with:
- Tutor LMS course pages
- WooCommerce product pages
- Custom post types
- Page builders (Elementor, etc.)

Simply use the CSS classes in your templates or page builder modules.

## Support

For questions or issues, refer to the main theme README.md or contact the theme developer.
