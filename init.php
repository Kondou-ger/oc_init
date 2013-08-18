<!DOCTYPE html>
<html>
<body>
<form>
<input type="radio" name="action" value="insert">Insert<br>
<input type="radio" name="action" value="remove">Remove<br>
<input type="submit">
</form>
</body>
</html>
<?php
require_once 'lib/base.php';

if ($_GET['action'] === "insert") {
	insertTestData();
} elseif ($_GET['action'] === "remove") {
	removeTestData();
}

function insertTestData() {
	\OC_User::createUser("Youmu", "123456");
	\OC_Preferences::setValue("Youmu", "settings", "email", "youmu@ts.unde.re");

	\OC_User::createUser("Yuyuko", "123456");
	\OC_Preferences::setValue("Yukari", "settings", "email", "yuyuko@ts.unde.re");

	\OC_User::createUser("Mr Judge", "123456");
	\OC_Preferences::setValue("Mr Judge", "settings", "email", "mr-judge@ts.unde.re");

	\OC_User::createUser("Alice", "123456");
	\OC_Preferences::setValue("Alice", "settings", "email", "alice@ts.unde.re");

	\OC_User::createUser("Reisen", "123456");
	\OC_Preferences::setValue("Reisen", "settings", "email", "reisen@ts.unde.re");
}

function removeTestData() {
	\OC_User::deleteUser("Youmu");
	\OC_User::deleteUser("Yuyuko");
	\OC_User::deleteUser("Mr Judge");
	\OC_User::deleteUser("Alice");
	\OC_User::deleteuser("Reisen");
}
