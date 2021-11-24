<?php

require_once 'SearchInterface.php';
require_once 'User.php';
require_once 'Post.php';

$oUser = new User();
echo $oUser->all();

$oPost = new Post();
echo $oPost->all();