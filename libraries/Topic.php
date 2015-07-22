<?php 

class Topic{
//Init DB Variable
	private $db;
	
	/*
	 * Constructor
	 */

	
	public function __construct(){
		
		$this->db = new Database;
		
		
	}
	
	/*
	 * Get all Topics
	 */
	
	public function getAllTopics(){
		$this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
							INNER JOIN users
							ON topics.user_id = users.id
							INNER JOIN categories
							ON topics.category_id = categories.id
							ORDER BY create_date DESC
					
				");
		
	//Assign Result Set
	$results = $this->db->resultset();
		
	return $results;
				 
	}
	
	/*
	 * Get total # of topics
	 */
	
	public function getTotalTopics(){
		$this->db->query("SELECT * FROM topics");
		$rows = $this->db->resultset();
		return $this->db->rowCount();
		
	}
	/*
	 * Get Total # of categories
	 */
	
	public function getTotalCategories(){
		$this->db->query("SELECT * FROM categories");
		$rows = $this->db->resultset();
		return $this->db->rowCount();
		
	}

	/*
	 * Get total # of replies
	 */
	
	public function getTotalReplies($topic_id){
		$this->db->query('SELECT * FROM replies WHERE topic_id='.$topic_id);
		$rows = $this->db->resultset();
		return $this->db->rowCount;
		
	}
	
	/*
	 * Get category BY ID
	 * 
	 */
	public function getCategory($category_id){
		$this->db->query("SELECT * FROM categories WHERE id = :category_id
		");
		$this->db->bind(':category_id', $category_id);
	
		//Assign Row
		$row = $this->db->single();
	
		return $row;
	}
	
	/*
	 * Get Topic By ID
	 */
	
	public function getTopic($id){
		$this->db->query("SELECT topics.*, users.username, users.name, users.avatar FROM topics
						INNER JOIN users
						ON topics.user_id = users.id
						WHERE topics.id = :id	
				
				");
		/*
		 * "SELECT topics.*, users.username, users.name, users.avatar FROM topics
						INNER JOIN users
						ON topics.user_id = users.id
						WHERE topics.id=:id
		 */
		
		$this->db->bind(':id', $id);
		
		//Assign row
		$row = $this->db->single();
		return $row;
		
	}
	
	
	/*
	 * Get Topic Replies
	 */
	
	public function getReplies($topic_id){
		$this->db->query("SELECT replies.*, users.* FROM replies
						INNER JOIN users
						ON replies.user_id = users.id
						WHERE replies.topic_id = :topic_id 
						ORDER BY create_date ASC	
	
				");
		
		/*
		 * SELECT replies.*, users.* FROM replies
						INNER JOIN users
						ON replies.user_id = users.id
						WHERE topics.id=:topic_id
						ORDER BY create_date ASC
		 */
	
		$this->db->bind(':topic_id', $topic_id);
	
		//Assign row
		$results = $this->db->resultset();
		return $results;
	
	}
	
	
	/*
	 * Get Topics By Category
	 */
	public function getByCategory($category_id){
	$this->db->query("SELECT topics.*, categories.*, users.username, users.avatar FROM topics
						INNER JOIN categories
						ON topics.category_id = categories.id
						INNER JOIN users
						ON topics.user_id=users.id
						WHERE topics.category_id = :category_id	
					
				");
	$this->db->bind(':category_id', $category_id);
	
	/*
	 * SELECT topics.*, categories.*,users.username, users.avatar, categories.name FROM topics
							INNER JOIN users
							ON topics.user_id = users.id
							INNER JOIN categories
							ON topics.category_id = categories.id
							ORDER BY create_date DESC
							WHERE topics.category_id = :category_id
	 */
	
	//Assign Result Set
	$results = $this->db->resultset();
	return $results;
	
	}
	
}







?>
