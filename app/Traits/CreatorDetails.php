<?php 

namespace App\Traits;

use Auth;

trait CreatorDetails
{
    public static function boot() {
       
        parent::boot();

//     static::updating(function($table)  {
//         $table->updated_by = Auth::user()->username;
//     });

//     // create a event to happen on deleting
//     static::deleting(function($table)  {
//         $table->deleted_by = Auth::user()->username;
//     });

    // create a event to happen on saving
    static::saving(function($table)  {
        $table->userName = is_object(Auth::user()) ? Auth::user()->id : 'rootorgadmin'; 
    });
    }

    // Auth::user() contains fields -> _id, name, email, phone, dob, gender, org_id, role_id, updated_at, created_at, role_ids, approve_status
}