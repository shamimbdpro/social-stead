<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_Model {

	public function index()
	{
		$this->load->view('login_page');
	}

	public function service_insert(){
		$attr = array(
			's_name'  =>  $this->input->post('servicename'),
			'icon'    =>  $this->input->post('serviceicon'),
			'status'  =>  1,
			);
		$insert = $this->db->insert('service',$attr);

		if($insert){
			return true;
		}
		else{
			return false;
		}
	}

	public function all_service_find(){
	    $this->db->select('*');
	    $this->db->from('service');
	    $this->db->where('status',1);
		$this->db->order_by('id','asc');
		//$this->db->limit(10);
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}

	public function all_service_find_tow(){
	    $this->db->select('*');
	    $this->db->from('service');
	    //$this->db->where('status',1);
		$this->db->order_by('id','desc');
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}

	public function all_service_ty_find(){
	    $this->db->select('*');
	    $this->db->from('service_type');
	    //$this->db->where('status',1);
		$this->db->order_by('id','desc');
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}
	function getcategory(){
		$this->db->select('id,s_name');
		$this->db->from('service');
		$this->db->order_by('s_name', 'asc'); 
		$query=$this->db->get();
		return $query; 
	}
	function getData($loadType,$loadId){
		if($loadType=="state"){
			$fieldList='id,type as name';
			$table='service_type';
			$fieldName='cat_id';
			$orderByField='type';							
		}else{
			$fieldList='id,type as name';
			$table='service_type';
			$fieldName='cat_id';
			$orderByField='type';
		}
		
		$this->db->select($fieldList);
		$this->db->from($table);
		$this->db->where($fieldName, $loadId);
		$this->db->order_by($orderByField, 'asc');
		$query=$this->db->get();
		return $query; 
	}


	//////////////////////
	public function service_type_insert(){
		$attr = array(
			'cat_id'  =>  $this->input->post('CategroyId'),
			'name'    =>  $this->input->post('servicename'),
			'type'    =>  $this->input->post('servicetype'),
			'status'  =>  1,
			);
		$insert = $this->db->insert('service_type',$attr);

		if($insert){
			return true;
		}
		else{
			return false;
		}
	}



	public function this_service_type_find($id = null){
	    $this->db->select('*');
	    $this->db->from('service_type');
	    $this->db->where('cat_id',$id);
	    $this->db->where('status',1);
		$this->db->order_by('cat_id','desc');
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}

	public function this_service_find($id = null){
	    $this->db->select('*');
	    $this->db->from('service');
	    $this->db->where('id',$id);
	    $this->db->where('status',1);
		$this->db->order_by('id','desc');
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}

	public function this_service_pack_find($id = null){
	    $this->db->select('*');
	    $this->db->from('service_pack');
	    $this->db->where('su_id',$id);
	    $this->db->where('status',1);
		$this->db->order_by('s_id','ASC');
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}


	public function service_pack_insert($file_name = null){
		$attr = array(
			'c_id'  		=>  $this->input->post('categoryId'),
			'su_id'   	    =>  $this->input->post('subCategoryId'),
			'pack_name'     =>  $this->input->post('servicepname'),
			'pack_price'    =>  $this->input->post('price'),
			'img'		=>	$file_name,
			'status'        =>  1,
			);
		$insert = $this->db->insert('service_pack',$attr);

		if($insert){
			return true;
		}
		else{
			return false;
		}
	}

	public function all_service_pack_find(){
	    $this->db->select('*');
	    $this->db->from('service_pack');
	    $this->db->where('status',1);
		$this->db->order_by('s_id','asc');
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}



    //category popular publish
    public function publish($id = null){
        $this->db->set('status',0);
        $this->db->where('id',$id);
        $this->db->update('service');
    }
    //caetgory popular unpublish
    public function unpublish($id = null){
        $this->db->set('status',1);
        $this->db->where('id',$id);
        $this->db->update('service');
    }
	public function service_delet($id = null){
        $this->db->delete('service', array('id' => $id));
        if($this->db->affected_rows() ){
            return TRUE;
        }
        else{
            return FALSE;
        }
	}


    //category popular publish
    public function type_publish($id = null){
        $this->db->set('status',0);
        $this->db->where('id',$id);
        $this->db->update('service_type');
    }
    //caetgory popular unpublish
    public function type_unpublish($id = null){
        $this->db->set('status',1);
        $this->db->where('id',$id);
        $this->db->update('service_type');
    }
	public function service_type_delet($id = null){
        $this->db->delete('service_type', array('id' => $id));
        if($this->db->affected_rows() ){
            return TRUE;
        }
        else{
            return FALSE;
        }
	}

///////////////////////////
	public function all_services_pack_find(){
		$this->db->select('*');
		$this->db->from('service');
		$this->db->join('service_type', 'service_type.cat_id = service.id', 'left');
		$this->db->join('service_pack', 'service_pack.su_id = service_type.id', 'left');
		$this->db->order_by('s_id','DESC');
		$query = $this->db->get();
		$results = $query->result();
		//var_dump($results);
		//exit();
		return $results;
	}


	public function this_all_services_pack_find($id = null){
        $attr   = array(
            'id'    =>  $id
            );
        $query  =   $this->db->get_where('service_type',$attr);
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return FALSE;
        }
		return $results;
	}


	public function this_pack_find($id = null){
        $attr   = array(
            's_id'    =>  $id
            );
        $query  =   $this->db->get_where('service_pack',$attr);
        if($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return FALSE;
        }
	}




    //pack pu
    public function serpublish($id = null){
        $this->db->set('status',0);
        $this->db->where('s_id',$id);
        $this->db->update('service_pack');
    }
    //packss unpublish
    public function serunpublish($id = null){
        $this->db->set('status',1);
        $this->db->where('s_id',$id);
        $this->db->update('service_pack');
    }





	public function service_pack_delet($id = null){
        $this->db->delete('service_pack', array('s_id' => $id));
        if($this->db->affected_rows() ){
            return TRUE;
        }
        else{
            return FALSE;
        }
	}


}
