<?php namespace DeepthiBenjin\Publications\Models;

use Model;

/**
 * Model
 */
class Publications extends Model
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
    public $table = 'deepthibenjin_publications_';

	
	public $attachOne = [
	  'featuredimage'=>'System\Models\File'
	  ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
