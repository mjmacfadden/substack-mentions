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