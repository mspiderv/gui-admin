<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface InfoWidgetContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = 'heading|content|icon|bg';

	public function __construct($heading = '', $content = '', $icon = '', $bg = '');

}