<?php
/* 
 * Production's Config
 */

use Cake\Core\Configure;

define('USE_SUB_DIRECTORY', '');
Configure::write('API.Host', 'http://api.lyonabeauty.com/public/');
Configure::write('Config.HTTPS', true);
