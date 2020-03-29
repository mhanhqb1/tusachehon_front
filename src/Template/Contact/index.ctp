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
                    <span class="page-heading-title2">Liên hệ</span>
                </h1>
                <?php echo $this->Flash->render() ?>
                <div class="fr new-blog-right">
                    <span data-mce-style="font-size: 11pt;" style="font-size: 11pt;">
                        <strong><?php echo $_settings['company']['name']; ?><br><br></strong>
                    </span>
                    <div class="contactAdd">
                        <p>
                            <span data-mce-style="font-size: 11pt;" style="font-size: 11pt;">
                                Địa chỉ: <?php echo $_settings['company']['address']; ?>
                                <br><br>
                                Hotline: <?php echo $_settings['company']['tel']; ?>
                            </span>
                            <br><br>
                        </p>
                    </div>

                    <form action="<?php echo $BASE_URL; ?>/lien-he" method="post">
                        <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>
                        <div class="form-group">
                            <label class="label">Họ tên</label>
                            <input class="form-control" type="text" name="name" value="" placeholder="Họ tên" required="required"/>
                        </div>
                        <div class="form-group">
                            <label class="label">Email</label>
                            <input class="form-control" type="email" name="email" value="" placeholder="Email" required="required"/>
                        </div>
                        <div class="form-group">
                            <label class="label">Số điện thoại</label>
                            <input class="form-control" type="text" name="phone" value="" placeholder="Số điện thoại" required="required"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="10" placeholder="Tin nhắn..." required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Gửi">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
