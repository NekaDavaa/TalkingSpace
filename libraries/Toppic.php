<?php
class Toppic{
private $db;
public function __construct(){
	$this->db = new Database;
}

public function getAllTopics() {
$this->db->query("select topics.*, users.username, users.avatar, categories.name from topics 
	          join users on topics.user_id = users.id 
	          join categories on topics.category_id = categories.id 
	          order by create_date desc");
$results = $this->db->resultset();
return $results;
}
}