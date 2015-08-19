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
    public function collapsible($title = '', $state = 'default');
    public function row($c1, $c2 = null, $c3 = null, $c4 = null, $c5 = null, $c6 = null, $c7 = null, $c8 = null, $c9 = null, $c10 = null, $c11 = null, $c12 = null);
    public function tabs($title, $icon = null, $active = 1);
    public function tab($title);
    public function alert($content, $state = 'warning', $description = null, $icon = null, $dismissable = true);
	public function blank();
    public function callout($heading, $state = 'info', $content = null);
    public function container(array $container = []);
    public function progressBar($value = 0, $state = 'default', $vertical = false);
    public function HTML($content = '');

}