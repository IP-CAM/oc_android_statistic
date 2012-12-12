<?php
require_once('order.php');
class ModelSaleStatistic extends ModelSaleOrder 
{
	public function getTotalSalesByMonth($year, $month)
	{
		$query = $this->db->query("SELECT SUM(total) AS total FROM `" . DB_PREFIX . "order` WHERE order_status_id > '0' AND YEAR(date_added) = '" . (int)$year . "' AND MONTH(date_added) = '" . (int)$month . "'" );

		return $query->row['total'];
	}
	
	public function getTotalSalesByDay($year, $month, $day)
	{
		$query = $this->db->query("SELECT SUM(total) AS total FROM `" . DB_PREFIX . "order` WHERE order_status_id > '0' AND YEAR(date_added) = '" . (int)$year . "' AND MONTH(date_added) = '" . (int)$month . "' AND DAY(date_added) = '" . (int)$day . "'");

		return $query->row['total'];
	}

	public function getTotalOrdersByDay($year, $month, $day)
	{
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "order` WHERE YEAR(date_added) = '" . (int)$year . "' AND MONTH(date_added) = '" . (int)$month . "' AND DAY(date_added) = '" . (int)$day . "'");

		return $query->row['total'];
	}
}
?>