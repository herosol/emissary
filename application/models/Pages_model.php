<?php 
 
 class Pages_model extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 		$this->table_name="sitecontent";
 	}
 	function savePageContent($vals,$page_slug=""){
 		$this->db->set($vals);
 		if($page_slug != ""){
 			//die("here");
 			$this->db->where("ckey",$page_slug);
 			$this->db->update($this->table_name);
 			return $page_slug;
 		}	 		
 		else{
 			$this->db->insert($this->table_name);
 			return $this->db->insert_id();
 		}
 	}
 	function saveMetaContent($vals,$page_slug=""){
 		$this->db->set($vals);
 		if($page_slug != ""){
 			//die("here");
 			$this->db->where("slug",$page_slug);
 			$this->db->update('meta_info');
 			return $page_slug;
 		}	 		
 		else{
 			$this->db->insert('meta_info');
 			return $this->db->insert_id();
 		}
 	}
 	function getPageContent($page_slug=""){
 		if($page_slug != ""){
 			$this->db->where("ckey",$page_slug);
 			return $this->db->get($this->table_name)->row();
 		}
 		else{
 			 return $this->db->get($this->table_name)->result();
 		}
 	}
 	 function getMetaContent($page_slug=""){
 		if($page_slug != ""){
 			$this->db->where("slug",$page_slug);
 			return $this->db->get('meta_info')->row();
 		}
 		else{
 			 return $this->db->get('meta_info')->result();
 		}
 	}
 	function deletePage($page_slug=""){
 		$this->where("ckey",$page_slug);
 		$this->db->delete($this->table_name);
 		return $page_slug;	
 	}

	 function getJobCities()
	 {
		 $this->db->from('jobs');
		 $this->db->where(['status'=> 1]);
		 $this->db->select('city');
		 $this->db->distinct();
		 return $this->db->get()->result();
	 }

	function fetch_jobs_data($post)
	{
		$this->db->select('*');
		$this->db->from('jobs');

		// if(isset($post['price']) && !empty(trim($post['price'])))
		// {
		//   $priceIndex = explode(';', $post['price']);
		//   $this->db->where(['(price - discount) >='=> $priceIndex[0], '(price - discount) <='=> $priceIndex[1]]);
		// }

		if(isset($post['jobCats']) && !empty($post['jobCats']))
		{
			$this->db->group_start();
			foreach($post['jobCats'] as $key => $value)
			{
				if($key == 0)
					$this->db->where('job_cat', $value);
				else
					$this->db->or_where('job_cat', $value);
			}
			$this->db->group_end();
		}

		if(isset($post['cities']) && !empty($post['cities']))
		{
			$this->db->group_start();
			foreach($post['cities'] as $key => $value)
			{
				$value = str_replace('"', '', $value);
				if($key == 0)
					$this->db->where('city', $value);
				else
					$this->db->or_where('city', $value);
			}
			$this->db->group_end();
		}

		if(isset($post['types']) && !empty($post['types']))
		{
			$this->db->group_start();
			foreach($post['types'] as $key => $value)
			{
				$value = str_replace('"', '', $value);
				if($key == 0)
					$this->db->where('job_type', $value);
				else
					$this->db->or_where('job_type', $value);
			}
			$this->db->group_end();
		}

		$this->db->where(['status'=> 1]);
		if(!empty($post['sortBy']))
		{
			$this->db->order_by('id', $post['sortBy']);
		}
		else
		{
			$this->db->order_by('id', 'desc');
		}
		return $this->db->get()->result();
		// pr($this->db->last_query());

	}
 }



?>