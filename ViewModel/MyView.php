<?php

declare(strict_types=1);

namespace MageMastery\BasicsViewModel\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\LayoutInterface;

class MyView implements ArgumentInterface
{
    private $layout;

    public function __construct(LayoutInterface $layout)
    {
        $this->layout = $layout;
    }

    public function getHandles(): array
    {
        return $this->layout->getUpdate()->getHandles();
    }
}
