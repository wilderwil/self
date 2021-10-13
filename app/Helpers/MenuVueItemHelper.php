<?php namespace App\Helpers;

use JeroenNoten\LaravelAdminLte\Helpers\MenuItemHelper;

class MenuVueItemHelper extends MenuItemHelper
{
    /**
     * Check if a menu item is a link.
     *
     * @param mixed $item
     * @return bool
     */
    public static function isLink($item)
    {
        return isset($item['text']) &&
               (isset($item['url']) || isset($item['route']) || isset($item['vue']));
    }

}
