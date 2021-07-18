<?php
class NetworkEntity{
    
    protected $metadata;

    public function __construct(array $metadata){
        $this->metadata = $metadata;
    }
}