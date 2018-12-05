<?php namespace DeepthiBenjin\Speaking\Models;

use Model;

/**
 * Model
 */
class Speaking extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'deepthibenjin_speaking_';

	
	/* Relations*/
	
	public $attachOne = [
	  'poster'=>'System\Models\File'
	  ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
