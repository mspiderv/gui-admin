<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface DropdownItemContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = 'content|href=#';

	public function __construct($content = '', $href = '#', $attributes = []);

}