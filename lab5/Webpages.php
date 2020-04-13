<?php
include_once "Page.php";

$webpage1 = new Page;
$webpage1->addHeader("Webpage number 1");
$webpage1->addContent("Content 1");
$webpage1->addFooter("Footer 1");

print "<br>";

$webpage2 = new Page;
$webpage2->addHeader("Webpage number 2");
$webpage2->addContent("Content 2");
$webpage2->addFooter("Footer 2");
