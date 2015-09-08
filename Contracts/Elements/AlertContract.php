<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface AlertContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = '$content|state=warning|description|icon|$dismissable=true';

	public function __construct($content, $state = 'warning', $description = null, $icon = null, $dismissable = true);

}