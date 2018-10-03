<?php
	/*
	 * el indice de array corresponde
	 * al numero de día de la semanana
	 * retornado al invocar la funcion nativa
	 *
	 * date("w")
	 * [
	 * 	0 => domingo
	 * 	1 => lunes
	 * 	2 => martes
	 * 	3 => miercoles
	 * 	4 => jeuves
	 * 	5 => viernes
	 * 	6 => sabado
	 * ]
	 *
	 * $hoy = getdate();
	 * Array
	 * (
	 * 	[seconds] => 40
	 * 	[minutes] => 58
	 * 	[hours]   => 21
	 * 	[mday]    => 17
	 * 	[wday]    => 2
	 * 	[mon]     => 6
	 * 	[year]    => 2003
	 * 	[yday]    => 167
	 * 	[weekday] => Tuesday
	 * 	[month]   => June
	 * 	[0]       => 1055901520
	 * )
	 *
	 */
	$schedules = array();

	$schedules[0] = array();

	$schedules[1] = array(
		array(
			'opening' => '13:00:00',
			'closing' => '20:00:00',
		),
	);

	$schedules[2] = array();

	$schedules[3] = array(
		array(
			'opening' => '13:00:00',
			'closing' => '20:00:00',
		),
	);

	$schedules[4] = array();

	$schedules[5] = array(
		array(
			'opening' => '09:00:00',
			'closing' => '15:00:00',
		),
	);

	$schedules[6] = array();


	$wg_phone['phone'] = '541147089438';
	$wg_phone['label'] = '(011) 4708-9438';

	$wg_celular['phone'] = '541136770680';
	$wg_celular['label'] = '(011) 15 3677-0680';


	/*
	 *
	 */
	function is_open_local() {
		GLOBAL $schedules;

		$to_return = false;

		$now = getdate();
		// var_dump($schedules[$now['wday']]);

		$day_schedules = $schedules[$now['wday']-1];


		if(is_array($day_schedules) AND count($day_schedules) > 0)
		{
			foreach ($day_schedules as $item_schedule)
			{
				if (
					true
					AND strtotime($item_schedule['opening']) <= strtotime($now["hours"].':'. $now["minutes"].':00')
					AND strtotime($now["hours"].':'. $now["minutes"].':00') <= strtotime($item_schedule['closing'])
				)
				{
					$to_return = true;
				}
			}
		}
		return $to_return;
	}

// var_dump(is_open_local());

if(is_open_local() OR true)
{

	include(DIR_ROOT.'/widget_callme/widget_callme.php');
	include(DIR_ROOT.'/widget_whatsapp/widget_whatsapp.php');

}
else
{
    ?>

    <?php
}
