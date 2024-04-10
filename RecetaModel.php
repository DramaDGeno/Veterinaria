<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Models;
use CodeIgniter\Model;

class RecetaModel extends Model {
    
	protected $table = 'receta';
	protected $primaryKey = 'id_receta';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['id_visita', 'desc_receta'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;    
	
	protected $with = ['receta'];

	public function receta() {
        return $this->belongsTo(RecetaModel::class, 'id_receta', 'id_receta');
    } 
}