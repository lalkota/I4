<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/17/2016
 * Time: 1:24 PM
 */

namespace App;


class BuildMenu
{
    private $menus;
    public function __construct($menus)
    {
        $this->menus = $menus;
    }

    /**
     * build the menu hirarchy and return
     * @return array
     */
    public function BuildMenuFromCollection()
    {
        $menuList = array();
        foreach($this->menus as $menu) {
            if($menu["parent_id"]) {
                $menuList[$menu["parent_id"]][$menu["id"]] = array($menu["name"],$menu["url"]);
            } else {
                $menuList[$menu["id"]][0] = array($menu["name"],$menu["url"]);
            }
        }
        return $menuList;
    }
}