<?php

return [
	'test_data' => [
		'testShouldDoNothingWhenBypass' => [
			'config' => [
				'options' => [
					'preload_links' => 1,
				],
				'bypass' => true,
			],
			'expected' => false,
		],
		'testShouldDoNothingWhenOptionDisabled' => [
			'config' => [
				'options' => [
					'preload_links' => 0,
				],
				'bypass' => false,
			],
			'expected' => false,
		],
		'testShouldReturnPreloadScript' => [
			'config' => [
				'options' => [
					'preload_links' => 1,
				],
				'bypass' => false,
			],
			'expected' => true,
		],
	],
];
