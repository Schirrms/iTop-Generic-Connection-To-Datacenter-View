<?php

namespace Schrimms\iTop\Extension\GenericConnectionToDatacenterView\Hook\Backoffice;

use iTopWebPage;

class PageUIExtension implements \iPageUIExtension
{
	const MODULE_CODE = 'schirrms-generic-connection-to-datacenter-view';

	/**
	 * @inheritDoc
	 */
	public function GetNorthPaneHtml(iTopWebPage $oPage)
	{
		$oPage->add_saas('env-'.\utils::GetCurrentEnvironment().'/'.static::MODULE_CODE.'/asset/css/default.scss');

		return '';
	}

	/**
	 * @inheritDoc
	 */
	public function GetSouthPaneHtml(iTopWebPage $oPage)
	{
		// Do nothing
	}

	/**
	 * @inheritDoc
	 */
	public function GetBannerHtml(iTopWebPage $oPage)
	{
		// Do nothing
	}
}