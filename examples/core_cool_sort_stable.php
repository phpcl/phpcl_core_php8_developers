<?php
// core_cool_sort_stable.php
$makeTrek = function ($fname, $lname, $rank, $ship) {
	return new class($fname, $lname, $rank, $ship) {
		public $fname = '';
		public $lname = '';
		public $rank  = '';
		public $ship  = '';
		public function __construct($fname, $lname, $rank, $ship)
		{
			$this->fname = $fname;
			$this->lname = $lname;
			$this->rank  = $rank;
			$this->ship  = $ship;
		}
		public function getArray()
		{
			return get_object_vars($this);
		}
	};
};
$star_trek = [
	$makeTrek('Jim','Kirk','Captain','Enterprise'),
	$makeTrek('Jim','Kirk','Admiral','Enterprise'),
	$makeTrek('Julian','Bashir','Lieutenant','Deep Space 9'),
	$makeTrek('Michael','Burnham','Commander','Discovery'),
	$makeTrek('Christine','Chapel','Head Nurse','Enterprise'),
	$makeTrek('Pavel','Chekov','Ensign','Enterprise'),
	$makeTrek('Kathryn','Janeway','Captain','Voyager'),
	$makeTrek('McCoy','Leonard','Chief Medical Officer','Enterprise'),
	$makeTrek('Janice','Rand','Yeoman','Enterprise'),
	$makeTrek('William','Riker','Commander','Enterprise'),
	$makeTrek('Seven of','Nine','Civilian','Voyager',),
	$makeTrek('Mister','Spock','Commander','Enterprise'),
	$makeTrek('Tasha','Yar','Lieutenant','Enterprise'),
	$makeTrek('Montgomery','Scott','Chief Engineer','Enterprise'),
];
$sortByShip = function ($obj1, $obj2) {
	return $obj1->ship <=> $obj2->ship;
};
$sortByShipAndLast = function ($obj1, $obj2) {
	return $obj1->ship <=> $obj2->ship
		   ?: $obj1->lname <=> $obj2->lname;
};
$output = function ($star_trek) {
	$pattern = '%12s | %12s | %22s | %12s' . PHP_EOL;
	$twelve  = '------------';
	$line    = sprintf($pattern, $twelve, $twelve, str_repeat('-', 22), $twelve);
	printf($pattern, 'First', 'Last', 'Rank', 'Ship');
	echo $line;
	foreach ($star_trek as $obj)
		vprintf($pattern, $obj->getArray());
	echo $line;
};
usort($star_trek, $sortByShip);
$output($star_trek);
usort($star_trek, $sortByShipAndLast);
$output($star_trek);
	
