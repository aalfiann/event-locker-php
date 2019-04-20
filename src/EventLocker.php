<?php
namespace aalfiann;
/**
 * EventLocker class
 * 
 * @package    EventLocker
 * @author     M ABD AZIZ ALFIAN <github.com/aalfiann>
 * @copyright  Copyright (c) 2019 M ABD AZIZ ALFIAN
 * @license    https://github.com/aalfiann/event-locker-php/blob/master/LICENSE.md  MIT License
 */
class EventLocker {

    /**
     * Filename to identify the locker
     */
    public $filename;

    /**
     * Internal process locking
     */
    private $_lock;

    /**
     * Construct
     * 
     * @param string $filename 
     */
    public function __construct($filename='') {
        $this->filename = (!empty($filename)?$filename:'locker.lock');
    }

    /**
     * Locks relevant file
     */
    public function lock() {
        touch($this->filename);
        $this->_lock = fopen($this->filename, 'r');
        flock($this->_lock, LOCK_EX);
    }

    /**
     * Unlock above file
     */
    public function unlock() {
        flock($this->_lock, LOCK_UN);
    }

}
