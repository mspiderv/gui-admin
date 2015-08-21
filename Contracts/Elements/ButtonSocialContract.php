<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface ButtonSocialContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = 'social|content|icon';

	public function __construct($social = '', $content = '', $icon = null);

}