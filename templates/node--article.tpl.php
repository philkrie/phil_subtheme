<?php #dpm($content); ?>
<div class="module mid" style = "background: 
    linear-gradient(
      rgba(0, 0, 0, 0.6),
      rgba(0, 0, 0, 0.6)
    ),
    url(<?php print file_create_url($content["field_image"]["#items"][0]["uri"]); ?>) no-repeat center center; background-size: cover">
    <h2><?php print $node->title; ?></h2>
</div>
<div class="writing">
    <?php print $content['body']['#items'][0]['value']; ?>
</div>
