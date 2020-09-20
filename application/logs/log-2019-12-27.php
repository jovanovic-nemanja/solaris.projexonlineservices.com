<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-27 13:18:15 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-12-27 13:18:22 --> 404 Page Not Found: admin/App/images
ERROR - 2019-12-27 13:18:26 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2019-12-27 13:18:37 --> 404 Page Not Found: admin/App/images
ERROR - 2019-12-27 13:18:51 --> 404 Page Not Found: admin/App/images
ERROR - 2019-12-27 13:18:56 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2019-12-27 13:19:20 --> 404 Page Not Found: admin/App/images
ERROR - 2019-12-27 13:27:18 --> 404 Page Not Found: admin/App/login(admin
