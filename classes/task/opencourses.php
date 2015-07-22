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
 * A scheduled task for RRU Open Courses cron.
 *
 * @package   rru_opencourses
 * @category  task
 * @copyright 2015 Royal Roads University
 * @author    Gerald Albion
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace local_rruopencourses\task;

require_once(dirname(dirname(dirname(__FILE__))).'/lib.php');

class opencourses extends \core\task\scheduled_task {
    /**
     * Get a descriptive name for this task (shown to admins).
     *
     * @return string
     */
    public function get_name() {
        return get_string('crontitle', 'local_rruopencourses');
    }

    /**
     * Run runopencourses cron.
     */
    public function execute() {
        rruopencourses_run();
    }
}
