<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface TagContainerContract extends ElementContract, AttributesElement, ContainerElement, DataElement {

    const VARIABLES = 'tag=div';

    const POSITIONS = 'default';

    public function __construct($tag = 'div', $class = null);

}