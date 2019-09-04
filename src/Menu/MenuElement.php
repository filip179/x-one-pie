<?php

namespace App\Menu;

class MenuElement
{
    private $href;
    private $label;
    private $icon;

    public function __construct(string $label, string $href, string $icon)
    {
        $this->label = $label;
        $this->href = $href;
        $this->icon = $icon;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    public function isActive(string $url): bool
    {
        $a = explode('/', $url);

        if (count($a) > 2) {
            return ('/' . $a[1]) === $this->getHref();
        }

        return $url === $this->getHref();
    }

    /**
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }
}
