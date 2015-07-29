<?php

namespace Vitlabs\GUIAdmin\Contracts;

interface GeneratorContract {

	public function window();
	public function icon($icon = '');
	public function tag($tag, $content = '', $paired = true, $attributes = []);
	public function accordion(array $data = []);
	public function box($title, $state = 'default', $icon = '');
	public function table();
	public function tableRow($data);
	public function login(array $data = []);

}