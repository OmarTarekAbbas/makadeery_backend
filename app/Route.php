<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['method', 'route', 'controller_name', 'function_name', 'route_name'];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_route', 'route_id', 'id');
    }

    public function roles_routes()
    {
        return $this->hasMany('App\RoleRoute', 'route_id', 'id');
    }

    public function delete_all_model()
    {
        return $this->hasOne('App\DeleteAll', 'route_id', 'id');
    }

}
