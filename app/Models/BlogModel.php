<?php
namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'blog';
    protected $primaryKey = 'id_blog';
    protected $builder;
    protected $db;

    function __construct()
    {
    	$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table($this->table);
    }

    function getAllBlog()
    {
        return $this->builder->get();
    }

    function getBlogBy($param)
    {
        $this->builder->where($param);
        return $this->builder->get();
    }

    function saveData($arrSave)
    {
        if($arrSave['id_blog']>0)
        {
            $this->builder->where('id_blog',$arrSave['id_blog']);
            $this->builder->update($arrSave);
            return $arrSave['id_blog'];
        }
        else
        {
            $this->builder->insert($arrSave);
            return $this->db->insertID();
        }
    }

    function deleteBlog($param)
    {
        $this->builder->where($param);
        return $this->builder->delete();
    }
}