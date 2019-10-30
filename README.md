# wc-tab-generator
### A little utility to quickly build out custom WooCommerce product tabs in themes or plugins.

Takes either a template part or acf_field as a callback to display the tab content.

Arguments

* tab_title
* tab_priority
* template_part (in template-parts directory)
* acf_field (acf field name from admin options page)

Usage
```php
$my_new_tab = WC_Tab_Generator::CreateTab(array(
  'tab_title' => 'My New Tab',
  'tab_priority' => 80,
  'acf_field' => 'my_acf_field'
));
```
