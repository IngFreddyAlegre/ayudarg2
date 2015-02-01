<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Role $Role
 * @property Institution $Institution
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';



/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Institution' => array(
			'className' => 'Institution',
			'joinTable' => 'users_institutions',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'institution_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

    var $hasMany = array(
        'InstitutionDirector' => array(
            'className' => 'Institution',
            'foreignKey' => 'director_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'InstitutionManager' => array(
            'className' => 'Institution',
            'foreignKey' => 'manager_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'InstitutionContact' => array(
            'className' => 'Institution',
            'foreignKey' => 'contact_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
    );

}
