<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface ButtonContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = 'content|state=default|tag=a|dropdown=false|size|flat=false|disabled=false|block=false|bg|social|socialOnlyIcon=true';

	public function __construct($content = '', $state = 'default', $tag = 'a', $dropdown = false, $size = '');

}