<?php

namespace Y2B\EmailNotification\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

	const XML_PATH_EMAIL_INVOICE = 'notification/';

	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}

	public function getGeneralConfigMailStatus($code, $storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_EMAIL_INVOICE .'notification_group/'. $code, $storeId);
	}

}