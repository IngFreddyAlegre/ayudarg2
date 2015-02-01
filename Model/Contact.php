<?php
App::uses('AppModel', 'Model');
/**
 * Contact Model
 *
 * @property Respondent $Respondent
 * @property EntityType $EntityType
 * @property Institution $Institution
 */
class Contact extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

    var $actsAs = array(
        'Containable' => array(),
        'Eav' => array(
            'type' => 'entity',
            'virtualKeys' => array(
                'key' => array(
                    'Respondent'
                )
            ),
            'virtualFieldType' => 'cake'
        )
    );

    /**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
//		'Respondent' => array(
//			'className' => 'Respondent',
//			'foreignKey' => 'respondent_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		),
		'EntityType' => array(
			'className' => 'EntityType',
			'foreignKey' => 'entity_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Institution' => array(
			'className' => 'Institution',
			'foreignKey' => 'institution_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
