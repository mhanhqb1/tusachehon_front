<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Product Code/Name here <?php echo !empty($data['id']) ? $data['id'] : '';?></h4>
</div>
<div class="modal-body container-fluid">
    <div class="col-sm-12">
        <?php echo $this->element('product_detail', $data); ?>
    </div>
</div>