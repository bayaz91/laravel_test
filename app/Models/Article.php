<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'Article';
    protected $primaryKey = 'id';

    public $incrementing = false;
    public $timestamps = false;


       /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'create_date';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'update_date';


    protected $dates = [
        'create_date',
        'update_date',
    ];


    protected $fillable = [
        'id',
        'name',
        'writer',
        'email',
        'title',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function info()
    {
        return $this->belongsTo(USERS::class,'user_id','id')->withDefault();
    }

}





  

 
   

    
}
