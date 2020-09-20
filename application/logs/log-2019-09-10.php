<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-10 00:41:43 --> 404 Page Not Found: admin/Images/dashboard
ERROR - 2019-09-10 00:42:44 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 00:42:44 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 00:42:44 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 00:42:44 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 00:42:44 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 00:42:44 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 00:42:55 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 00:42:55 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 00:42:55 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 00:42:55 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 00:42:55 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 00:42:55 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 00:42:58 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 00:42:58 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 00:42:58 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 00:42:58 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 00:42:58 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 00:42:58 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 09:59:20 --> 404 Page Not Found: admin/Images/dashboard
ERROR - 2019-09-10 09:59:20 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-10 09:59:28 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 09:59:28 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 09:59:28 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 09:59:28 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 09:59:28 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 09:59:28 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 10:22:22 --> Query error: Table 'costestimator.cost_sheet_line_items' doesn't exist - Invalid query: SELECT *, CONCAT('AED ',(SELECT SUM(total_cost) FROM cost_sheet_line_items WHERE cat_id = cost_sheet_category.cat_id)) as sumTotalCost, CONCAT('AED ',(SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id)) as sumSellingCost FROM `cost_sheet_category` INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '60' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-10 10:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL)) as sumTotalCost, CONCAT('AED ',(SELECT SUM(selling_price) FROM cost_sheet' at line 1 - Invalid query: SELECT *, CONCAT('AED ',(SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.sub_cat_id NOT NULL)) as sumTotalCost, CONCAT('AED ',(SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.sub_cat_id NOT NULL)) as sumSellingCost FROM `cost_sheet_category` INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '60' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-10 11:05:23 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:05:23 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:05:23 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:05:23 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:05:23 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:05:23 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:05:27 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:05:27 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:05:27 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:05:27 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:05:27 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:05:27 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:05:45 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:05:45 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:05:45 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:05:45 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:05:45 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:05:45 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:06:12 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:06:12 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:06:12 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:06:12 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:06:12 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:06:12 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:06:42 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:06:42 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:06:42 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:06:42 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:06:42 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:06:42 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:06:50 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 11:06:50 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 11:08:27 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 11:08:45 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:08:45 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:08:45 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:08:45 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:08:45 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:08:45 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:28:54 --> 404 Page Not Found: admin/Images/dashboard
ERROR - 2019-09-10 11:28:56 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-10 11:29:01 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 11:29:45 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:29:45 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:29:45 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:29:45 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:29:45 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:29:45 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:29:51 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:29:51 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:29:51 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:29:51 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:29:51 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:29:51 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:30:04 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:30:04 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:30:04 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:30:04 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:30:04 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:30:04 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:30:23 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:30:23 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:30:23 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:30:23 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:30:23 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:30:23 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:31:52 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:31:52 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:31:52 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:31:52 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:31:52 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:31:52 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:37:02 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:37:02 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:37:02 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:37:02 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:37:02 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:37:02 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:37:06 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:37:06 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:37:06 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:37:06 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:37:06 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:37:06 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 11:37:32 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:37:32 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 11:37:32 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 11:37:32 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 11:37:32 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 11:37:32 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 12:04:49 --> Query error: Unknown column 'cE.sub_cat_id' in 'where clause' - Invalid query: select cE.id, cE.title, CONCAT('AED ',(SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.sub_cat_id)) as sumTotalCost, CONCAT('AED ',(SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.sub_cat_id)) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '61' AND cE.cat_id = '17'
ERROR - 2019-09-10 12:14:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'cost_sheet_category.cost_sheet_id = '61')) as sumSellingCost FROM `cost_sheet_ca' at line 1 - Invalid query: SELECT *, CONCAT('AED ',(SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_category.cost_sheet_id = '61')) as sumTotalCost, CONCAT('AED ',(SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id cost_sheet_category.cost_sheet_id = '61')) as sumSellingCost FROM `cost_sheet_category` INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '61' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-10 12:27:35 --> Query error: Table 'costestimator.cost_sheet_categorys' doesn't exist - Invalid query: SELECT *, CONCAT('AED ',(SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id)) as sumTotalCost, CONCAT('AED ',(SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id)) as sumSellingCost FROM `cost_sheet_categorys` INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '61' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-10 12:32:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND cost_sheet_line_item.cost_sheet_id = '61')) as sumSellingCost FROM `cost_she' at line 1 - Invalid query: SELECT *, CONCAT('AED ',(SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = '61')) as sumTotalCost, CONCAT('AED ',(SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND AND cost_sheet_line_item.cost_sheet_id = '61')) as sumSellingCost FROM `cost_sheet_categorys` INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '61' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-10 12:33:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND cost_sheet_line_item.cost_sheet_id = 61)) as sumSellingCost FROM `cost_sheet' at line 1 - Invalid query: SELECT *, CONCAT('AED ',(SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = 61)) as sumTotalCost, CONCAT('AED ',(SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND AND cost_sheet_line_item.cost_sheet_id = 61)) as sumSellingCost FROM `cost_sheet_categorys` INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '61' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-10 12:36:00 --> Query error: Table 'costestimator.cost_sheet_categorys' doesn't exist - Invalid query: SELECT *, CONCAT('AED ',(SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = 61)) as sumTotalCost, CONCAT('AED ',(SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = 61)) as sumSellingCost FROM `cost_sheet_categorys` INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '61' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-10 12:37:20 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 12:37:21 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 12:41:42 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:41:42 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:41:42 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 12:41:42 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 12:41:42 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 12:41:42 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 12:44:08 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:44:08 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:44:08 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 12:44:08 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 12:44:08 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 12:44:08 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 12:46:19 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:46:19 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:46:19 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 12:46:19 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 12:46:19 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 12:46:19 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 12:47:05 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:47:05 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:47:05 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 12:47:05 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 12:47:05 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 12:47:05 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 12:47:29 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:47:29 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:47:29 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 12:47:29 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 12:47:29 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 12:47:29 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 12:49:29 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:49:29 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:49:29 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 12:49:29 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 12:49:29 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 12:49:29 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 12:51:57 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:51:57 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:51:57 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 12:51:57 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 12:51:57 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 12:51:57 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 12:54:08 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:54:08 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:54:08 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 12:54:08 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 12:54:08 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 12:54:08 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 12:55:12 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:55:12 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:55:12 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 12:55:12 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 12:55:12 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 12:55:12 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 12:55:32 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:55:32 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 12:55:32 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 12:55:32 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 12:55:32 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 12:55:32 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 13:02:09 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 13:02:09 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 13:02:09 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 13:02:09 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 13:02:09 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 13:02:09 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 13:02:22 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 13:02:22 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 25
ERROR - 2019-09-10 13:02:22 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 39
ERROR - 2019-09-10 13:02:22 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 52
ERROR - 2019-09-10 13:02:22 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 63
ERROR - 2019-09-10 13:02:22 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 64
ERROR - 2019-09-10 13:03:10 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 13:03:22 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 14:51:28 --> 404 Page Not Found: admin/App/updateTemplateName
ERROR - 2019-09-10 14:51:34 --> 404 Page Not Found: admin/App/updateTemplateName
ERROR - 2019-09-10 14:52:05 --> Query error: Unknown column 'template_Name' in 'field list' - Invalid query: UPDATE `cost_sheet` SET `template_Name` = 'fasfafafaf', `updated_at` = '2019-09-10 14:52:05'
WHERE `id` = '63'
ERROR - 2019-09-10 15:14:45 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 15:55:03 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 15:55:51 --> Query error: Table 'costestimator.conatct_person' doesn't exist - Invalid query: DELETE FROM `conatct_person`
WHERE `id` = '1'
ERROR - 2019-09-10 15:56:00 --> Query error: Table 'costestimator.conatct_person' doesn't exist - Invalid query: DELETE FROM `conatct_person`
WHERE `id` = '1'
ERROR - 2019-09-10 16:30:59 --> Severity: 8192 --> idn_to_ascii(): INTL_IDNA_VARIANT_2003 is deprecated /var/www/html/costestimator/system/libraries/Form_validation.php 1234
ERROR - 2019-09-10 16:31:02 --> Severity: 8192 --> idn_to_ascii(): INTL_IDNA_VARIANT_2003 is deprecated /var/www/html/costestimator/system/libraries/Form_validation.php 1234
ERROR - 2019-09-10 16:31:09 --> Severity: 8192 --> idn_to_ascii(): INTL_IDNA_VARIANT_2003 is deprecated /var/www/html/costestimator/system/libraries/Form_validation.php 1234
ERROR - 2019-09-10 17:08:24 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 17:10:15 --> 404 Page Not Found: admin/Images/dashboard
ERROR - 2019-09-10 17:10:16 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-10 17:10:22 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 17:10:23 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-10 17:51:08 --> Severity: Notice --> Trying to get property 'name' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 90
ERROR - 2019-09-10 17:51:08 --> Severity: Notice --> Trying to get property 'customer' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 104
ERROR - 2019-09-10 17:51:08 --> Severity: Notice --> Trying to get property 'venue' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 118
ERROR - 2019-09-10 17:51:08 --> Severity: Notice --> Trying to get property 'cost_type' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 131
ERROR - 2019-09-10 17:51:08 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 142
ERROR - 2019-09-10 17:51:08 --> Severity: Notice --> Trying to get property 'currency' of non-object /var/www/html/costestimator/application/views/admin/cost_sheet.php 143
