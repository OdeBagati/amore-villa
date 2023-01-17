<?php
namespace App\Models;
use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table      = 'kamar';
    protected $primaryKey = 'id_kamar';
    protected $builder;
    protected $db;

    function __construct()
    {
    	$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table($this->table);
    }

    function getAllKamar()
    {
        return $this->builder->get();
    }
}