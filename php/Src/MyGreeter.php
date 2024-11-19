<?php
namespace Src;

class MyGreeter {

    private $exec_time = null;

    public function __construct($exec_time = null)
    {
        if (is_null($exec_time)) {
            $this->exec_time = intval(date("H"));
        } else {
            $this->exec_time = intval($exec_time);
        }
    }

    /**
     * 根据当前时间确定问候语
     */
    public function greeting() : string {
        /**
         * Between 6AM and 12AM
         */
        if ($this->exec_time >= 6 && $this->exec_time < 12) {
            return $this->morning();
        }
        /**
         * Between 12AM and 6PM
         */
        if ($this->exec_time >= 12 && $this->exec_time < 18) {
            return $this->afternoon();
        }
        /**
         * Between 6PM and 6AM
         */
        if (($this->exec_time >= 18 && $this->exec_time < 24) 
        || ($this->exec_time >= 0 && $this->exec_time < 6)) {
            return $this->evening();
        }
        
        return "";
    }

    private function morning() : string {
        return "Good morning";
    }

    private function afternoon() : string {
        return "Good afternoon";
    }

    private function evening() : string {
        return "Good evening";
    }
}
