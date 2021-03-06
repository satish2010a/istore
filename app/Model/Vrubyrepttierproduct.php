<?php
App::uses('AppModel', 'Model');
/**
 * Vrubyrepttierproduct Model
 *
 * @property Station $Station
 */
class Vrubyrepttierproduct extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
