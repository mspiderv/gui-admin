<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface TagContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = '$tag|content|paired=true';

	public function __construct($tag, $content = '', $paired = true, $attributes = []);

}