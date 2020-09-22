<?php
// core_cool_nullsafe.php
namespace Application\Entity;
class Event extends Base
{
	const TABLE = 'events';
	const KEY = 'event_key';
	public function getHotel()
	{
		return new Hotel($this->pdo, $this->getProps('hotel_id'));
	}
}
