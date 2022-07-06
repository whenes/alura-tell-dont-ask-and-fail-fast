<?php

class PostJaPublicadoException extends \DomainException {}

class PostStatus {
  const RASCUNHO = "RASCUNHO";
  const PUBLICADO = "PUBLICADO";
}

class Post {
  public $status = PostStatus::RASCUNHO;
  public function publicar() {
    if ($this->status === PostStatus::RASCUNHO) {
      $this->status = PostStatus::PUBLICADO;
    } else {
      throw new PostJaPublicadoException();
    }
  }
}

$post = new Post();
$post->publicar();
