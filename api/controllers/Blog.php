<?php

class mvControllerBlog extends modRestController{
    public $classKey = 'modResource';
    public $defaultSortField = 'id';
    public $defaultSortDirection = 'ASC';
    public $parent = '1';

    public function read($id) {
        if (empty($id)) {
            return $this->failure($this->modx->lexicon('rest.err_field_ns',array(
                'field' => $this->primaryKeyField,
            )));
        }
        /** @var xPDOObject $object */
        $c = $this->getPrimaryKeyCriteria($id);

        // Добавил небольшие ограничения
        $query = $this->modx->newQuery($this->classKey);
        $query->where(['parent:IN' => $this->getParents()]);
        $query->where($c);

        $this->object = $this->modx->getObject($this->classKey,$query);
        if (empty($this->object)) {
            return $this->failure($this->modx->lexicon('rest.err_obj_nf',array(
                'class_key' => $this->classKey,
            )));
        }
        $objectArray = $this->object->toArray();

        $afterRead = $this->afterRead($objectArray);
        if ($afterRead !== true && $afterRead !== null) {
            return $this->failure($afterRead === false ? $this->errorMessage : $afterRead);
        }

        return $this->success('',$objectArray);
    }

    public function post() {
        return $this->failure('Метод не  разрешен');
    }


    public function put() {
        return $this->failure('Метод не  разрешен');
    }


    public function delete() {
        return $this->failure('Метод не  разрешен');
    }

    /** 
     * 
     * @return array 
     * 
     * */
    public function getParents(){
       
        $result = $this->modx->getChildIds($this->parent);
        $result[] = $this->parent;
        return $result;

    }


    public function prepareListQueryBeforeCount(xPDOQuery $c) {
        
       $c = parent::prepareListQueryBeforeCount($c);
       $c->where(['parent:IN' => $this->getParents()]);
       return $c;

    }


}