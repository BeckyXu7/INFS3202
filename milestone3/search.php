

    <main>
        <p>search images page</p>



            <?php
        foreach ($posts as $post){ ?>
            <p>This image's id is: <?php echo $post['id'];?></p>

            <a href="<?php echo base_url();?>Home/add_favorite" name="<?php echo $post['id'];?>">Add Favorite</a>
            <br>


<!--            <img src="--><?php //echo base_url().$post['image_url'];?><!--" alt="" class="waterfall-box">-->
            <img src="<?php echo base_url().$post['image_url'];?>" class="waterfall-box">



        <?php } ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <a href="<?php echo base_url();?>Home/write_comment">Write Comment</a>
        <br>

        <!--<button onclick="conFunction()">Add favorite</button>
        <script>
            function conFunction() {
                alert("The image is added to your favorite list");
            }
        </script>-->



        <?php /*echo form_open();*/?><!--
        <label>Write your comment:</label>

        <input type="comment" name="comment" value="<?php /*echo set_value('comment'); */?>" class="form-control <?/*= (form_error('comment') == "" ? '':'is-invalid') */?>" placeholder="comment">
        <?php /*echo form_error('comment'); */?>
            <button type="submit" name="comment_btn" class="btn btn-primary">Confirm</button>

            --><?php /*echo form_close() */?>


    </main>
</body>
</html>