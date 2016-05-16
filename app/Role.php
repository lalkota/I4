<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "role";

    /**
     * get all menus for a role
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menu()
    {
        return $this->hasMany("App\Menu");
    }

    public function children()
    {
        return $this->hasMany('App\Menu', 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo('App\Menu', 'id', 'parent_id');
    }
}
