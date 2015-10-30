<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 8/20/15
 * Time: 11:56 AM
 *
 *
Given a table elements with the following structure:

create table elements (
v integer not null
);
write an SQL query that returns the sum of the numbers in column v.

For example, given:

v
---
2
10
20
10
your query should return 42.
 */

$sql = "select sum(v) from elements";

