<?php

namespace App;

use App\Traits\CreatorDetails;

class District extends \Jenssegers\Mongodb\Eloquent\Model
{
    protected $table = 'District';

    use CreatorDetails;
    
    protected $fillable=['Name','state_id'];

//    public function state()
//    {
//        return $this->belongsTo('App\State');
//    }
}
