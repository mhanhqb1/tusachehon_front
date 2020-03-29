<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class CatesController extends AppController {
    /**
     * List cate
     */
    public function index($url = '') {
        // Init
        $ids = array();
        $rootId = '';
        $cateName = '';
        $limit = 18;
        $cates = !empty($this->_settings['blog_cates']) ? $this->_settings['blog_cates'] : array();
        
        // Get cate id
        foreach ($cates as $c) {
            if ($c['url'] == $url) {
                $cateName = $c['name'];
                $ids[] = $c['id'];
                $rootId = $c['id'];
            }
            if (!empty($rootId) && $c['parent_id'] == $rootId) {
                $ids[] = $c['id'];
            }
        }
        $param = array(
            'cate_id' => implode(',', $ids),
            'limit' => $limit,
            'get_new_posts' => 1,
            'disable' => 0
        );
        $pageTitle = $cateName;
        
        // Call API
        $result = Api::call(Configure::read('API.url_posts_list'), $param);
        $data = !empty($result['data']) ? $result['data'] : array();
        $total = !empty($result['total']) ? $result['total'] : 0;
        $newPosts = !empty($result['new_posts']) ? $result['new_posts'] : array();
        
        // Set data
        $this->set(compact(
            'data',
            'limit',
            'total',
            'param',
            'cateName',
            'pageTitle',
            'newPosts'
        ));
    }
    
    /**
     * Cate detail
     */
    public function detail($url = '') {
        $data = array();
        $pageImage = '';
        $pageTitle = '';
        $pageDescription = '';
        $pageKeyword = '';
        $newPosts = array();

        if (!empty($url)) {
            $data = Api::call(Configure::read('API.url_posts_detail'), array(
                'url' => $url,
                'get_new_posts' => 1
            ));
            $newPosts = !empty($data['new_posts']) ? $data['new_posts'] : array();
            $pageImage = !empty($data['image']) ? $data['image'] : '';
            $pageTitle = !empty($data['name']) ? $data['name'] : '';
            $pageDescription = !empty($data['seo_description']) ? $data['seo_description'] : '';
            $pageKeyword = !empty($data['seo_keyword']) ? $data['seo_keyword'] : '';
        }
        $this->set(compact(
            'data',
            'pageImage',
            'pageTitle',
            'pageDescription',
            'pageKeyword',
            'newPosts'
        ));
    }
}