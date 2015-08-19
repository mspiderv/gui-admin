<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface CalloutContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = '$heading|state=info|content';

	public function __construct($heading, $state = 'info', $content = null);

}