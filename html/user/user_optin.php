<?php
// This file is part of BOINC.
// http://boinc.berkeley.edu
// Copyright (C) 2008 University of California
//
// BOINC is free software; you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License
// as published by the Free Software Foundation,
// either version 3 of the License, or (at your option) any later version.
//
// BOINC is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with BOINC.  If not, see <http://www.gnu.org/licenses/>.

// User opt-in consent form, used for existing users who need to give
// consent.

require_once("../inc/db.inc");
require_once("../inc/util.inc");
require_once("../inc/account.inc");

check_get_args(array("next_url"));

$next_url = get_str('next_url', true);
$next_url = urldecode($next_url);
$next_url = sanitize_local_url($next_url);
$next_url = urlencode($next_url);

$u = "user_optin.php?next_url=".$next_url;
redirect_to_secure_url($u);

page_head(tra("Opt-in to our Terms of Use."));

user_optin_form($next_url);

page_tail();
?>