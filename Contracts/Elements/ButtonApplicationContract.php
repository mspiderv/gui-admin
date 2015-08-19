<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface ButtonApplicationContract extends ElementContract, AttributesElement, DataElement {

	const VARIABLES = 'content|tag=a|icon|badge|badgeBg=default';

	public function __construct($content = '', $tag = 'a', $icon = '', $badge = '', $badgeBg = 'default');

}