<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-06 08:54:36 --> Query error: Column 'user' cannot be null - Invalid query: INSERT INTO `logs` (`user`, `type`, `status`, `description`, `created_at`) VALUES (NULL, 'Cost Sheet', 'Created', 496, '2020-07-06 08:54:36')
ERROR - 2020-07-06 10:45:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-07-06 13:09:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WOOD' at line 1 - Invalid query: Select * from products where id = NBF WOOD
ERROR - 2020-07-06 13:10:21 --> Query error: Unknown column 'Timber' in 'where clause' - Invalid query: Select * from products where id = Timber
ERROR - 2020-07-06 13:14:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Cad' at line 1 - Invalid query: Select * from products where id = Auto Cad
ERROR - 2020-07-06 13:14:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'MODELLING' at line 1 - Invalid query: Select * from products where id = 3D MODELLING
ERROR - 2020-07-06 13:17:40 --> Query error: Unknown column 'Door' in 'where clause' - Invalid query: Select * from products where id = Door
ERROR - 2020-07-06 13:22:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE...' at line 1 - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '' AND cost_sheet_category.sub_cat_id IS NULL
ERROR - 2020-07-06 13:32:41 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 15:57:04 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 18:17:19 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 18:17:19 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 18:17:34 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 18:17:35 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 18:18:53 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 18:18:54 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 18:19:54 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 18:19:54 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 18:20:52 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 18:20:52 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 18:24:05 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 18:24:05 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 19:10:29 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 19:10:30 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 19:13:35 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 19:13:35 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 19:32:38 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 19:32:40 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 19:32:41 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 19:32:43 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4737
ERROR - 2020-07-06 19:33:06 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 19:37:35 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 19:37:44 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 19:37:44 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 19:37:48 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 19:52:39 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 19:52:40 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 19:52:42 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:25:42 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:26:10 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4737
ERROR - 2020-07-06 20:27:29 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:28:19 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:29:45 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:31:46 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:32:51 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:33:27 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:34:33 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:35:10 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:36:37 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:36:59 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:37:54 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:40:21 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:41:05 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:41:45 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:42:55 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:43:33 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:43:49 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:44:22 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:45:03 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:45:25 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 20:46:19 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 20:46:19 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:48:40 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:48:41 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 20:48:44 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:48:46 --> Severity: Notice --> Undefined variable: totalPrice /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 594
ERROR - 2020-07-06 20:48:46 --> Severity: Notice --> Undefined variable: calculateVat /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 598
ERROR - 2020-07-06 20:48:46 --> Severity: Notice --> Undefined variable: totalCost /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 603
ERROR - 2020-07-06 20:48:46 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:48:47 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 20:49:21 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:49:21 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 20:50:00 --> Severity: Notice --> Undefined variable: totalPrice /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 594
ERROR - 2020-07-06 20:50:00 --> Severity: Notice --> Undefined variable: calculateVat /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 598
ERROR - 2020-07-06 20:50:00 --> Severity: Notice --> Undefined variable: totalCost /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 603
ERROR - 2020-07-06 20:50:01 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:50:01 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 20:51:36 --> Severity: Notice --> Undefined variable: totalPrice /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 594
ERROR - 2020-07-06 20:51:36 --> Severity: Notice --> Undefined variable: calculateVat /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 598
ERROR - 2020-07-06 20:51:36 --> Severity: Notice --> Undefined variable: totalCost /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 603
ERROR - 2020-07-06 20:51:37 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:51:37 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 20:52:46 --> Severity: Notice --> Undefined variable: calculateVat /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 601
ERROR - 2020-07-06 20:52:46 --> Severity: Notice --> Undefined variable: totalCost /home/projexon/costestimator.projexonlineservices.com/application/views/admin/genrated_view_cost_sheet.php 606
ERROR - 2020-07-06 20:52:47 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:52:47 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 20:53:34 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:53:34 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 20:53:41 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:53:43 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 20:53:43 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 21:01:07 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 21:01:07 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 21:12:51 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 21:13:00 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4689
ERROR - 2020-07-06 21:13:02 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4737
ERROR - 2020-07-06 22:19:02 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:19:07 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:19:14 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:20:01 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:20:15 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:24:52 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:25:02 --> Query error: Table 'projexon_cost.terms' doesn't exist - Invalid query: SELECT *
FROM `terms`
ERROR - 2020-07-06 22:25:29 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:26:05 --> 404 Page Not Found: admin/App/addTerms
ERROR - 2020-07-06 22:26:11 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:30:54 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:31:02 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:31:05 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:31:50 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:32:08 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:33:38 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:33:47 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:33:52 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:35:07 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:35:16 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:35:18 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:35:43 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:35:46 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:36:06 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:36:19 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:36:31 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:36:45 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:37:03 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:37:07 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:37:17 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:37:19 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:37:20 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 22:42:18 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:42:18 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 22:42:23 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4818
ERROR - 2020-07-06 22:42:23 --> Severity: error --> Exception: syntax error, unexpected 'year' (T_STRING), expecting ']' /home/projexon/costestimator.projexonlineservices.com/application/views/admin/costsheetpdf.php 155
ERROR - 2020-07-06 22:43:35 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4818
ERROR - 2020-07-06 22:43:55 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:43:56 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 22:43:59 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:44:03 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:44:06 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:44:16 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:44:19 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:44:21 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:44:22 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:44:23 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 22:44:24 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4818
ERROR - 2020-07-06 22:44:36 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4866
ERROR - 2020-07-06 22:45:35 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4868
ERROR - 2020-07-06 22:47:33 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:47:33 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 22:48:36 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:48:39 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:48:39 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 22:48:40 --> Severity: Notice --> Undefined variable: arr /home/projexon/costestimator.projexonlineservices.com/application/controllers/admin/App.php 4818
ERROR - 2020-07-06 22:56:27 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:56:29 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 22:56:29 --> 404 Page Not Found: Admin_assets/vendors
ERROR - 2020-07-06 23:32:08 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 23:32:11 --> 404 Page Not Found: Demo_admin_assets/css
ERROR - 2020-07-06 23:37:45 --> 404 Page Not Found: Demo_admin_assets/css
