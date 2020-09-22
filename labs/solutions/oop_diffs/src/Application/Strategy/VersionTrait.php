<?php
namespace Application\ Strategy;
trait VersionTrait
{
	// this should accept nothing and return string
	// public abstract function version(int $num) : int;
	public abstract function version() : string;
}
