<?php declare(strict_types = 1); // lint >= 8.4

// ok
array_find_key(
	['foo' => 1, 'bar' => 2],
	function($value, $key) {
		return $key === 0;
	}
);

// ok
array_find_key(
	['foo' => 1, 'bar' => 2],
	function(int $value, string $key) {
		return $key === 0;
	}
);

// bad parameters
array_find_key(
	['foo' => 1, 'bar' => 2],
	function(string $value, int $key): bool {
		return $key === 0;
	}
);

// bad parameters
array_find_key(
	['foo' => 1, 'bar' => 2],
	fn (string $item, int $key) => $key === 0,
);

// bad return type
array_find_key(
	['foo' => 1, 'bar' => 2],
	function(int $value, string $key) {
		return $key;
	},
);

if (is_array($array)) {
	// ok
	array_find_key($array, fn ($value, $key) => $key === 0);

	// ok
	array_find_key($array, fn (string $value, int $key) => $key === 0);

	// ok
	array_find_key($array, fn (string $value) => $value === 'foo');

	// bad parameters
	array_find_key($array, fn (string $item, array $key) => $key === 0);

	// bad return type
	array_find_key($array, fn (string $value, int $key): array => []);
}
