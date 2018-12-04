<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScoredEmailAddress File
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
* ScoredEmailAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ScoredEmailAddress extends Entity
{
    /**
    * Gets the address
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the address
    *
    * @param string $val The value of the address
    *
    * @return ScoredEmailAddress
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the relevanceScore
    *
    * @return float The relevanceScore
    */
    public function getRelevanceScore()
    {
        if (array_key_exists("relevanceScore", $this->_propDict)) {
            return $this->_propDict["relevanceScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the relevanceScore
    *
    * @param float $val The value of the relevanceScore
    *
    * @return ScoredEmailAddress
    */
    public function setRelevanceScore($val)
    {
        $this->_propDict["relevanceScore"] = $val;
        return $this;
    }

    /**
    * Gets the selectionLikelihood
    *
    * @return SelectionLikelihoodInfo The selectionLikelihood
    */
    public function getSelectionLikelihood()
    {
        if (array_key_exists("selectionLikelihood", $this->_propDict)) {
            if (is_a($this->_propDict["selectionLikelihood"], "Microsoft\Graph\Model\SelectionLikelihoodInfo")) {
                return $this->_propDict["selectionLikelihood"];
            } else {
                $this->_propDict["selectionLikelihood"] = new SelectionLikelihoodInfo($this->_propDict["selectionLikelihood"]);
                return $this->_propDict["selectionLikelihood"];
            }
        }
        return null;
    }

    /**
    * Sets the selectionLikelihood
    *
    * @param SelectionLikelihoodInfo $val The value to assign to the selectionLikelihood
    *
    * @return ScoredEmailAddress The ScoredEmailAddress
    */
    public function setSelectionLikelihood($val)
    {
        $this->_propDict["selectionLikelihood"] = $val;
         return $this;
    }
    /**
    * Gets the ItemId
    *
    * @return string The ItemId
    */
    public function getItemId()
    {
        if (array_key_exists("itemId", $this->_propDict)) {
            return $this->_propDict["itemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ItemId
    *
    * @param string $val The value of the ItemId
    *
    * @return ScoredEmailAddress
    */
    public function setItemId($val)
    {
        $this->_propDict["itemId"] = $val;
        return $this;
    }
}
