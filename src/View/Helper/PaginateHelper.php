<?php

namespace App\View\Helper;
use Cake\Routing\Router;

/**
 * Render paging html
 * 
 * @package View.Helper
 * @created 2014-11-29
 * @version 1.0
 * @author thailvn
 * @copyright Oceanize INC
 */
class PaginateHelper extends AppHelper {

    /** @var array $helpers Use helpers */
    public $helpers = array('Html');

    /**
     * Render paging html
     *     
     * @author thailvn
     * @param int $total Total record
     * @param int $limit Page size
     * @param int $displayPage How page link showing
     * @param string $url If empty then get current url     
     * @return string Paging html 
     */
    function render($total = 0, $limit = 0, $function = '', $sPage = 1, $displayPage = 10, $url = '') {
        $page = !empty($this->request->getQuery('page')) ? $this->request->getQuery('page') : $sPage;
        if (empty($url)) {
            $param = array();
            foreach ($this->request->getQuery() as $name => $value) {
                if ($name != 'page') {
                    if (is_array($value)) {
                        foreach ($value as $item) {
                            $param[] = "{$name}[]={$item}";
                        }
                    } else {
                        $param[] = "{$name}={$value}";
                    }
                }
            }
            $homeUrl = Router::fullBaseUrl() . USE_SUB_DIRECTORY;
            $url = $homeUrl.'/'. $this->request->url . '?';
            if (!empty($param)) {
                $url = $url . implode('&', $param) . '&';
            }
        }
        $nav = '';
        $totalPage = ceil($total / $limit);
        $delta = ceil($displayPage / 2);
        if ($totalPage > $displayPage) {
            if ($page <= $delta) {
                $start = 1;
                $end = $displayPage;
            } elseif ($page >= $totalPage - $delta) {
                $start = $totalPage - $displayPage + 1;
                $end = $totalPage;
            } else {
                $start = $page - $delta + 1;
                $end = $page + $delta;
            }
        } else {
            $start = 1;
            $end = $totalPage;
        }
        if ($end > 1) {
            $html = '<div class="pagination-area mt-50">';
            $html .= '<div class="list-page-2"><p>Có '.$total.' sản phẩm</p></div>';
            $html .= '<div class="page-number">';
            $html .= '<ul class="pagination paging">';
            for ($i = $start; $i <= $end; $i++) {
                if ($i == $page) {
                    $nav .= "<li><a class=\"active\" href=\"#\">{$i}<span class='sr-only'>(current)</span></a></li>";
                } else {
                    if (!empty($function)) {
                        $nav .= "<li><a onclick='".$function."({$i})'>{$i}</a></li>";
                    } else {
                        $nav .= "<li><a href='" . $url . "page={$i}'>{$i}</a></li>";
                    }
                }
            }
            if ($page > 1) {
                if (!empty($function)) {
                    $prev = "<li class=\"prev\"><a onclick='".$function."(".($page - 1).")'>← </a></li>";
                } else {
                    $prev = "<li><a href='" . $url . "page=" . ($page - 1) . "' aria-label='Previous'><span aria-hidden='true'>Trước</span></a></li>";
                }
            } else {
                $prev = "";
            }
            if ($page < $totalPage) {
                if (!empty($function)) {
                    $next = "<li class=\"next\"><a onclick='".$function."(".($page + 1).")'> →</a></li>";
                } else {
                    $next = "<li><a href='" . $url . "page=" . ($page + 1) . "'  aria-label='Next'><span aria-hidden='true'>Sau</span></a></li>";
                }
            } else {
                $next = "";
            }

            $html .= "{$prev}";
            $html .= "{$nav}";
            $html .= "{$next}";
            
            $html .= '</ul>';
            $html .= '</div>';
            $html .= '</div>';
        }

        
        return $html;
    }

}
