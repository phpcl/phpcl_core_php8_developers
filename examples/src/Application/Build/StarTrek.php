<?php
namespace Application\Build;

class StarTrek
{
	public $trekkers = NULL;
	public $star_trek = [
		['Jim','Kirk','Captain','Enterprise'],
		['Jim','Kirk','Admiral','Enterprise'],
		['Julian','Bashir','Lieutenant','Deep Space 9'],
		['Michael','Burnham','Commander','Discovery'],
		['Christine','Chapel','Head Nurse','Enterprise'],
		['Pavel','Chekov','Ensign','Enterprise'],
		['Kathryn','Janeway','Captain','Voyager'],
		['McCoy','Leonard','Chief Medical Officer','Enterprise'],
		['Janice','Rand','Yeoman','Enterprise'],
		['William','Riker','Commander','Enterprise'],
		['Seven of','Nine','Civilian','Voyager',],
		['Mister','Spock','Commander','Enterprise'],
		['Tasha','Yar','Lieutenant','Enterprise'],
		['Montgomery','Scott','Chief Engineer','Enterprise'],
	];
	public function __construct()
	{
		foreach ($this->star_trek as $crew) {
			$this->trekkers[] = $this->makeTrek($crew);
		}
	}
	public function makeTrek($crew) {
		return new class($crew) {
			public $fname = '';
			public $lname = '';
			public $rank  = '';
			public $ship  = '';
			public function __construct($crew)
			{
				$this->fname = $crew[0];
				$this->lname = $crew[1];
				$this->rank  = $crew[2];
				$this->ship  = $crew[3];
			}
			public function getArray()
			{
				return get_object_vars($this);
			}
		};
	}
	public function sortByShip()
	{
		return usort($this->trekkers, function($obj1, $obj2) {
			return $obj1->ship <=> $obj2->ship;
		});
	}
	public function sortByShipAndLast()
	{
		return usort($this->trekkers, function($obj1, $obj2) {
			return $obj1->ship <=> $obj2->ship
				   ?: $obj1->lname <=> $obj2->lname;
			   });
	}
	public function showTrek($star_trek)
	{
		$output = '';
		$pattern = '%12s | %12s | %22s | %12s' . PHP_EOL;
		$twelve  = '------------';
		$line    = sprintf($pattern, $twelve, $twelve, str_repeat('-', 22), $twelve);
		$output .= sprintf($pattern, 'First', 'Last', 'Rank', 'Ship');
		$output .= $line;
		foreach ($star_trek as $obj)
			$output .= vsprintf($pattern, $obj->getArray());
		$output .= $line;
		return $output;
	}
}
	
