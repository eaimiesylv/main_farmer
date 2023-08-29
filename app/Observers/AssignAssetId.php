<?php 
namespace App\Observers;

trait AssignAssetId{
	
	 public static function boot(){
        parent::boot();
        static::created(function ($model) {
           
            $model->update(['asset_id' => time()+ $model->id]);
        });
    }
	
	
	
}