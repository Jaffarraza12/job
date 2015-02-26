<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model
{


	function fetchAllRows( $table, $columns, $where, $delimeter )
	{
		$this->db->select( $columns );
		$this->db->from( $table );
		
		if( $where != '' || $where != NULL ) :
		
		foreach ( $where as $key => $value )
		{
				
			$this ->db->where($key, $value);
				
		}
		
		endif;
		
		$query = $this->db->get();
		
		if( $query )
		{
			return $query;
		}
		else
		{
			return false;
		}
	}
 
 
 	function fetchSingleRow( $table, $columns, $where, $delimeter )
	{
		$this ->db->select( $columns );
		$this ->db->from( $table );
		
		
		if( $where != '' || $where != NULL ) :
		
		foreach ( $where as $key => $value )
		{
			
			$this ->db->where($key, $value);
			
		}
		
		endif;
		
		$query = $this->db->get();
		
		if( $query )
		{
			return $query;
		}
		else
		{
			return false;
		}
	}
	
	
	function insertRecord( $table, $array )
	{
		$query = $this->db->insert( $table, $array );
		
		if( $query )
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	
	
	function updateRecord( $table, $array, $where, $delimeter )
	{
		
		foreach ( $where as $key => $value )
		{
			
			$this ->db->where($key, $value);
			
		}
		
		
		$this->db->update($table, $array);
		
		return true;
		
	}
	
	
	function deleteRecord( $table, $where, $delimeter )
	{
		
		foreach ( $where as $key => $value )
		{
				
			$this ->db->where($key, $value);
				
		}
		
		
		$this->db->delete($table);
		
		return true;
		
	}
 
 
}