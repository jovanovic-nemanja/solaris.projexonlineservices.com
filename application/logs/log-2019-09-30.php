<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-30 10:02:20 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-30 10:02:27 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 10:25:45 --> Severity: Warning --> include_once(/var/www/html/costestimator/application//third_party/mpdf/mpdf.php): failed to open stream: No such file or directory /var/www/html/costestimator/application/libraries/M_pdf.php 3
ERROR - 2019-09-30 10:25:45 --> Severity: Warning --> include_once(): Failed opening '/var/www/html/costestimator/application//third_party/mpdf/mpdf.php' for inclusion (include_path='.:/usr/share/php') /var/www/html/costestimator/application/libraries/M_pdf.php 3
ERROR - 2019-09-30 10:25:45 --> Severity: error --> Exception: Class 'mPDF' not found /var/www/html/costestimator/application/libraries/M_pdf.php 12
ERROR - 2019-09-30 05:56:22 --> Severity: 8192 --> Methods with the same name as their class will not be constructors in a future version of PHP; grad has a deprecated constructor /var/www/html/costestimator/application/third_party/mpdf/classes/grad.php 3
ERROR - 2019-09-30 05:56:22 --> Severity: 8192 --> Methods with the same name as their class will not be constructors in a future version of PHP; form has a deprecated constructor /var/www/html/costestimator/application/third_party/mpdf/classes/form.php 3
ERROR - 2019-09-30 05:56:22 --> Severity: 8192 --> Methods with the same name as their class will not be constructors in a future version of PHP; cssmgr has a deprecated constructor /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 3
ERROR - 2019-09-30 05:56:22 --> Severity: Warning --> preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead /var/www/html/costestimator/application/third_party/mpdf/includes/functions.php 96
ERROR - 2019-09-30 05:56:22 --> Severity: Warning --> preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead /var/www/html/costestimator/application/third_party/mpdf/includes/functions.php 97
ERROR - 2019-09-30 05:56:22 --> Severity: Warning --> Illegal string offset 'ID' /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1070
ERROR - 2019-09-30 05:56:22 --> Severity: Warning --> Cannot assign an empty string to a string offset /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1070
ERROR - 2019-09-30 05:56:22 --> Severity: Warning --> Illegal string offset 'ID' /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1146
ERROR - 2019-09-30 05:56:22 --> Severity: Warning --> Illegal string offset 'ID' /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2019-09-30 05:56:22 --> Severity: Warning --> Illegal string offset 'ID' /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1349
ERROR - 2019-09-30 05:56:22 --> Severity: Warning --> Illegal string offset 'ID' /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1353
ERROR - 2019-09-30 05:56:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/costestimator/application/third_party/mpdf/mpdf.php 1770
ERROR - 2019-09-30 05:56:22 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /var/www/html/costestimator/application/third_party/mpdf/mpdf.php 9143
ERROR - 2019-09-30 06:07:12 --> Severity: 8192 --> Methods with the same name as their class will not be constructors in a future version of PHP; grad has a deprecated constructor /var/www/html/costestimator/application/third_party/mpdf/classes/grad.php 3
ERROR - 2019-09-30 06:07:12 --> Severity: 8192 --> Methods with the same name as their class will not be constructors in a future version of PHP; form has a deprecated constructor /var/www/html/costestimator/application/third_party/mpdf/classes/form.php 3
ERROR - 2019-09-30 06:07:12 --> Severity: 8192 --> Methods with the same name as their class will not be constructors in a future version of PHP; cssmgr has a deprecated constructor /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 3
ERROR - 2019-09-30 06:07:12 --> Severity: Warning --> preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead /var/www/html/costestimator/application/third_party/mpdf/includes/functions.php 96
ERROR - 2019-09-30 06:07:12 --> Severity: Warning --> preg_replace(): The /e modifier is no longer supported, use preg_replace_callback instead /var/www/html/costestimator/application/third_party/mpdf/includes/functions.php 97
ERROR - 2019-09-30 06:07:12 --> Severity: Warning --> Illegal string offset 'ID' /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1070
ERROR - 2019-09-30 06:07:12 --> Severity: Warning --> Cannot assign an empty string to a string offset /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1070
ERROR - 2019-09-30 06:07:12 --> Severity: Warning --> Illegal string offset 'ID' /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1146
ERROR - 2019-09-30 06:07:12 --> Severity: Warning --> Illegal string offset 'ID' /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1150
ERROR - 2019-09-30 06:07:12 --> Severity: Warning --> Illegal string offset 'ID' /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1349
ERROR - 2019-09-30 06:07:12 --> Severity: Warning --> Illegal string offset 'ID' /var/www/html/costestimator/application/third_party/mpdf/classes/cssmgr.php 1353
ERROR - 2019-09-30 06:07:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/costestimator/application/third_party/mpdf/mpdf.php 1770
ERROR - 2019-09-30 06:07:12 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /var/www/html/costestimator/application/third_party/mpdf/mpdf.php 9143
ERROR - 2019-09-30 10:49:23 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-30 10:51:18 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-30 10:51:37 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 10:58:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 10:59:20 --> Severity: Warning --> include_once(/var/www/html/costestimator/application//third_party/mpdf/mpdf.php): failed to open stream: No such file or directory /var/www/html/costestimator/application/libraries/M_pdf.php 3
ERROR - 2019-09-30 10:59:20 --> Severity: Warning --> include_once(): Failed opening '/var/www/html/costestimator/application//third_party/mpdf/mpdf.php' for inclusion (include_path='.:/usr/share/php') /var/www/html/costestimator/application/libraries/M_pdf.php 3
ERROR - 2019-09-30 10:59:20 --> Severity: error --> Exception: Class 'mPDF' not found /var/www/html/costestimator/application/libraries/M_pdf.php 12
ERROR - 2019-09-30 11:00:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:00:12 --> Severity: Warning --> include_once(/var/www/html/costestimator/application//third_party/mpdf/mpdf.php): failed to open stream: No such file or directory /var/www/html/costestimator/application/libraries/M_pdf.php 3
ERROR - 2019-09-30 11:00:12 --> Severity: Warning --> include_once(): Failed opening '/var/www/html/costestimator/application//third_party/mpdf/mpdf.php' for inclusion (include_path='.:/usr/share/php') /var/www/html/costestimator/application/libraries/M_pdf.php 3
ERROR - 2019-09-30 11:00:12 --> Severity: error --> Exception: Class 'mPDF' not found /var/www/html/costestimator/application/libraries/M_pdf.php 12
ERROR - 2019-09-30 11:01:33 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:02:49 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:03:02 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:03:53 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:05:29 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:05:59 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:08:43 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:10:56 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:11:22 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:11:35 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:11:45 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:12:27 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:13:19 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:13:35 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:13:48 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:14:24 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:18:23 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:19:19 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:24:12 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:25:02 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:25:10 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 11:40:01 --> Severity: Warning --> include_once(/var/www/html/costestimator/application//third_party/mpdf/mpdf.php): failed to open stream: No such file or directory /var/www/html/costestimator/application/libraries/M_pdf.php 3
ERROR - 2019-09-30 11:40:01 --> Severity: Warning --> include_once(): Failed opening '/var/www/html/costestimator/application//third_party/mpdf/mpdf.php' for inclusion (include_path='.:/usr/share/php') /var/www/html/costestimator/application/libraries/M_pdf.php 3
ERROR - 2019-09-30 11:40:01 --> Severity: error --> Exception: Class 'mPDF' not found /var/www/html/costestimator/application/libraries/M_pdf.php 12
ERROR - 2019-09-30 11:53:24 --> Severity: error --> Exception: Temporary files directory "/var/www/html/costestimator/vendor/mpdf/mpdf/src/Config/../../tmp" is not writable /var/www/html/costestimator/vendor/mpdf/mpdf/src/Cache.php 17
ERROR - 2019-09-30 11:53:59 --> Severity: Notice --> Undefined variable: trainerDetails /var/www/html/costestimator/application/views/admin/summery_Pdf.php 47
ERROR - 2019-09-30 11:53:59 --> Severity: Notice --> Undefined variable: learnerDetails /var/www/html/costestimator/application/views/admin/summery_Pdf.php 58
ERROR - 2019-09-30 11:53:59 --> Severity: Notice --> Undefined variable: invoiceLists /var/www/html/costestimator/application/views/admin/summery_Pdf.php 75
ERROR - 2019-09-30 11:53:59 --> Severity: Notice --> Undefined variable: invoiceLists /var/www/html/costestimator/application/views/admin/summery_Pdf.php 97
ERROR - 2019-09-30 11:53:59 --> Severity: Notice --> Undefined variable: invoiceLists /var/www/html/costestimator/application/views/admin/summery_Pdf.php 98
ERROR - 2019-09-30 11:53:59 --> Severity: Notice --> Undefined variable: invoiceLists /var/www/html/costestimator/application/views/admin/summery_Pdf.php 99
ERROR - 2019-09-30 11:53:59 --> Severity: Notice --> Undefined variable: invoiceLists /var/www/html/costestimator/application/views/admin/summery_Pdf.php 100
ERROR - 2019-09-30 12:11:38 --> Severity: Notice --> Undefined variable: trainerDetails /var/www/html/costestimator/application/views/admin/summery_Pdf.php 47
ERROR - 2019-09-30 12:11:38 --> Severity: Notice --> Undefined variable: learnerDetails /var/www/html/costestimator/application/views/admin/summery_Pdf.php 58
ERROR - 2019-09-30 12:11:38 --> Severity: Notice --> Undefined variable: invoiceLists /var/www/html/costestimator/application/views/admin/summery_Pdf.php 75
ERROR - 2019-09-30 12:11:38 --> Severity: Notice --> Undefined variable: invoiceLists /var/www/html/costestimator/application/views/admin/summery_Pdf.php 97
ERROR - 2019-09-30 12:11:38 --> Severity: Notice --> Undefined variable: invoiceLists /var/www/html/costestimator/application/views/admin/summery_Pdf.php 98
ERROR - 2019-09-30 12:11:38 --> Severity: Notice --> Undefined variable: invoiceLists /var/www/html/costestimator/application/views/admin/summery_Pdf.php 99
ERROR - 2019-09-30 12:11:38 --> Severity: Notice --> Undefined variable: invoiceLists /var/www/html/costestimator/application/views/admin/summery_Pdf.php 100
ERROR - 2019-09-30 12:31:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 12:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 12:49:46 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:50 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:04:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:04:59 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:04:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:05:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:05:20 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:05:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:03 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:06:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:40 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:06:40 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:06:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:08:26 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-30 13:08:37 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:54 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:54 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:08:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:08:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:57 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:08:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:08:59 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:08:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:01 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:01 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:02 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:02 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:04 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:04 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:05 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:07 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:08 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:10 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:12 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:13 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:14 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:15 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:16 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:17 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:18 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:20 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:20 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:21 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:27 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:27 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:27 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:27 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:27 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:27 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:27 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:27 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:27 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:32 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:39 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:39 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:39 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:39 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:39 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:39 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:39 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:39 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:39 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:44 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:44 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:44 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:44 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:44 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:44 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:44 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:44 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:44 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:47 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:47 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:47 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:47 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:47 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:47 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:47 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:47 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:47 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:48 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:50 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:53 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:09:58 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:58 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:58 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:58 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:09:58 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:58 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:58 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:58 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:09:58 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:09:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:10:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:10 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:10 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:10:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:10:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:26 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:10:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:10:31 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:31 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:31 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:31 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:31 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:31 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:31 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:31 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:32 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:10:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:10:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:34 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:10:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:10:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:36 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:10:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:51 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:10:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:53 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:53 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:10:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:55 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:55 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:10:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:59 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:10:59 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:10:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:16 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:11:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:36 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:11:37 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:11:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:46 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:46 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:12:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:52 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:12:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:57 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:12:57 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:00 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:03 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:05 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:05 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:07 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:07 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:08 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:09 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:09 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:09 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:09 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:09 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:09 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:09 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:12 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:13 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:13 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:15 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:15 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:15 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:15 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:15 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:15 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:15 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:17 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:18 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:19 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:19 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:21 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:21 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:22 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:22 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:22 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:22 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:22 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:22 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:22 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:24 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:24 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:24 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:24 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:24 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:24 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:24 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:26 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:26 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:29 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:29 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:29 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:29 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:29 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:29 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:29 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:30 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:30 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:30 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:30 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:30 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:30 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:30 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:32 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:32 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:33 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:33 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:33 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:33 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:33 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:33 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:33 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:50 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:50 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:13:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:13:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:51 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:13:52 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:13:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:23:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:23:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:23:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:23:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:23:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:23:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:23:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:23:00 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:23:00 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:23:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:23:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:23:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:23:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:23:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:23:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:23:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:23:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:23:08 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:23:08 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:23:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:25:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:25:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:25:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:25:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:25:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:25:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:25:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:25:03 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:25:03 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:25:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:25:06 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:25:06 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:25:06 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:25:06 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:25:06 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:25:06 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:25:06 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:25:06 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:25:06 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:25:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:26:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:12 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:26:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:26:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:16 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:16 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:26:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:26:28 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:28 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:28 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:28 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:26:28 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:28 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:28 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:28 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:26:28 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:26:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:28:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:18 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:18 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:28:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:28:45 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:45 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:45 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:45 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:45 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:45 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:45 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:45 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:45 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:28:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:28:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:48 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:48 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:28:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:28:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:52 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:52 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:28:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:28:56 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:56 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:56 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:56 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:28:56 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:56 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:56 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:56 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:28:56 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:28:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:29:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:12 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:12 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:29:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:29:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:17 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:17 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:29:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:29:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19882
ERROR - 2019-09-30 13:29:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:34 --> Severity: Notice --> Undefined index: l /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 19935
ERROR - 2019-09-30 13:29:34 --> Severity: error --> Exception: Data has already been sent to output, unable to output PDF file /var/www/html/costestimator/vendor/mpdf/mpdf/src/Mpdf.php 9425
ERROR - 2019-09-30 13:29:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/costestimator/system/core/Exceptions.php:271) /var/www/html/costestimator/system/core/Common.php 570
ERROR - 2019-09-30 13:43:26 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-30 13:43:40 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 13:44:29 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-30 13:44:46 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-30 14:57:36 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 14:59:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 15:00:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 15:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 15:04:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 15:04:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 15:12:07 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 15:12:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 15:17:36 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) /var/www/html/costestimator/application/controllers/admin/App.php 2468
ERROR - 2019-09-30 15:20:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE ca' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 15:58:21 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 16:02:32 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 16:14:12 --> Query error: Unknown column 'quotation_status' in 'where clause' - Invalid query: SELECT *
FROM `cost_sheet`
WHERE `status` = 'genrated'
AND (`quotation_status` = `Panding` or `quotation_status` = `Accepted`)
ORDER BY `id` DESC, `id` DESC
ERROR - 2019-09-30 16:14:52 --> Query error: Unknown column 'Panding' in 'where clause' - Invalid query: SELECT *
FROM `cost_sheet`
WHERE `status` = 'genrated'
AND (`quotation_status` = `Panding` or `quotation_status` = `Accepted`)
ORDER BY `id` DESC, `id` DESC
ERROR - 2019-09-30 16:17:48 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-30 18:13:53 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-30 18:14:02 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 19:24:51 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-09-30 19:24:56 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-30 19:25:11 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 19:25:24 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 19:30:38 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-09-30 20:00:59 --> 404 Page Not Found: admin/App/images
ERROR - 2019-09-30 20:01:04 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
