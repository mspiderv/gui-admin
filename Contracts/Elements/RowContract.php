<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;

interface RowContract extends ElementContract, AttributesElement, ContainerElement {

	const VARIABLES = '';

	const POSITIONS = 'default';

    // Variable-length argument list
	public function __construct($c1, $c2 = null, $c3 = null, $c4 = null, $c5 = null, $c6 = null, $c7 = null, $c8 = null, $c9 = null, $c10 = null, $c11 = null, $c12 = null);

}