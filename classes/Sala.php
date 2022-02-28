<?php
    class Sala
    {
        protected $name;
        protected $capacity;
        protected $screen;
        protected $id;
        protected $is_3d = false;



        public function __construct($_name, $_capacity, $_id, $_screen ){
            $this->name = $_name;
            $this->capacity = $_capacity;
            $this->id = $_id;
            $this->screen = $_screen;
        }

        public function getInfo(){
            return "{$this->name}<br>"."{$this->capacity}<br>"."{$this->screen}<br>"."{$this->id}";
        }

        public function set3d($_is_3d){
            $this->is_3d = $_is_3d;
        }
    }
