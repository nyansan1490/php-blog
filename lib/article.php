<?php
class Article{
  private $id = null;
  private $title = null;
  private $body = null;
  private $filename = null;
  private $file = null;
  private $created_at = null;
  private $updated_at = null;
  private $db;

  public function __construct(){
  }

  public function save(){
    $queryArticle = new QueryArticle();
    $queryArticle->setArticle($this);
    $queryArticle->save();
  }

  public function delete(){
    $queryArticle = new QueryArticle();
    $queryArticle->setArticle($this);
    $queryArticle->delete();
  }

  public function getId(){
    return $this->id;
  }

  public function getTitle(){
    return $this->title;
  }

  public function getBody(){
    return $this->body;
  }

  public function getFilename(){
    return $this->filename;
  }

  public function getFile(){
    return $this->file;
  }

  public function getCreatedAt(){
    return $this->created_at;
  }

  public function getUpdatedAt(){
    return $this->updated_at;
  }

  public function setId($id){
    $this->id = $id;
  }

  public function setTitle($title){
    $this->title = $title;
  }

  public function setBody($body){
    $this->body = $body;
  }

  public function setFile($file){
    $this->file = $file;
  }

  public function setFilename($filename){
    $this->filename = $filename;
  }

  public function setCreatedAt($created_at){
    $this->created_at = $created_at;
  }

  public function setUpdatedAt($updated_at){
    $this->updated_at = $updated_at;
  }
}
