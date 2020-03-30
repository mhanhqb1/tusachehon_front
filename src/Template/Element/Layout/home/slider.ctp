<?php if (!empty($data['sliders'])): ?>
    <div class="slider-area">
        <div class="slider-active owl-carousel">
            <?php foreach ($data['sliders'] as $v): ?>
                <div class="single-slider pt-125 pb-130 bg-img" style="background-image:url(<?php echo $v['image']; ?>);">
                    <div class="container">
                        <div class="slider-content slider-content-2 slider-animated-1">
                            <h1 style="color: rgba(255, 0, 0, 0);">Tu sach Ehon</h1>
                            <h2 style="color: rgba(255, 0, 0, 0);">Sach Ehon Cho be</h2>
                            <h3 style="color: rgba(255, 0, 0, 0);">Sach Ehon</h3>
                            <h2 style="color: rgba(255, 0, 0, 0);">tusachehon.com</h2>
                            <h2 style="color: rgba(255, 0, 0, 0);">mua sach ehon o dau</h2>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>