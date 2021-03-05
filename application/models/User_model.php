<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {

	function get_address($no_record=100)
	{
		$this->db->order_by('Id', 'DESC'); //แสดง record สุดท้ายออกมาบรรทัดแรก
		$query = $this->db->get('address',$no_record);
		foreach ($query->result() as $row)
		{
			$data['address'][] = array(
				'Id'        => $row->Id,
				'Name'      => $row->Name,
				'Surname'   => $row->Surname,
				'Email'     => $row->Email,
				'Phone'     => $row->Phone,
				'Country'   => $row->Country
			);
		}
		//var_dump($data); เรียกดูข้อมูลของ data
		return $data;
	}

	public function get_address2()
	{
		$query = $this->db->query('SELECT * FROM address limit 100');

		foreach ($query->result_array() as $row)
		{
			$data['address'][] = array(
				'Id'        => $row['Id'],
				'Name'      => $row['Name'],
				'Surname'   => $row['Surname'],
				'Email'     => $row['Email'],
				'Phone'     => $row['Phone'],
				'Country'   => $row['Country']
			);
		}
		return $data;
	}

	public function insert_data($data)
	{
		return $this->db->insert('address', $data);
	}

	public function get_1address($id)
	{
		$this->db->where('Id', $id);
		$query = $this->db->get('address');

		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$data = array(
				'Id'        => $row->Id,
				'Name'      => $row->Name,
				'Surname'   => $row->Surname,
				'Email'     => $row->Email,
				'Phone'     => $row->Phone,
				'Country'   => $row->Country
			);
			return $data;
		}
	}

	public function update_data($id, $data)
	{
		$this->db->where('Id', $id);
		$this->db->update('address', $data);
	}

	public function delete_data($id)
	{
		$this->db->where('Id', $id);
		$this->db->delete('address');
	}

	function search_data($name,$surname)
	{
		$this->db->like('Name', $name);
		$this->db->like('Surname', $surname);
		$query = $this->db->get('address');

		foreach ($query->result() as $row)
		{
			$data['address'][] = array(
				'Id'        => $row->Id,
				'Name'      => $row->Name,
				'Surname'   => $row->Surname,
				'Email'     => $row->Email,
				'Phone'     => $row->Phone,
				'Country'   => $row->Country
			);
		}
		return $data;
	}
}
