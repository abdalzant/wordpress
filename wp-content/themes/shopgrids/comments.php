<div id="comments">

<h3><?php echo get_comments_number() ?><?php _e(' Comments')?></h3>

<!-- commentlist -->
<ol class="commentlist">

    <?php
              foreach(get_comments() as $comment) :?>
    <li class="thread-alt depth-1">

        <div class="avatar">

            <img width="50" height="50" class="avatar"
                src="  <?php echo get_avatar_url($comment->comment_author_email) ?>" alt="">
        </div>

        <div class="comment-info">
            <cite><?php echo $comment->comment_author ?></cite>

            <div class="comment-meta">
                <time class="comment-time" datetime="2014-01-14T24:05"><?php echo $comment->comment_date ?></time>
                <span class="sep">/</span><a class="reply" href="#">Reply</a>
            </div>
        </div>

        <div class="comment-text">
            <p><?php echo $comment->comment_content?></p>
        </div>
        <?php  
          $children =$comment->get_children();
          if($children) :
         ?>
        <ul class="children">
            <?php  foreach($children as $child) :?>
            <li class="depth-2">

                <div class="avatar">
                    <img width="50" height="50" class="avatar"
                        src=" <?php echo get_avatar_url($child->comment_author_email) ?>" alt="">
                </div>

                <div class="comment-info">
                    <cite><?php echo $comment->comment_author ?></cite>

                    <div class="comment-meta">
                        <time class="comment-time"
                            datetime="2014-01-14T24:05"><?php echo $child->comment_date ?></time>
                        <span class="sep">/</span><a class="reply" href="#">Reply</a>
                    </div>
                </div>

                <div class="comment-text">
                    <p><?php echo $comment->comment_content?></p>
                </div>

            

            </li>
            <?php endforeach ?>

        </ul>
        <?php  endif  ?>

    </li>
    <?php endforeach ?>


</ol> <!-- Commentlist End -->


<?php comment_form([
  'class_container'=>'respond',
  'class_form '=>'comment-form',
  'id_form'=>'contactForm',
  'label_submit'=>'Send Reply',
  'format'=>'html5',
  'title_reply'=>'Leave A Comment',

])
?>
</div> <!-- Comments End -->