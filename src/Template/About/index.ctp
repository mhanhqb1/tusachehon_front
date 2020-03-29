<div class="columns-container">
    <div class="container" id="columns">
        <div class="row">
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- Blog category -->
                <?php echo $this->element('Layout/product_left'); ?>
                <!-- ./blog category  -->
            </div>
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <h1 class="page-heading" style="margin-bottom: 20px;">
                    <span class="page-heading-title2">Giới thiệu công ty</span>
                </h1>
                <div class="fr new-blog-right">
                    <?php echo !empty($data['content']) ? $data['content'] : '';?>
                </div>
            </div>
        </div>
    </div>
