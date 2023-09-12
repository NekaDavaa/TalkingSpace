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


  /*
	 * Get Topics By Category
	 */



	/*
	 * Get Category By ID
	*/
	public function getCategory($category_id){
		$this->db->query("SELECT * FROM categories WHERE id = :category_id
		");
		$this->db->bind(':category_id', $category_id);
	
		//Assign Row
		$row = $this->db->single();
	
		return $row;
	}



		public function getByCategory($category_id){
		$this->db->query("SELECT topics.*, categories.*, users.username, users.avatar FROM topics
						INNER JOIN categories
						ON topics.category_id = categories.id
						INNER JOIN users
						ON topics.user_id=users.id
						WHERE topics.category_id = :category_id			
		");
		$this->db->bind(':category_id', $category_id);
	
		//Assign Result Set
		$results = $this->db->resultset();
	
		return $results;
	}



	}






	

	

	


