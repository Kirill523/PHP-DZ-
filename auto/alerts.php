<?php if(isset($_SESSION['flash']['error'])): ?>
            <div class="alert alert-danger">
            <?=get_flash('error')?>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['flash']['success'])): ?>
            <div class="alert alert-success">
            <?= get_flash('success')?>
            </div>
        <?php  endif; ?>