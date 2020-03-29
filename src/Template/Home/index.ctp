<?php 
    if (!empty($data['sliders'])) {
        echo $this->element('Layout/home/slider', array('sliders' => $data['sliders'])); 
    }
    
    if (!empty($data['hot_products'])) {
        echo $this->element('Layout/home/saleoff', array('hot_products' => $data['hot_products']));
    }
    
    if (!empty($data['cate_products'])) {
        echo $this->element('Layout/home/cate_product', array('cate_products' => $data['cate_products']));
    }
?>
<div id="content-wrap">
    <div class="container">
        <?php 
        if (!empty($data['posts'])) {
            echo $this->element('Layout/home/news', array('posts' => $data['posts'])); 
        }
        ?>
        <?php echo $this->element('Layout/home/services'); ?>
    </div>
</div>