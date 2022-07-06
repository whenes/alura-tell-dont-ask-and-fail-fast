<?php

class PostJaPublicadoException extends \DomainException {}

class PostStatus {
  const RASCUNHO = "RASCUNHO";
  const PUBLICADO = "PUBLICADO";
}

class Post {
  private $status = PostStatus::RASCUNHO;
  public function publicar() {
    if ($this->status !== PostStatus::RASCUNHO) {
      throw new PostJaPublicadoException();
    }
    $this->status = PostStatus::PUBLICADO;
  }
}

$post = new Post();
$post->publicar();
