<div class="container" style="padding: 200px 400px 200px 400px;">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Default form</h4>
            <p class="card-description"> Basic form layout </p>
            <div class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputEmail1"><?= lang('e-mail'); ?></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="<?= lang('e-mail'); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><?= lang('password'); ?></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="<?= lang('password'); ?>">
                </div>
                <div class="form-check form-check-flat form-check-primary">
                    <button type="submit" class="btn btn-gradient-primary me-2"><?= lang('login'); ?></button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('body').css('background-color', '#39e1ff');
</script>
