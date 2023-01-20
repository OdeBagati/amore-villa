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

    function getKamarBy($param)
    {
        $this->builder->where($param);
        return $this->builder->get();
    }

    function saveData($arrSave)
    {
        if($arrSave['id_kamar']>0)
        {
            $this->builder->where('id_kamar',$arrSave['id_kamar']);
            $this->builder->update($arrSave);
            return $arrSave['id_kamar'];
        }
        else
        {
            $this->builder->insert($arrSave);
            return $this->db->insertID();
        }
    }

    function deleteKamar($param)
    {
        $this->builder->where($param);
        return $this->builder->delete();
    }
}