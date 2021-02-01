<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DashboardSubMenu extends Model
{
    protected $fillable = ['dashboard_menu_id', 'name', 'url_path', 'icon', 'is_active'];

    public function dashboardMenu()
    {
        return $this->belongsTo(DashboardMenu::class, 'dashboard_menu_id');
    }
}
