<?php namespace AdamWathan\Facktory\Relationship;

class HasOne extends DependentRelationship
{
    public function build()
    {
        return $this->factory->build($this->attributes);
    }

    public function create($instance)
    {
        $this->attributes[$this->getForeignKey()] = $instance->getKey();
        return $this->factory->create($this->attributes);
    }
}
