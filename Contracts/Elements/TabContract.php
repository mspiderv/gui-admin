<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\DataElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;

interface TabContract extends ElementContract, DataElement, ContainerElement {

	const VARIABLES = '$title';

	const POSITIONS = 'default';

	public function __construct($title);

    public function getTabId();

    public function getTitle();

    public function getContent();

}