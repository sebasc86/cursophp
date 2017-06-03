<?php

require 'Sharable.php';
require 'Editable.php';
require 'Post.php';
require 'Comment.php';

$post = new Post('Post');
$post->share();
$post->save();

$comment = new Comment('Comment');
$comment->share();
$comment->save();
