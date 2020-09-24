<?php
// const_arg_promo.php
class Name
{
	/**
	 * Rewrite signature using constructor argument promotion
	 */
	public $title  = '';
	public $first  = '';
	public $middle = '';
	public $last   = '';
	public $suffix = '';
	public function __construct(
		string $title  = '',
		string $first  = '',
		string $middle = '',
		string $last   = '',
		string $suffix = '')
	{
		$this->title  = $title;
		$this->first  = $first;
		$this->middle = $middle;
		$this->last   = $last;
		$this->suffix = $suffix;
	}
	public function getFullName()
	{
		$name = ($this->title) ? $this->title . '.' : '';
		$name .= ($this->first) ? ' ' . $this->first : '';
		$name .= ($this->middle) ? ' ' . $this->first : '';
		$name .= ($this->last) ? ' ' . $this->last : '';
		$name .= ($this->suffix) ? ', ' . $this->suffix : '';
		return trim($name);
	}	
}
