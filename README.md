# Substack Mentions Plugin for WordPress

This plugin automatically renders @mentions from Substack exports as bold text in WordPress posts, pages, and custom post types. It processes mentions contained in a special `<span>` element with the class `mention-wrap` and formats them by prepending a bold `@username` without any links.

## Features

- **Auto Format Mentions:** Converts @mentions in Substack export data to bold text.
- **No External Links:** Avoids creating clickable links for mentions.
- **Supports All Post Types:** Works on all posts, pages, and custom post types.
- **Simple and Lightweight:** No additional dependencies or complex setup.

## Installation

1. **Download** or **Clone** this repository.
2. **Upload** the `substack-mentions` folder to your WordPress `wp-content/plugins/` directory.
3. **Activate** the plugin through the **Plugins** menu in WordPress.

## Usage

Once activated, the plugin will automatically search for mentions inside elements with the class `mention-wrap` and apply the formatting to them. It will work on all your public-facing posts, pages, and custom post types.

You don’t need to do anything extra to make it work. The script automatically processes mentions when the page loads.

### Example of Exported Mention (Substack)
The plugin processes mentions like:

```html
<p><span class="mention-wrap" data-attrs="{&quot;name&quot;:&quot;Matt Mannino&quot;,&quot;id&quot;:21238285,&quot;type&quot;:&quot;user&quot;,&quot;url&quot;:null,&quot;photo_url&quot;:&quot;https://substack-post-media.s3.amazonaws.com/public/images/3cb9923d-eb3b-45f8-b43e-e1b648345368_3024x3024.png&quot;,&quot;uuid&quot;:&quot;f823792b-249b-445
