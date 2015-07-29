<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;

interface AccordionContract extends ElementContract, AttributesElement, DataElement, ContainerElement {

	const VARIABLES = 'active=1';

	const POSITIONS = 'default';

	public function __construct(array $data = []);

}