<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;

interface ContainerContract extends ElementContract, ContainerElement {

	const POSITIONS = 'default';

	public function __construct(array $container = []);

}