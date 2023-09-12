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

/*
 * # Counters 
 */

	/*
	 * Get Total # of Replies
	 */
	public function getTotalReplies($topic_id){
		$this->db->query('SELECT * FROM replies WHERE topic_id = '.$topic_id);
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}

  
  	  /*
	 * Get Total # of Topics
	 */
	public function getTotalTopics(){
		$this->db->query('SELECT * FROM topics');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}

		/*
	 * Get Total # of Categories
	*/
	public function getTotalCategories(){
		$this->db->query('SELECT * FROM categories');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}







	

	

	


