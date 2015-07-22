<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Definition of RRU Open Courses scheduled task(s).
 *
 * @package   rru_opencourses
 * @category  task
 * @copyright 2015 Royal Roads University
 * @author    Gerald Albion
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$tasks = array(
    array(
        'classname' => 'local_rruopencourses\task\opencourses',
        'blocking'  => 0,     // Non-blocking.
        'minute'    => '30',  // 03:30 daily.
        'hour'      => '3',
        'day'       => '*',
        'dayofweek' => '*',
        'month'     => '*'
    )
);