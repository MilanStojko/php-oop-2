<?php   

    class Sala4d extends Sala
    {
        private $vibration ;
        private $smoke ;
        private $water ;


        public function __construct($_name, $_capacity, $_id, $_screen, $_vibration = true ,$_smoke = false,$_water= false){
            parent::__construct($_name, $_capacity, $_id, $_screen );
            $this->vibration = $_vibration;
            $this->smoke = $_smoke;
            $this->water = $_water;

        }

        public function setVibration($_vibration){
            $this->vibration = $_vibration;
        }

        public function setSmoke($_Smoke){
            $this->smoke = $_Smoke;
        }

        public function setWater($_Water){
            $this->water = $_Water;
        }

        public function getVibration(){
            return $this->vibration;
        }

        public function getSmoke(){
            return $this->smoke;
        }

        public function getWater(){
            return $this->water;
        }
    }
    