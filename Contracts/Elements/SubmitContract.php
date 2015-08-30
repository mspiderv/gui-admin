<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface SubmitContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = 'content|state=primary|tag=button|dropdown=false|size|flat=false|disabled=false|block=false|bg|social|socialOnlyIcon=true';

	public function __construct($value = '', $state = 'primary', $dropdown = false, $size = '', $attributes = []);

}
