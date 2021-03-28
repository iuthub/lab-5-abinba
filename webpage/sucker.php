<?php
$name = $_POST['name'];
$section = $_POST['section'];
$credit_card = $_POST['credit_card']
$credit_type = $_POST['credit_type']

$validated = true;

if (empty($name) || empty($section) || empty($credit_card) || empty($credit_type)) {
    $validated = false;
}

$filename = 'sucker.txt'

if ($validated) {
    $content = file_get_contents($filename);
    $content .= '\n'.$name.$section.$credit_card.$credit_type;
    file_put_contents($filename, $content);
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php if($validated) { ?>
	<head>
		<title>Thanks Sucker!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks Sucker</h1>

		<p>
			Your information has been recorded.
		</p>

        <dl>
            <dt>Name</dt>
            <dd>
                <?= $name ?>
            </dd>

            <dt>Section</dt>
            <dd>
                <?= $section ?>
            </dd>

            <dt>Credit Card</dt>
            <dd>
                <?= $credit_card ?>
            </dd>

            <dt>Credit Card Type</dt>
            <dd>
                <?= $credit_type ?>
            </dd>
        </dl>

	</body>
<?php } else { ?>
    <head>
		<title>Sorry Sucker!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<p>
			You didn't fill out the form completely. <a href="./buyagrade.html">Try again?</a>
		</p>
	</body>
<?php } ?>
</html>