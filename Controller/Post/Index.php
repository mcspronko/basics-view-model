<?php

declare(strict_types=1);

namespace MageMastery\BasicsViewModel\Controller\Post;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;

class Index extends Action implements HttpGetActionInterface
{
    private $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute(): ResultInterface
    {
//        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $page = $this->pageFactory->create();
        $page->addHandle('some_random_handle');

        $page->getLayout()->getBlock('magemastery.basics.handles')
            ->setData('handles', $page->getLayout()->getUpdate()->getHandles());

        return $page;
    }
}
