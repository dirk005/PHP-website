<?php

include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table($db);
//get a PDOStatement object to get access to all entries
$allEntries = $entryTable -> getAllEntries();
//test that you can get the first row as a StdClass object


include_once "admin/views/entries-html.php";
