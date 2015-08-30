<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface FormContract extends ElementContract, ContainerElement, DataElement {

	const VARIABLES = 'form=[]';

    const POSITIONS = 'default';

	function __construct(array $form = []);

}