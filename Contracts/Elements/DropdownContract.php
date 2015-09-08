<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;

interface DropdownContract extends ElementContract, AttributesElement, ContainerElement {

    const POSITIONS = 'default';

	public function __construct(array $container = []);

}