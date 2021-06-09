<?php
  include 'lib/secure.php';
  include 'lib/connect.php';
  include 'lib/queryArticle.php';
  include 'lib/article.php';

  if (!empty($_GET['id'])){
    $queryArticle = new QueryArticle();
    $article = $queryArticle->find($_GET['id']);
    $article->delete();
  }
  header('Location: backend.php');
