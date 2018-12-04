<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InferenceClassificationOverride File
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
* InferenceClassificationOverride class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class InferenceClassificationOverride extends Entity
{
    /**
    * Gets the classifyAs
    *
    * @return InferenceClassificationType The classifyAs
    */
    public function getClassifyAs()
    {
        if (array_key_exists("classifyAs", $this->_propDict)) {
            if (is_a($this->_propDict["classifyAs"], "Microsoft\Graph\Model\InferenceClassificationType")) {
                return $this->_propDict["classifyAs"];
            } else {
                $this->_propDict["classifyAs"] = new InferenceClassificationType($this->_propDict["classifyAs"]);
                return $this->_propDict["classifyAs"];
            }
        }
        return null;
    }
    
    /**
    * Sets the classifyAs
    *
    * @param InferenceClassificationType $val The classifyAs
    *
    * @return InferenceClassificationOverride
    */
    public function setClassifyAs($val)
    {
        $this->_propDict["classifyAs"] = $val;
        return $this;
    }
    
    /**
    * Gets the senderEmailAddress
    *
    * @return EmailAddress The senderEmailAddress
    */
    public function getSenderEmailAddress()
    {
        if (array_key_exists("senderEmailAddress", $this->_propDict)) {
            if (is_a($this->_propDict["senderEmailAddress"], "Microsoft\Graph\Model\EmailAddress")) {
                return $this->_propDict["senderEmailAddress"];
            } else {
                $this->_propDict["senderEmailAddress"] = new EmailAddress($this->_propDict["senderEmailAddress"]);
                return $this->_propDict["senderEmailAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the senderEmailAddress
    *
    * @param EmailAddress $val The senderEmailAddress
    *
    * @return InferenceClassificationOverride
    */
    public function setSenderEmailAddress($val)
    {
        $this->_propDict["senderEmailAddress"] = $val;
        return $this;
    }
    
}