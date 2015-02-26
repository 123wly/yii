<?php
namespace app\models;


use yii\base\Model;

/**
 * Class EntryForm
 * @package app\models
 */
class EntryForm extends Model
{
    public $name;
    public $email;
    private $_nihao;

    public function rules($aa)
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }

    /**
     * @return mixed
     */
    public function getNihao()
    {
        return $this->_nihao;
    }

    /**
     * @param mixed $nihao
     */
    public function setNihao($nihao)
    {
        $this->_nihao = $nihao;
    }




}

