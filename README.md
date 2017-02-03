# OctoberCMS HyperComments plugin

Tailored comment system for your site!

This plugin adds integration with [HyperComments](https://www.hypercomments.com/) service.

## Available components:

### "Comments widget"

Display HyperComments widget

### "Mini-widgets"

Recent comments and most commented pages

## Available languages:

- English
- Русский

# Quickstart guide:

1. Go to the 'System' tab in October, and install the plugin using the AlexLit.HyperComments code.
2. After installation has finished a new component will appear in under Octobers 'CMS > Components' tab. You have the option to add this to only one page, or add it to a layout making it appear on all pages that use the layout. Whichever you chose the instructions are the same.
3. Open the your selected page/layout, and add the component to it.
4. Add component code anywhere on the page/layout.
5. That's it. You now have a working HyperComments on your page. It has no outside dependencies, so you don't have to worry about anything else.

## Components options

### "Comments widget"

#### Code:

```twig
{% component 'hcStream' %}
```

#### Options
- **Your widget ID:** You can get your widget code when you are registering in HyperComments or you can take it in the admin panel "Settings"-"Main"

### "Mini-widgets"

#### Code:

```twig
{% component 'hcMixstream' %}
```

#### Options
- **Your widget ID:** You can get your widget code when you are registering in HyperComments or you can take it in the admin panel "Settings"-"Main"
- **Modification of the widget:** Allows to set modification of the widget "Recent comments" - widget of last comments, "Popular articles" - widget of popular articles
- **Count:** Allows to set the number of comments or articles to be displayed in the widget (1-100)
- **Combined:** Display last comments and popular pages in widget tabs