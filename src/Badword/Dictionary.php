<?php

/*
 * This file is part of the Badwords PHP package.
 *
 * (c) Stephen Melrose <me@stephenmelrose.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Badword;

/**
 * Dictionary gets a list of bad words.
 *
 * @author Stephen Melrose <me@stephenmelrose.co.uk>
 */
interface Dictionary
{
    /**
     * Gets the unique ID for the Dictionary.
     *
     * @return string
     */
    public function getId();

    /**
     * Gets the level of risk associated with the bad words. The greater
     * the number, the greater the risk. 0 is considered no risk.
     *
     * For example, a Dictionary containing bad words that only require
     * moderation could have a risk level of 1. Where as a Dictionary
     * containing bad words that should be instantly rejected could have
     * a risk level of 2. The scale past 0 is completely arbitrary.
     *
     * @return integer
     */
    public function getRiskLevel();
    
    /**
     * Gets the Words.
     *
     * @return array Array of Word objects.
     */
    public function getWords();
}