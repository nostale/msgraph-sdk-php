<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosLobApp File
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
* IosLobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IosLobApp extends MobileLobApp
{
    /**
    * Gets the bundleId
    *
    * @return string The bundleId
    */
    public function getBundleId()
    {
        if (array_key_exists("bundleId", $this->_propDict)) {
            return $this->_propDict["bundleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bundleId
    *
    * @param string $val The bundleId
    *
    * @return IosLobApp
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicableDeviceType
    *
    * @return IosDeviceType The applicableDeviceType
    */
    public function getApplicableDeviceType()
    {
        if (array_key_exists("applicableDeviceType", $this->_propDict)) {
            if (is_a($this->_propDict["applicableDeviceType"], "Microsoft\Graph\Model\IosDeviceType")) {
                return $this->_propDict["applicableDeviceType"];
            } else {
                $this->_propDict["applicableDeviceType"] = new IosDeviceType($this->_propDict["applicableDeviceType"]);
                return $this->_propDict["applicableDeviceType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicableDeviceType
    *
    * @param IosDeviceType $val The applicableDeviceType
    *
    * @return IosLobApp
    */
    public function setApplicableDeviceType($val)
    {
        $this->_propDict["applicableDeviceType"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumSupportedOperatingSystem
    *
    * @return IosMinimumOperatingSystem The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "Microsoft\Graph\Model\IosMinimumOperatingSystem")) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new IosMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the minimumSupportedOperatingSystem
    *
    * @param IosMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return IosLobApp
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return IosLobApp
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the versionNumber
    *
    * @return string The versionNumber
    */
    public function getVersionNumber()
    {
        if (array_key_exists("versionNumber", $this->_propDict)) {
            return $this->_propDict["versionNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the versionNumber
    *
    * @param string $val The versionNumber
    *
    * @return IosLobApp
    */
    public function setVersionNumber($val)
    {
        $this->_propDict["versionNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the buildNumber
    *
    * @return string The buildNumber
    */
    public function getBuildNumber()
    {
        if (array_key_exists("buildNumber", $this->_propDict)) {
            return $this->_propDict["buildNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the buildNumber
    *
    * @param string $val The buildNumber
    *
    * @return IosLobApp
    */
    public function setBuildNumber($val)
    {
        $this->_propDict["buildNumber"] = $val;
        return $this;
    }
    
}