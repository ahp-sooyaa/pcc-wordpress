<div x-data="{open: false}" class="language-switcher-dropdown">
    <div @click="open = !open" class="current-language">
        <?php echo pll_current_language('name'); ?> 
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M12 14.975q-.2 0-.375-.062T11.3 14.7l-4.6-4.6q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l3.9 3.9l3.9-3.9q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7l-4.6 4.6q-.15.15-.325.213t-.375.062"/></svg>
    </div>
    <ul x-show="open" @click.outside="open = false" class="all-languages">
        <?php
            // Display Polylang's language switcher
            $languages = pll_the_languages(['raw' => 1]); // Get all languages

            // Get the list of languages available for the current post or page
            $post_translations = pll_get_post_translations(get_the_ID());
            
            // Filter out translations in draft or trash status
            $filtered_translations = array_filter($post_translations, function ($translation_id) {
                return get_post_status($translation_id) !== 'draft' && get_post_status($translation_id) !== 'trash';
            });
            
            if ($languages) {
                foreach ($languages as $language) {
                    // Display the language link if translation exists
                    if (isset($filtered_translations[$language['slug']])) {
                        echo "<a href='{$language['url']}'><li>{$language['name']}</li></a>";
                    } else {
                        echo "<li>{$language['name']}</li>";
                    }
                }
            }
        ?>
    </ul>
</div>