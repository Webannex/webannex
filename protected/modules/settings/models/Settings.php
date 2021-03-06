<?php

class Settings extends CActiveRecord {

	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{settings}}';
	}

	public function rules() {

		return array(
			['name, base_key, element, module_id, visible, view_in_grid', 'required'],
			['comment, value', 'safe'],
			['base_key', 'unique'],
			['name, base_key', 'length', 'max' => 255],
			['id, name, value, base_key, comment, element, module_id', 'safe', 'on' => 'search'],
		);
	}

	public function relations() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => '№',
			'name' => Yii::t('admin', 'Name'),
			'value' => Yii::t('admin', 'Value'),
			'base_key' => Yii::t('admin', 'System key'),
			'module_id' => Yii::t('admin', 'Module Name'),
			'element' => Yii::t('admin', 'Value field element type'),
			'visible' => Yii::t('admin', 'The role of the user who can see this setting'),
			'comment' => Yii::t('admin', 'Comment'),
			'view_in_grid'=>Yii::t('admin', 'View value in grid'),
		);
	}

	public function behaviors() {
		return array(
				/* 'cacheBehavior' =>array(
				  'class' => 'application.components.behavior.CacheBehavior',
				  'column'=>'base_key',
				  ),
				 * 
				 */
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('module_id', $this->module_id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('value', $this->value, true);
		$criteria->compare('base_key', $this->base_key, true);
		$criteria->compare('element', $this->element, true);
		$criteria->compare('comment', $this->comment, true);

		if (!Yii::app()->user->checkAccess("developer"))
			$criteria->compare('visible', 'admin', true);

		return new CActiveDataProvider(get_class($this), array(
			'pagination' => array(
				'pageSize' => Yii::app()->user->getState('pageSize', Yii::app()->params['defaultPageSize']),
			),
			'sort' => array(
				'defaultOrder' => 'module_id, id',
			),
			'criteria' => $criteria,
		));
	}

	public static function getVal($name) {
		$settings = System::loadModel('Settings', null, $name, 'base_key');
		return Yii::t('admin', $settings->value);
	}

}
