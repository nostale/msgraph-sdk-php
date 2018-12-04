<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResponseStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* ResponseStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ResponseStatus extends Entity
{

    /**
    * Gets the response
    *
    * @return ResponseType The response
    */
    public function getResponse()
    {
        if (array_key_exists("response", $this->_propDict)) {
            if (is_a($this->_propDict["response"], "Microsoft\Graph\Model\ResponseType")) {
                return $this->_propDict["response"];
            } else {
                $this->_propDict["response"] = new ResponseType($this->_propDict["response"]);
                return $this->_propDict["response"];
            }
        }
        return null;
    }

    /**
    * Sets the response
    *
    * @param ResponseType $val The value to assign to the response
    *
    * @return ResponseStatus The ResponseStatus
    */
    public function setResponse($val)
    {
        $this->_propDict["response"] = $val;
         return $this;
    }

    /**
    * Gets the time
    *
    * @return \DateTime The time
    */
    public function getTime()
    {
        if (array_key_exists("time", $this->_propDict)) {
            if (is_a($this->_propDict["time"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["time"];
            } else {
                $this->_propDict["time"] = new \DateTime($this->_propDict["time"]);
                return $this->_propDict["time"];
            }
        }
        return null;
    }

    /**
    * Sets the time
    *
    * @param \DateTime $val The value to assign to the time
    *
    * @return ResponseStatus The ResponseStatus
    */
    public function setTime($val)
    {
        $this->_propDict["time"] = $val;
         return $this;
    }
}
