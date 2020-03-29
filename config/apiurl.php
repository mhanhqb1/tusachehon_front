<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'lyonabeauty');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_settings_general', 'settings/general');
Configure::write('API.url_settings_gethomedata', 'settings/gethomedata');

Configure::write('API.url_products_all', 'products/all');
Configure::write('API.url_products_list', 'products/list');
Configure::write('API.url_products_detail', 'products/detail');

Configure::write('API.url_posts_list', 'posts/list');
Configure::write('API.url_posts_detail', 'posts/detail');

Configure::write('API.url_orders_addupdate', 'orders/addupdate');

Configure::write('API.url_contacts_addupdate', 'contacts/addupdate');
Configure::write('API.url_pages_detail', 'pages/detail');