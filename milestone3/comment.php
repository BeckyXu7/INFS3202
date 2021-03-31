<?php echo validation_errors();?>
<?php echo form_open();?>
    <label>Write your comment:</label>

    <input type="comment" name="comment" value="<?php echo set_value('comment'); ?>" class="form-control <?= (form_error('comment') == "" ? '':'is-invalid') ?>" placeholder="comment">
<?php echo form_error('comment'); ?>
    <button type="submit" name="comment_btn" class="btn btn-primary">Confirm</button>

<?php echo form_close() ?>