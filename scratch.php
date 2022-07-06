<?php

class PostJaPublicadoException extends \DomainException {}

class PostStatus {
  const RASCUNHO = "RASCUNHO";
  const PUBLICADO = "PUBLICADO";
}

class Post {
  public $status = PostStatus::RASCUNHO;
}

$post = new Post();
if ($post->status === PostStatus::RASCUNHO) {
  $post->status = PostStatus::PUBLICADO;
} else {
  throw new PostJaPublicadoException();
}
