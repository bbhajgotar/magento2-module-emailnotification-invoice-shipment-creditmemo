<?php
namespace Y2B\EmailNotification\Plugin;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\App\RequestInterface;
use Y2B\EmailNotification\Helper\Data as HelperData;

class AutoMailInvoice
{

    protected $helperData;

    public function __construct(
        ResultFactory $Redirect, 
        ManagerInterface $messageManager,   
        RequestInterface $request,
        HelperData $helperData
    )
    {
        $this->resultFactory = $Redirect;
        $this->_messageManager = $messageManager;
        $this->getRequest = $request;
        $this->helperData = $helperData;
    }

    public function beforeExecute(\Magento\Sales\Controller\Adminhtml\Order\Invoice\Save $subject)
    {
        $emailSendEnable =  $this->helperData->getGeneralConfigMailStatus('invoice_email');
        
        if($emailSendEnable == true)
        {
            $data = $subject->getRequest()->getParam('invoice');
            $data['send_email'] = 1;
            $subject->getRequest()->setPostValue('invoice', $data);
        }

        //var_dump($subject->getRequest()->getParams());
        return $subject;
    }

}