<?php declare(strict_types = 1);

array_udiff(
	[1,2,3],
	[4,5,6],
	function(string $a, string $b): string {
		return $a . $b;
	},
);

array_udiff(
	[1,2,3],
	[4,5,6],
	function(int $a, int $b): string {
		return $a . $b;
	},
);

array_udiff(
	null,
	null,
	function(string $a, int $b): string {
		return $a . $b;
	},
);

array_udiff(
	[25,26],
	[26,27],
	static function(int $a, int $b): int {
		return $a <=> $b;
	},
);

array_udiff(
	["25","26"],
	["26","27"],
	'strcasecmp',
);

array_udiff(
	[100, 200, 300],
	['200', '300', '400'],
	function(int $a, string $b): int {
		return (string) $a <=> $b;
	},
);
