<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;

interface TabsContract extends ElementContract, AttributesElement, DataElement, ContainerElement {

	const VARIABLES = '$title|icon|active=1';

	const POSITIONS = 'tabs|tools';

	public function __construct($title, $icon = null, $active = 1);

}