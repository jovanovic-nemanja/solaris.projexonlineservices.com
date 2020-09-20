<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-19 00:31:52 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-19 00:34:36 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 00:34:45 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 10:29:18 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-19 10:29:45 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 10:58:28 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 11:29:03 --> Severity: error --> Exception: syntax error, unexpected '$sql' (T_VARIABLE) /var/www/html/costestimator/application/controllers/admin/App.php 1820
ERROR - 2019-09-19 11:29:47 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/costestimator/application/controllers/admin/App.php 1829
ERROR - 2019-09-19 11:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 11:31:22 --> Severity: Notice --> Undefined index: sumTotalCost /var/www/html/costestimator/application/controllers/admin/App.php 1829
ERROR - 2019-09-19 11:31:22 --> Severity: Notice --> Undefined index: sumTotalCost /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:31:22 --> Severity: Notice --> Undefined index: sumSellingCost /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:31:22 --> Severity: Warning --> Division by zero /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:31:22 --> Severity: Notice --> Undefined index: sumSellingCost /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:32:36 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 11:50:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 11:50:44 --> Severity: Notice --> Undefined index: sumTotalCost /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:50:44 --> Severity: Notice --> Undefined index: sumTotalCost /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:50:44 --> Severity: Notice --> Undefined index: sumSellingCost /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:50:44 --> Severity: Warning --> Division by zero /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:50:44 --> Severity: Notice --> Undefined index: sumSellingCost /var/www/html/costestimator/application/controllers/admin/App.php 1832
ERROR - 2019-09-19 11:53:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:53:03 --> Severity: Notice --> Trying to get property 'sumTotalCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:53:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:03 --> Severity: Notice --> Trying to get property 'sumTotalCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:03 --> Severity: Notice --> Trying to get property 'sumSellingCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:03 --> Severity: Warning --> Division by zero /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1832
ERROR - 2019-09-19 11:53:03 --> Severity: Notice --> Trying to get property 'sumSellingCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1832
ERROR - 2019-09-19 11:53:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/application/controllers/admin/App.php 1864
ERROR - 2019-09-19 11:53:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/application/controllers/admin/App.php 1865
ERROR - 2019-09-19 11:53:40 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:53:40 --> Severity: Notice --> Trying to get property 'sumTotalCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:53:40 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:40 --> Severity: Notice --> Trying to get property 'sumTotalCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:40 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:40 --> Severity: Notice --> Trying to get property 'sumSellingCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:40 --> Severity: Warning --> Division by zero /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:40 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1832
ERROR - 2019-09-19 11:53:40 --> Severity: Notice --> Trying to get property 'sumSellingCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1832
ERROR - 2019-09-19 11:53:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/application/controllers/admin/App.php 1864
ERROR - 2019-09-19 11:53:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/application/controllers/admin/App.php 1865
ERROR - 2019-09-19 11:53:47 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:53:47 --> Severity: Notice --> Trying to get property 'sumTotalCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:53:47 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:47 --> Severity: Notice --> Trying to get property 'sumTotalCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:47 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:47 --> Severity: Notice --> Trying to get property 'sumSellingCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:47 --> Severity: Warning --> Division by zero /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 11:53:47 --> Severity: Notice --> Undefined offset: 0 /var/www/html/costestimator/application/controllers/admin/App.php 1832
ERROR - 2019-09-19 11:53:47 --> Severity: Notice --> Trying to get property 'sumSellingCost' of non-object /var/www/html/costestimator/application/controllers/admin/App.php 1832
ERROR - 2019-09-19 11:53:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/application/controllers/admin/App.php 1864
ERROR - 2019-09-19 11:53:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/application/controllers/admin/App.php 1865
ERROR - 2019-09-19 11:54:05 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:54:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 11:54:59 --> Severity: Notice --> Undefined property: stdClass::$sumTotalCost /var/www/html/costestimator/application/controllers/admin/App.php 1828
ERROR - 2019-09-19 11:54:59 --> Severity: Notice --> Undefined property: stdClass::$sumTotalCost /var/www/html/costestimator/application/controllers/admin/App.php 1829
ERROR - 2019-09-19 11:54:59 --> Severity: Notice --> Undefined property: stdClass::$sumSellingCost /var/www/html/costestimator/application/controllers/admin/App.php 1829
ERROR - 2019-09-19 11:54:59 --> Severity: Warning --> Division by zero /var/www/html/costestimator/application/controllers/admin/App.php 1829
ERROR - 2019-09-19 11:54:59 --> Severity: Notice --> Undefined property: stdClass::$sumSellingCost /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:57:02 --> Severity: Notice --> Undefined property: stdClass::$sumTotalCost /var/www/html/costestimator/application/controllers/admin/App.php 1828
ERROR - 2019-09-19 11:57:02 --> Severity: Notice --> Undefined property: stdClass::$sumSellingCost /var/www/html/costestimator/application/controllers/admin/App.php 1830
ERROR - 2019-09-19 11:58:30 --> Severity: Notice --> Undefined property: stdClass::$sumTotalCost /var/www/html/costestimator/application/controllers/admin/App.php 1824
ERROR - 2019-09-19 12:04:25 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' /var/www/html/costestimator/application/controllers/admin/App.php 1831
ERROR - 2019-09-19 12:17:17 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`costestimator`.`cost_sheet_line_item`, CONSTRAINT `cost_sheet_line_item_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `costsheet_subcategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `cost_sheet_line_item` (`product_name`, `quantity`, `unit_id`, `unit_cost`, `total_cost`, `o/h`, `selling_price`, `cat_id`, `sub_cat_id`, `cost_sheet_id`, `created_at`) VALUES ('aasas', '2', '11', '122', '244', '0.65', '375', '21', '35', '99', '2019-09-19 12:17:17')
ERROR - 2019-09-19 12:17:26 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`costestimator`.`cost_sheet_line_item`, CONSTRAINT `cost_sheet_line_item_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `costsheet_subcategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `cost_sheet_line_item` (`product_name`, `quantity`, `unit_id`, `unit_cost`, `total_cost`, `o/h`, `selling_price`, `cat_id`, `sub_cat_id`, `cost_sheet_id`, `created_at`) VALUES ('aasas', '2', '11', '122', '244', '0.65', '375', '21', '35', '99', '2019-09-19 12:17:26')
ERROR - 2019-09-19 12:26:09 --> Severity: error --> Exception: syntax error, unexpected '1' (T_LNUMBER), expecting variable (T_VARIABLE) or '{' or '$' /var/www/html/costestimator/application/controllers/admin/App.php 1848
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1853
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1854
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1855
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1856
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1857
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1858
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1853
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1854
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1855
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1856
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1857
ERROR - 2019-09-19 12:56:43 --> Severity: Notice --> Undefined variable: lineItem /var/www/html/costestimator/application/controllers/admin/App.php 1858
ERROR - 2019-09-19 12:56:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/application/controllers/admin/App.php 1867
ERROR - 2019-09-19 12:56:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/application/controllers/admin/App.php 1868
ERROR - 2019-09-19 13:09:37 --> Severity: error --> Exception: Call to undefined method PHPExcel::getRowDimension() /var/www/html/costestimator/application/controllers/admin/App.php 1819
ERROR - 2019-09-19 13:11:53 --> Severity: Warning --> Division by zero /var/www/html/costestimator/application/controllers/admin/App.php 1829
ERROR - 2019-09-19 13:11:53 --> Severity: Warning --> Division by zero /var/www/html/costestimator/application/controllers/admin/App.php 1835
ERROR - 2019-09-19 14:23:31 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 15:07:07 --> 404 Page Not Found: admin/App/manage_chostsheet
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 46
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 46
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 46
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 46
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms2' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 56
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms2' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 56
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms2' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 56
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms2' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 56
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms3' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 66
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms3' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 66
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms3' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 66
ERROR - 2019-09-19 15:08:40 --> Severity: Notice --> Trying to get property 'payment_terms3' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 66
ERROR - 2019-09-19 15:55:29 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-19 16:21:00 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 16:21:15 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-19 17:22:17 --> Query error: Unknown column 'costsheet_id' in 'from clause' - Invalid query: SELECT *
FROM `cost_sheet`
LEFT JOIN `costsheet_draft` USING (`costsheet_id`)
WHERE `id` = 'status'
ERROR - 2019-09-19 17:23:55 --> Query error: Unknown column 'cost_sheet_id' in 'from clause' - Invalid query: SELECT *
FROM `cost_sheet`
LEFT JOIN `costsheet_draft` USING (`cost_sheet_id`)
WHERE `id` = 'status'
ERROR - 2019-09-19 17:27:20 --> Query error: Unknown column 'cost_sheet_id' in 'from clause' - Invalid query: SELECT *
FROM `cost_sheet`
LEFT JOIN `costsheet_draft` USING (`cost_sheet_id`)
WHERE `id` = 'status'
ERROR - 2019-09-19 17:27:57 --> Query error: Unknown column 'costsheet_draftcost_sheetid' in 'from clause' - Invalid query: SELECT `cost_sheet*`
FROM `cost_sheet`
INNER JOIN `costsheet_draft` USING (`costsheet_draftcost_sheetid`)
WHERE `costsheet_draftstatus` = 1
ERROR - 2019-09-19 17:29:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`cost_sheet`.`id`)
WHERE `costsheet_draftstatus` = 1' at line 3 - Invalid query: SELECT `cost_sheet*`
FROM `cost_sheet`
LEFT JOIN `costsheet_draft` USING (`costsheet_draft`.`cost_sheet`.`id`)
WHERE `costsheet_draftstatus` = 1
ERROR - 2019-09-19 17:30:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`id`)
WHERE `costsheet_draftstatus` = 1' at line 3 - Invalid query: SELECT `cost_sheet*`
FROM `cost_sheet`
LEFT JOIN `costsheet_draft` USING (`cost_sheet`.`id`)
WHERE `costsheet_draftstatus` = 1
ERROR - 2019-09-19 17:50:29 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-19 17:50:41 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-19 18:36:36 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-19 18:37:09 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 46
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 46
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 46
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 46
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms2' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 56
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms2' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 56
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms2' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 56
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms2' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 56
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms3' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 66
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms3' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 66
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms3' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 66
ERROR - 2019-09-19 18:37:28 --> Severity: Notice --> Trying to get property 'payment_terms3' of non-object /var/www/html/costestimator/application/views/admin/edit_customer.php 66
