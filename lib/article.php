<?php
class Article{
  private $id;
  private $title;
  private $body;
  private $created_at;
  private $updated_at;
  private $db;

  public function __construct(){
    include __DIR__.'/connect.php';
    $this->db = new connect();
  }

  public function create($title, $body){
    $sql = "INSERT INTO articles (title, body, created_at, updated_at)
            VALUES (:title, :body, NOW(), NOW())";
    $this->db->query($sql, array(':title' => $title, ':body' => $body));
  }

  public function find($id){
    $sql = "SELECT * FROM articles WHERE id=:id";
    $stmt = $this->db->query($sql, array(':id' => $id));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result){
      $this->id = $result['id'];
      $this->title = $result['title'];
      $this->body = $result['body'];
      $this->created_at = $result['created_at'];
      $this->updated_at = $result['updated_at'];
    }
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
}
