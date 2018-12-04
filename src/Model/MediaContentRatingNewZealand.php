<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaContentRatingNewZealand File
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
* MediaContentRatingNewZealand class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MediaContentRatingNewZealand extends Entity
{

    /**
    * Gets the movieRating
    *
    * @return RatingNewZealandMoviesType The movieRating
    */
    public function getMovieRating()
    {
        if (array_key_exists("movieRating", $this->_propDict)) {
            if (is_a($this->_propDict["movieRating"], "Microsoft\Graph\Model\RatingNewZealandMoviesType")) {
                return $this->_propDict["movieRating"];
            } else {
                $this->_propDict["movieRating"] = new RatingNewZealandMoviesType($this->_propDict["movieRating"]);
                return $this->_propDict["movieRating"];
            }
        }
        return null;
    }

    /**
    * Sets the movieRating
    *
    * @param RatingNewZealandMoviesType $val The value to assign to the movieRating
    *
    * @return MediaContentRatingNewZealand The MediaContentRatingNewZealand
    */
    public function setMovieRating($val)
    {
        $this->_propDict["movieRating"] = $val;
         return $this;
    }

    /**
    * Gets the tvRating
    *
    * @return RatingNewZealandTelevisionType The tvRating
    */
    public function getTvRating()
    {
        if (array_key_exists("tvRating", $this->_propDict)) {
            if (is_a($this->_propDict["tvRating"], "Microsoft\Graph\Model\RatingNewZealandTelevisionType")) {
                return $this->_propDict["tvRating"];
            } else {
                $this->_propDict["tvRating"] = new RatingNewZealandTelevisionType($this->_propDict["tvRating"]);
                return $this->_propDict["tvRating"];
            }
        }
        return null;
    }

    /**
    * Sets the tvRating
    *
    * @param RatingNewZealandTelevisionType $val The value to assign to the tvRating
    *
    * @return MediaContentRatingNewZealand The MediaContentRatingNewZealand
    */
    public function setTvRating($val)
    {
        $this->_propDict["tvRating"] = $val;
         return $this;
    }
}
