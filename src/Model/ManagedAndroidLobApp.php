<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAndroidLobApp File
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
* ManagedAndroidLobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagedAndroidLobApp extends ManagedMobileLobApp
{
    /**
    * Gets the packageId
    *
    * @return string The packageId
    */
    public function getPackageId()
    {
        if (array_key_exists("packageId", $this->_propDict)) {
            return $this->_propDict["packageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the packageId
    *
    * @param string $val The packageId
    *
    * @return ManagedAndroidLobApp
    */
    public function setPackageId($val)
    {
        $this->_propDict["packageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumSupportedOperatingSystem
    *
    * @return AndroidMinimumOperatingSystem The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "Microsoft\Graph\Model\AndroidMinimumOperatingSystem")) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new AndroidMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the minimumSupportedOperatingSystem
    *
    * @param AndroidMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return ManagedAndroidLobApp
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the versionName
    *
    * @return string The versionName
    */
    public function getVersionName()
    {
        if (array_key_exists("versionName", $this->_propDict)) {
            return $this->_propDict["versionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the versionName
    *
    * @param string $val The versionName
    *
    * @return ManagedAndroidLobApp
    */
    public function setVersionName($val)
    {
        $this->_propDict["versionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the versionCode
    *
    * @return string The versionCode
    */
    public function getVersionCode()
    {
        if (array_key_exists("versionCode", $this->_propDict)) {
            return $this->_propDict["versionCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the versionCode
    *
    * @param string $val The versionCode
    *
    * @return ManagedAndroidLobApp
    */
    public function setVersionCode($val)
    {
        $this->_propDict["versionCode"] = $val;
        return $this;
    }
    
}