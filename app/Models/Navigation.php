<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;


class Navigation extends Model
{
    use HasFactory;
	use Sluggable,LogsActivity;
	
	protected $fillable = [
     'name',
     'icon',
     'parent',
	 'slug',
	 'order',
	 'href',
	 
	 'status'
	 
    ];
	
	public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
	
	
	public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly([
				'name',
				'icon',
				'parent',
				'slug',
				'order',
				'href',
				
				'status'
				
			]);
        
    }
}
