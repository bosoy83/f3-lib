<?php 
namespace Dsc\Jig;

/**
 * Mostly just adds the ability to get/set fields in Jig objects using dot notation
 * 
 * @author Rafael Diaz-Tushman
 *
 */
class Mapper extends \Db\Jig\Mapper
{
    /**
     *	Return TRUE if field is defined
     *	@return bool
     *	@param $key string
     **/
    function exists($key) {
        if ($key == 'id') {
            $key = '_id';
        }
        return \Dsc\ArrayHelper::exists( $this->document, $key );
    }
    
    /**
     *	Assign value to field
     *	@return scalar|FALSE
     *	@param $key string
     *	@param $val scalar
     **/
    function set($key,$val) {
        if ($key == 'id') {
            $key = '_id';
        }        
        return \Dsc\ArrayHelper::set( $this->document, $key, $val );
    }
    
    /**
     *	Retrieve value of field
     *	@return scalar|FALSE
     *	@param $key string
     **/
    function get($key, $default=null) {
        if ($key == 'id') {
            $key = '_id';
        }
        return \Dsc\ArrayHelper::get( $this->document, $key, $default );
    }
    
    /**
     *	Delete field
     *	@return NULL
     *	@param $key string
     **/
    function clear($key) {
        if ($key == 'id') {
            $key = '_id';
        }
        \Dsc\ArrayHelper::clear( $this->document, $key );
    }
}