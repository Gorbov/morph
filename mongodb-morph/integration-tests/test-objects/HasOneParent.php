<?php
class HasOneParent extends Morph_Object
{

    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->addProperty(new Morph_Property_HasOne('Child', 'Child'));
        $this->addProperty(new Morph_Property_String('Name'));
    }

}