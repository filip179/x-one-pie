<?php

namespace App\Menu;

use Iterator;

class MenuContainer
{
    private static $instance;
    /**
     * @var MenuElement[]
     */
    private $menuElements;

    private function __construct()
    {
        $this->menuElements = [
            new MenuElement('Pulpit', '/', 'dashboard'),
            new MenuElement('Faktury', '/invoice', 'content_paste'),
            new MenuElement('Ustawienia', '/settings', 'settings_application'),
        ];
    }

    /**
     * @return MenuElement[]
     */
    public static function get(): Iterator
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        foreach (self::$instance->menuElements as $menuElement) {
            yield $menuElement;
        }
    }
}
