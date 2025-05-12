<?php
/*
Plugin Name: Substack Mentions
Description: Renders @mentions from Substack exports as bold text in WordPress.
Version: 1.3
Author: Your Name
*/

add_action('wp_head', 'substack_mentions_output_script');

function substack_mentions_output_script() {
    if (is_admin()) return;

    echo '<script>
    document.addEventListener("DOMContentLoaded", function () {
      const mentions = document.querySelectorAll(".mention-wrap");

      mentions.forEach((span) => {
        const attrsRaw = span.getAttribute("data-attrs");
        let attrs;

        try {
          attrs = JSON.parse(attrsRaw);
        } catch (e) {
          try {
            const decoded = attrsRaw.replace(/&quot;/g, \'"\');
            attrs = JSON.parse(decoded);
          } catch (err) {
            console.warn("Failed to parse mention data:", span);
            return;
          }
        }

        if (attrs && attrs.name) {
          const boldName = document.createElement("strong");
          boldName.textContent = "@" + attrs.name.trim() + " ";
          span.prepend(boldName);
        }
      });
    });
    </script>';
}
