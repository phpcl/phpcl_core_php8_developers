<?php
// core_cool_static_return.php
namespace Application\Sql;
class Insert
{
	public string $sql = "INSERT INTO %s (%s) \nVALUES (%s);";
	public string $table = '';
	public array $cols = [];
	public array $vals = [];
	public function into(string $table) : static
	{
		$this->table = $table;
		return $this;
	}
	public function columns(array $cols) : static
	{
		$this->cols = $cols;
		return $this;
	}
	public function values(array $vals) : static
	{
		$this->vals = $vals;
		return $this;
	}
	public function __invoke()
	{
		// create values
		$str = '';
		foreach ($this->vals as $key => $item) {
			if (is_string($item)) {
				$this->vals[$key] = "'$item'";
			} elseif (is_numeric($item)) {
				$this->vals[$key] = $item;
			} else {
				$this->vals[$key] = NULL;
			}
		}
		return sprintf($this->sql,
			$this->table,
			implode(',', $this->cols),
			implode(',', $this->vals));
	}
	public function render()
	{
		return $this->__invoke();
	}	
}
	
