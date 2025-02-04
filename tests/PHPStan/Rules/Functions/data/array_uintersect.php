<?php declare(strict_types = 1);

array_uintersect(
	[1,2,3],
	[4,5,6],
	function(string $a, string $b): string {
		return $a . $b;
	},
);

array_uintersect(
	[1,2,3],
	[4,5,6],
	function(int $a, int $b): string {
		return $a . $b;
	},
);

array_uintersect(
	null,
	null,
	function(string $a, int $b): string {
		return $a . $b;
	},
);

array_uintersect(
	[25,26],
	[26,27],
	static function(int $a, int $b): int {
		return $a <=> $b;
	},
);

array_uintersect(
	["25","26"],
	["26","27"],
	'strcasecmp',
);
