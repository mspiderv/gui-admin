<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;

interface BoxContract extends ElementContract, AttributesElement, DataElement, ContainerElement {

	const VARIABLES = 'state=default|icon|title|solid=false|bg';
	
	const POSITIONS = 'body|footer';

	public function __construct($title = '', $state = 'default', $icon = '');

}