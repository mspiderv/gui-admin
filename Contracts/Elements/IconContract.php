<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\DataElement;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;

interface IconContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = '$icon';

	public function __construct($icon = '');

}