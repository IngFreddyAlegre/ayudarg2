<?php
App::uses('AppModel', 'Model');
/**
 * Respondent Model
 *
 * @property Contact $Contact
 */
class Respondent extends AppModel {

    public $name = 'Respondent';
    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';

    public $virtualFields = array(
        'name' => 'CONCAT(Respondent.firstname," ",Respondent.middlename," ",Respondent.lastname," - ",Respondent.type," ",Respondent.number)'
    );

//    var $actsAs = array(
//        'Containable' => array(),
//        'Eav' => array(
//            'type' => 'entity',
//            'virtualKeys' => array(
//                'key' => array(
//                    'Respondent'
//                )
//            ),
//            'virtualFieldType' => 'cake'
//        )
//    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

///**
// * hasMany associations
// *
// * @var array
// */
//	public $hasMany = array(
//		'Contact' => array(
//			'className' => 'Contact',
//			'foreignKey' => 'respondent_id',
//			'dependent' => false,
//			'conditions' => '',
//			'fields' => '',
//			'order' => '',
//			'limit' => '',
//			'offset' => '',
//			'exclusive' => '',
//			'finderQuery' => '',
//			'counterQuery' => ''
//		)
//	);

//    public function save($data = null, $validate = true, $fieldList = array())
//    {
//        $data['Respondent']['id'] = String::uuid();
//        return parent::save($data, $validate, $fieldList); // TODO: Change the autogenerated stub
//    }


}
