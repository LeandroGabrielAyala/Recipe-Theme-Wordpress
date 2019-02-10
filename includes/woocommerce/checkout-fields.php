<?php

function lg_wc_billing_fields( $fields ){
//	echo '<pre>';
//	print_r($fields);
//	echo '</pre>';

	unset( $fields['billing_company'] );

	return $fields;
}

function lg_wc_shipping_fields($fields){
//	echo '<pre>';
//	print_r($fields);
//	echo '</pre>';

	unset( $fields['shipping_company'] );

	return $fields;
}