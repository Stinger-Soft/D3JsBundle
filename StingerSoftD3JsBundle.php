<?php

/*
 * This file is part of the Stinger Soft D3 Js package.
 *
 * (c) Oliver Kotte <oliver.kotte@stinger-soft.net>
 * (c) Florian Meyer <florian.meyer@stinger-soft.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace StingerSoft\PlatformBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class StingerSoftD3JsBundle extends Bundle {

	public static function getRequiredBundles($env) {
		$bundles = [];
		
		$bundles['StingerSoftD3JsBundle'] = '\StingerSoft\D3JsBundle\StingerSoftD3JsBundle';
		return $bundles;
	}
}
