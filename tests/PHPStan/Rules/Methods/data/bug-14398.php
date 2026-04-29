<?php

namespace Bug14398;

class Foo
{
	public function calculate(): void {}
	protected function process(): void {}
}

class Bar extends Foo
{
	#[\Override]
	private function calculate(): void {}

	#[\Override]
	private function process(): void {}
}
