<?php


namespace App\Structural\Composite;


class CompositeItem extends MenuItem
{
    /**
     * @var MenuItem[]
     */
    private array $items = [];

    public function addItem(MenuItem $menuItem): void
    {
        $this->items[] = $menuItem;
    }

    public function render(): string
    {
        $list = '<a>' . $this->getName() . '</a>';

        $items = '';
        foreach ($this->items as $item) {
            $items .= $item->render();
        }
        $list .= '<ul>' . $items . '</ul>';

        return $list;
    }
}