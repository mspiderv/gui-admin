<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface ButtonDropdownContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = 'content=<span class="caret"></span>|state=default|tag=button|dropdown=true|size|flat=false|disabled=false|block=false|bg';

	public function __construct($state = 'default', $size = '');

}