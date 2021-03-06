<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 12/25/2018
 * Time: 11:30 PM
 */

namespace Qpdb\HtmlBuilder\Elements;


use Qpdb\HtmlBuilder\Abstracts\AbstractHtmlElement;
use Qpdb\HtmlBuilder\Traits\CanHaveChildren;

class HtmlDiv extends AbstractHtmlElement
{
	use CanHaveChildren;

	/**
	 * @return string
	 */
	public function getTag() {
		return 'div';
	}

}