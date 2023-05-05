<?php


$Infoarray = array(
			'name' => 'Ariful Asfake Sunny',
			'roll' => '56',
			'email' => 'ariyu $ @gmai.cov'		
			);

$filters = array(
				'name' => array(
						'filter' => FILTER_SANITIZE_STRING,
						'flags' => FILTER_FLAG_STRIP_HIGH
				),

				'roll' => array(
					'filter' => FILTER_VALIDATE_INT,
					'options' => array(
						'min_range' => 1,
						'max_range' => 1000
					)
				),

				'email' => FILTER_SANITIZE_EMAIL	
			);


echo "<pre>";
print_r(filter_var_array($Infoarray, $filters));
echo "</pre>";


?>