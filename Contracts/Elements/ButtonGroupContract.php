<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface ButtonGroupContract extends ElementContract, AttributesElement, ContainerElement, DataElement {

	const VARIABLES = 'vertical=false';

	const POSITIONS = 'default';

	public function __construct(array $container = []);

}