<?php
require_once 'NetworkEntity.php';

 class Toot extends NetworkEntity
 
 {
    protected int $id;
    protected string $content;

   public function __construct(int $id, string $content, array $metadata)
   {
       $this->$id = $id;
       $this->$content = $content;
       parent::__construct($metadata);
   }

   protected function retoot(){
       $this->meta['retoots']++;
   }
   protected function favourite(){
    $this->meta['favourite']++;
}

}