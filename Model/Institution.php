<?php
App::uses('AppModel', 'Model');
/**
 * Institution Model
 *
 * @property DirectorUser $DirectorUser
 * @property ManagerUser $ManagerUser
 * @property ContactUser $ContactUser
 * @property User $User
 */
class Institution extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
    var $belongsTo = array(
        'DirectorUser' => array(
            'className' => 'User',
            'foreignKey' => 'director_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'ManagerUser' => array(
            'className' => 'User',
            'foreignKey' => 'manager_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'ContactUser' => array(
            'className' => 'User',
            'foreignKey' => 'contact_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
    );
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'users_institutions',
			'foreignKey' => 'institution_id',
			'associationForeignKey' => 'user_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
