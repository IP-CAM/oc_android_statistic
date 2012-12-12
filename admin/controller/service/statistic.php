<?php
/* Service provider Class for Android application
 * 
 * */
class ControllerServiceStatistic extends Controller 
{ 
	public function index()
	{
		$this->load->model('sale/statistic');
		$this->data['total_sale_year'] = $this->currency->format($this->model_sale_statistic->getTotalSalesByYear(date('Y')), $this->config->get('config_currency'));
		$this->data['total_sale_month'] = $this->currency->format($this->model_sale_statistic->getTotalSalesByMonth(date('Y'), date('n')), $this->config->get('config_currency'));
		$this->data['total_sale_day'] = $this->currency->format($this->model_sale_statistic->getTotalSalesByDay(date('Y'), date('n'), date('d')), $this->config->get('config_currency'));
		$this->data['total_order_day'] = $this->model_sale_statistic->getTotalOrdersByDay(date('Y'), date('n'), date('d')); 	
		$this->template = 'service/return_xml.tpl';
		$this->response->setOutput($this->render());
	}
}
?>