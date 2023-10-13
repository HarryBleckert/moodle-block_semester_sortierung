<?php
// This file is part of block_semester_sortierung for Moodle - http://moodle.org/
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
 * Version information
 *
 * @package   block_semester_sortierung
 * @author    Simeon Naydenov (moniNaydenov@gmail.com)
 * @author    Katarzyna Potocka (katarzyna.potocka@tuwien.ac.at)
 * @author    Harry Bleckert for ASH Berlin (harry@bleckert.com)
 * @copyright 2020 Academic Moodle Cooperation {@link http://www.academic-moodle-cooperation.org}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * 20230817: Disabled block_semester_sortierung_get_courses_events() in locallib.php. It was causing unkonwon prperty pdfexportfont exception in Dashboard
 /root/support/var_log/lighttpd/error.log                                                                                                     914187/1728K              51%
2023-08-15 12:33:36: (mod_fastcgi.c.450) FastCGI-stderr:PHP message: REST exception handler: Coding error detected, it must be fixed by a programmer: Unexpected property
pdfexportfont Debug:
2023-08-15 12:33:36: (mod_fastcgi.c.450) FastCGI-stderr:Error code: codingerror
2023-08-15 12:33:36: (mod_fastcgi.c.450) FastCGI-stderr:* line 141 of /lib/classes/external/exporter.php: coding_exception thrown
2023-08-15 12:33:36: (mod_fastcgi.c.450) FastCGI-stderr:* line 357 of /calendar/classes/external/event_exporter_base.php: call to core\external\exporter->export()
2023-08-15 12:33:36: (mod_fastcgi.c.450) FastCGI-stderr:* line 62 of /calendar/classes/external/event_exporter.php: call to core_calendar\external\event_exporter_base->ge
t_other_values()
2023-08-15 12:33:36: (mod_fastcgi.c.450) FastCGI-stderr:* line 121 of /lib/classes/external/exporter.php: call to core_calendar\external\event_exporter->get_other_values(
)
2023-08-15 12:33:36: (mod_fastcgi.c.450) FastCGI-stderr:* line 100 of /calendar/classes/external/events_exporter.php: call to core\external\exporter->export()
2023-08-15 12:33:36: (mod_fastcgi.c.450) FastCGI-stderr:* line ? of unknownfile: call to core_calendar\external\events_exporter->core_calendar\external\{closure}()
2023-08-15 12:33:36: (mod_fastcgi.c.450) FastCGI-stderr:* line 101 of /calendar/classes/external/events_exporter.php: call to array_map()
2023-08-15 12:33:36: (mod_fastcgi.c.450) FastCGI-stderr:* line 79 of /calendar/classes/external/events_same_course_exporter.php: call to core_calendar\external\events_exp
orter->get_other_values()...

 *
 */


defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2023082300;
$plugin->requires  = 2020061500;
$plugin->component = 'block_semester_sortierung';
$plugin->maturity  = MATURITY_BETA;
$plugin->release   = "v4.2.2";
