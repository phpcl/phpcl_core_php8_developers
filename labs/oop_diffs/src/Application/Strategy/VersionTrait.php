<?php
namespace Application\ Strategy;
trait VersionTrait
{
	public abstract function version(int $num) : int;
}
