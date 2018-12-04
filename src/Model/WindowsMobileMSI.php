<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsMobileMSI File
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
* WindowsMobileMSI class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsMobileMSI extends MobileLobApp
{
    /**
    * Gets the commandLine
    *
    * @return string The commandLine
    */
    public function getCommandLine()
    {
        if (array_key_exists("commandLine", $this->_propDict)) {
            return $this->_propDict["commandLine"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the commandLine
    *
    * @param string $val The commandLine
    *
    * @return WindowsMobileMSI
    */
    public function setCommandLine($val)
    {
        $this->_propDict["commandLine"] = $val;
        return $this;
    }
    
    /**
    * Gets the productCode
    *
    * @return string The productCode
    */
    public function getProductCode()
    {
        if (array_key_exists("productCode", $this->_propDict)) {
            return $this->_propDict["productCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productCode
    *
    * @param string $val The productCode
    *
    * @return WindowsMobileMSI
    */
    public function setProductCode($val)
    {
        $this->_propDict["productCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the productVersion
    *
    * @return string The productVersion
    */
    public function getProductVersion()
    {
        if (array_key_exists("productVersion", $this->_propDict)) {
            return $this->_propDict["productVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productVersion
    *
    * @param string $val The productVersion
    *
    * @return WindowsMobileMSI
    */
    public function setProductVersion($val)
    {
        $this->_propDict["productVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the ignoreVersionDetection
    *
    * @return bool The ignoreVersionDetection
    */
    public function getIgnoreVersionDetection()
    {
        if (array_key_exists("ignoreVersionDetection", $this->_propDict)) {
            return $this->_propDict["ignoreVersionDetection"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ignoreVersionDetection
    *
    * @param bool $val The ignoreVersionDetection
    *
    * @return WindowsMobileMSI
    */
    public function setIgnoreVersionDetection($val)
    {
        $this->_propDict["ignoreVersionDetection"] = boolval($val);
        return $this;
    }
    
}