<?php

namespace App\SiteTrait\User;

trait UserTrait{
	public function roles(){
        return $this->belongsToMany(\App\Role::class);
    }

    public function hasRole($role){
        if(is_string($role)){
            return $this->roles->contains('name', $role);
        }
        return !! $role->intersect($this->roles)->count();
    }

    public function assign($role)
    {
        if(is_string($role)){
            return $this->roles()->save(Role::whereName($role)->firstOrFail());
        }
        return $this->roles()-save($role);
    }
}