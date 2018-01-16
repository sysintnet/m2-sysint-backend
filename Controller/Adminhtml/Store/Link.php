<?php

namespace Sysint\Backend\Controller\Adminhtml\Store;
 
use Magento\Framework\Controller\ResultFactory;

class Link extends \Magento\Backend\App\Action
{
    const STORE_URL = "https://sysint.net/store";
    
    /**
     * Redirect to extensions store
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl(self::STORE_URL);
        
        return $resultRedirect;
    }
 
}