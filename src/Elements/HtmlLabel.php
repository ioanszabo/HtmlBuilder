<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 2/1/2019
 * Time: 11:37 PM
 */

namespace Qpdb\HtmlBuilder\Elements;


use Qpdb\HtmlBuilder\Abstracts\AbstractHtmlElement;
use Qpdb\HtmlBuilder\Traits\CanHaveChildren;

class HtmlLabel extends AbstractHtmlElement
{
	use CanHaveChildren;

	/**
	 * @param string $elementId
	 * @return $this
	 * @throws \Qpdb\Common\Exceptions\CommonException
	 * @throws \Qpdb\HtmlBuilder\Exceptions\HtmlBuilderException
	 */
	public function for( $elementId ) {
		$this->withAttribute( 'for', $elementId );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTag() {
		return 'label';
	}
}