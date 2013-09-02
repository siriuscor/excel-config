<?php  defined('SYS_PATH') or die('No direct script access.');
return  array (
  1 => 
  (object)array(
     'type' => 'soil',
     'map_object' => true,
     'giftable' => false,
     'buyable' => true,
     'name' => 'Soil',
     'size_y' => 5,
     'exp' => 1,
     'size_x' => 5,
     'id' => 1,
  ),

# ============== crops ================#   
 2 => 
  (object)array(
     'product' => 3,
     'water' =>1,
     'collect_exp' => 1,
     'price' => 15,
     'stages' => 5,
     'id' => 2,
     'collect_in' => 60,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Clover',
     'map_object' => true,
     'size_x' => 5,
     'level' => 2,
     'size_y' => 5,
     'offset_x' => 0,
     'offset_y' => 27,
  ),
  3 => 
  (object)array(
     'type' => 'products',
     'producer' => 2,
     'can_make_feed'  => true,
     'feed_mill_rate' => 1,
     'rp_price' => 2, 
     'giftable' => false,
     'giftinvisible' => true,
     'buyable' => false,
     'name' => 'Clover',   
     'sell_for' => 17,
     'map_object' => false,
     'trade_for' => false,
     'id' => 3,
     'offset_x' => -2,
     'offset_y' => 10,
  ),
/*
  4 => 
  (object)array(
     'product' => 5,
     'water' =>1,
     'collect_exp' => 1,
     'price' => 15,
     'stages' => 5,
     'id' => 4,
     'collect_in' => 300,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Coffee Bean',
     'map_object' => true,
     'size_x' => 5,
     'level' => 3,
     'size_y' => 5,
     'offset_x' => 0,
     'offset_y' => 20,
  ),
  5 => 
  (object)array(
     'type' => 'products',
     'producer' => 4,
     'can_make_feed'  => true,
     'feed_mill_rate' => 2,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Coffee Bean',
     'sell_for' => 17,
     'map_object' => false,
     'trade_for' => false,
     'id' => 5,
  ), 
*/
  6 => 
  (object)array(
     'product' => 7,
     'water' =>1,
     'collect_exp' => 1,
     'price' => 10,
     'stages' => 5,
     'id' => 6,
     'collect_in' => 120,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Corn',
     'map_object' => true,
     'size_x' => 5,
     'size_y' => 5,
     'offset_x' => 1,
     'offset_y' => 41,
     'level' => 8,
  ),
  7 => 
  (object)array(
     'type' => 'products',
     'producer' => 6,
     'can_make_feed'  => true,
     'feed_mill_rate' => 1,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Corn',
     'sell_for' => 12,
     'map_object' => false,
     'trade_for' => false,
     'id' => 7,
     'offset_x' => 0,
     'offset_y' => 38,
  ),
  8 => 
  (object)array(
     'product' => 9,
     'water' =>1,
     'collect_exp' => 1,
     'price' => 10,
     'stages' => 5,
     'id' => 8,
     'collect_in' => 120,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Tomato',
     'map_object' => true,
     'size_x' => 5,
     'level' => 1,
     'size_y' => 5,
     'offset_x' => 2,
     'offset_y' => 24,
  ),
  9 => 
  (object)array(
     'type' => 'products',
     'producer' => 8,
     'can_make_feed'  => true,
     'feed_mill_rate' => 1,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Tomato',
     'sell_for' => 12,
     'map_object' => false,
     'trade_for' => false,
     'id' => 9,
  ),  
  10 => 
  (object)array(
     'product' => 11,
     'water' =>1,
     'collect_exp' => 2, 
     'price' => 17,
     'stages' => 5,
     'id' => 10,
     'collect_in' => 3600,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Wheat',
     'map_object' => true,
     'size_x' => 5,
     'level' => 4,
     'size_y' => 5,
     'offset_x' => 0,
     'offset_y' => 28,
  ),
  11 => 
  (object)array(
     'type' => 'products',
     'producer' => 10,
     'can_make_feed'  => true,
     'feed_mill_rate' => 3,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Wheat',
     'sell_for' => 20,
     'map_object' => false,
     'trade_for' => false,
     'id' => 11,
  ),
  12 => 
  (object)array(
     'product' => 13,
     'water' =>1,
     'stages' => 5,
     'collect_in' => 14400,
     'collect_exp' => 4,
     'price' => 48,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Carrot',
     'id' => 12,
     'map_object' => true,
     'size_x' => 5,
     'level' => 13,
     'size_y' => 5,
     'offset_x' => 6,
     'offset_y' => 26,
  ),
  13 => 
  (object)array(
     'type' => 'products',
     'producer' => 12,
     'can_make_feed'  => true,
     'feed_mill_rate' => 4,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Carrot',
     'sell_for' => 45,
     'map_object' => false,
     'trade_for' => false,
     'id' => 13,
  ),
  14 => 
  (object)array(
     'product' => 15,
     'water' =>1,
     'collect_exp' => 7,
     'price' => 36,
     'stages' => 5,
     'id' => 14,
     'collect_in' => 7200,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Onion',
     'map_object' => true,
     'size_x' => 5,
     'level' => 11,
     'size_y' => 5,
     'offset_x' => -3,
     'offset_y' => 30,
  ),
  15 => 
  (object)array(
     'type' => 'products',
     'producer' => 14,
     'can_make_feed'  => true,
     'feed_mill_rate' => 5,
     'rp_price' => 2, 
     'buyable' => false,
     'name' => 'Onion',
     'sell_for' => 44,
     'map_object' => false,
     'id' => 15,
  ),
  16 => 
  (object)array(
     'product' => 17,
     'water' =>1,
     'collect_exp' => 3,//pw
     'price' => 35,
     'stages' => 5,
     'id' => 16,
     'collect_in' => 3600,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Watermelon',
     'map_object' => true,
     'size_x' => 5,
     'level' => 9,
     'size_y' => 5,
     'offset_x' => 2,
     'offset_y' => 11,
  ),
  17 => 
  (object)array(
     'type' => 'products',
     'producer' => 16,
     'can_make_feed'  => true,
     'feed_mill_rate' => 2,
     'rp_price' => 2, 
     'buyable' => false,
     'name' => 'Watermelon',
     'sell_for' => 38,
     'map_object' => false,
     'trade_for' => false,
     'id' => 17,
  ),
  18 => 
  (object)array(
     'product' => 19,
     'water' =>1,
     'collect_exp' => 2,
     'price' => 25,
     'stages' => 5,
     'id' => 18,
     'collect_in' => 1800,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Strawberry',
     'map_object' => true,
     'size_x' => 5,
     'level' => 5,
     'size_y' => 5,
     'offset_x' => -3,
     'offset_y' => 18,
  ),
  19 => 
  (object)array(
     'type' => 'products',
     'producer' => 18,
     'can_make_feed'  => true,
     'feed_mill_rate' => 2,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Strawberry',
     'sell_for' => 28,
     'map_object' => false,
     'trade_for' => false,
     'id' => 19,
  ),
/*
  26 => 
  (object)array(
     'product' => 27,
     'water' =>1,
     'collect_exp' => 1,
     'price' => 42,
     'stages' => 5,
     'id' => 26,
     'collect_in' => 60,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Cucumber',
     'map_object' => true,
     'size_x' => 5,
     'level' => 2,
     'size_y' => 5,
     'offset_x' => 0,
     'offset_y' => 12,
  ),
  27 => 
  (object)array(
     'type' => 'products',
     'producer' => 26,
     'can_make_feed'  => true,
     'feed_mill_rate' => 1,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Cucumber',
     'sell_for' => 45,
     'map_object' => false,
     'trade_for' => false,
     'id' => 27,
  ),
  28 => 
  (object)array(
     'product' => 29,
     'collect_exp' => 1,
     'price' => 55,
     'stages' => 5,
     'id' => 28,
     'collect_in' => 57600,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Barley',
     'map_object' => true,
     'size_x' => 5,
     'level' => 18,
     'size_y' => 5,
     'offset_x' => 0,
     'offset_y' => 41,
  ),
  29 => 
  (object)array(
     'type' => 'products',
     'producer' => 28,
     'can_make_feed'  => true,
     'feed_mill_rate' => 8,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Barley',
     'sell_for' => 74,
     'map_object' => false,
     'trade_for' => false,
     'id' => 29,
  ),
  30 => 
  (object)array(
     'product' => 31,
     'collect_exp' => 1,
     'price' => 215,
     'stages' => 5,
     'id' => 30,
     'collect_in' => 54000,
     'type' => 'seeds',
     'giftable' => false,
     'name' => 'Red Rose',
     'map_object' => true,
     'size_x' => 5,
     'level' => 20,
     'size_y' => 5,
     'offset_x' => 0,
     'offset_y' => 22,
  ),
  31 => 
  (object)array(
     'type' => 'products',
     'producer' => 30,
     'can_make_feed'  => true,
     'feed_mill_rate' => 2,
     'rp_price' => 2, 
     'buyable' => false,
     'giftable' => true,
     'gift_level' => 31,
     'name' => 'Red Rose',
     'sell_for' => 235,
     'map_object' => false,
     'trade_for' => false,
     'id' => 31,
  ),
*/

#=========================trees=========================#

  1000 => 
  (object)array(
     'type' => 'trees',
     'tree_spacing' => 4,
     'map_object' => true,
     'tall_object' => true,
     'stages' => 5,
     'trade_for' => false,
     'level' => 2,
     'name' => 'Orange Tree',
     'tall_object' => true,
     'id' => 1000,
     'price' => 260,
     'collect_in' => 3600,
     'collect_exp' => 2,
     'water' =>2,
     'sell_price' => 26,
     'exp' => 1,
     'product_num' => 2,
     'product' => 1001,
     'size_x' => 4,
     'size_y' => 4,
     'offset_x' => 0,
     'offset_y' => 72,
  ),
  1001 => 
  (object)array(
     'type' => 'products', 
     'can_make_feed'  => true,
     'map_object' => false,
     'giftable' => false,
     'buyable' => false,
     'producer' => 1000,
     'name' => 'Orange',
     'id' => 1001,
     'sell_for' => 17,
     'feed_mill_rate' => 3,
     'rp_price' => 2, 
  ),
  1002 => 
  (object)array(
     'type' => 'trees',
     'tree_spacing' => 4,
     'map_object' => true,
     'tall_object' => true,
     'stages' => 5,
     'trade_for' => false,
     'level' => 7,
     'name' => 'Apple Tree',
     'tall_object' => true,
     'id' => 1002,
     'price' => 320,
     'collect_in' => 7200,
     'collect_exp' => 3,
     'water' =>3,
     'sell_price' => 32,
     'exp' => 1,
     'product_num' => 3,
     'product' => 1003,
     'size_x' => 4,
     'size_y' => 4,
     'offset_x' => 0,
     'offset_y' => 72,
  ),
  1003 => 
  (object)array(
     'type' => 'products', 
     'can_make_feed'  => true,
     'map_object' => false,
     'giftable' => false,
     'buyable' => false,
     'producer' => 1002,
     'name' => 'Apple',
     'id' => 1003,
     'sell_for' => 19,
     'feed_mill_rate' => 4,
     'rp_price' => 2, 
  ),

  1004 => 
  (object)array(
     'price' => 480,
     'water' =>4,
     'sell_price' => 40,
     'product' => 1005,
     'product_num' => 4,
     'collect_exp' => 5,
     'exp' => 9,
     'size_x' => 4,
     'size_y' => 4,
     'stages' => 5,
     'trade_for' => false,
     'id' => 1004,
     'collect_in' => 72000,
     'type' => 'trees',
     'giftable' => false,
     'tree_spacing' => 4,
     'name' => 'Banana Tree',
     'tall_object' => true,
     'map_object' => true,
     'buyable' => false,
     'level' => 14,
     'tall_object' => true,
     'offset_x' => 0,
     'offset_y' => 72,
  ),
  1005 => 
  (object)array(
     'type' => 'products',
     'producer' => 1004,
     'can_make_feed'  => true,
     'feed_mill_rate' => 5,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Banana',
     'sell_for' => 29,
     'exp' => 1,
     'map_object' => false,
     'id' => 1005,
  ),
  1006 => 
  (object)array(
     'type' => 'trees',
     'tree_spacing' => 4,
     'map_object' => true,
     'tall_object' => true,
     'stages' => 5,
     'trade_for' => false,
     'level' => 9,
     'name' => 'Lemon Tree',
     'tall_object' => true,
     'id' => 1006,
     'price' => 300,
     'collect_in' => 14400,
     'collect_exp' => 5,
     'water' =>3,
     'sell_price' => 30,
     'exp' => 1,
     'product_num' => 3,
     'product' => 1007,
     'size_x' => 4,
     'size_y' => 4,
     'offset_x' => 0,
     'offset_y' => 72,
  ),
  1007 => 
  (object)array(
     'type' => 'products', 
     'can_make_feed'  => true,
     'map_object' => false,
     'giftable' => false,
     'buyable' => false,
     'producer' => 1006,
     'name' => 'Lemon',
     'id' => 1007,
     'sell_for' => 18,
     'feed_mill_rate' => 2,
     'rp_price' => 2, 
  ),
/*  1008 => 
  (object)array(
     'price' => 4500,
     'product' => 1009,
     'water' =>2,
     'sell_price' => 120,
     'collect_exp' => 2,
     'exp' => 4,
     'stages' => 5,
     'id' => 1008,
     'collect_in' => 50400,
     'type' => 'trees',
     'giftable' => false,
     'tree_spacing' => 4,
     'name' => 'Plum Tree',
     'tall_object' => true,
     'map_object' => true,
     'size_x' => 3,
     'level' => 11,
     'size_y' => 3,
     'offset_x' => 0,
     'offset_y' => 72,
     'tall_object' => true,
  ),
  1009 => 
  (object)array(
     'type' => 'products',
     'producer' => 1008,
     'can_make_feed'  => true,
     'feed_mill_rate' => 5,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Plum',
     'sell_for' => 35,
     'exp' => 1,
     'map_object' => false,
     'id' => 1009,
  ),

  1010 => 
  (object)array(
     'sell_price' => 75,
     'product' => 1011,
     'water' =>2,
     'collect_exp' => 2,
     'exp' => 6,
     'size_x' => 3,
     'gift_level' => 6,
     'price' => 600,
     'stages' => 5,
     'trade_for' => false,
     'id' => 1010,
     'collect_in' => 43200,
     'type' => 'trees',
     'giftable' => false,
     'tree_spacing' => 4,
     'name' => 'Cherry Tree',
     'tall_object' => true,
     'map_object' => true,
     'level' => 13,
     'size_y' => 3,
     'tall_object' => true,
     'offset_x' => 0,
     'offset_y' => 72,
  ),
  1011 => 
  (object)array(
     'type' => 'products',
     'producer' => 1010,
     'can_make_feed'  => true,
     'feed_mill_rate' => 10,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Cherry',
     'sell_for' => 20,
     'exp' => 1,
     'map_object' => false,
     'id' => 1011,
  ),
  1012 => 
  (object)array(
     'sell_price' => 75,
     'product' => 1013,
     'water' =>2,
     'collect_exp' => 2,
     'exp' => 6,
     'size_x' => 3,
     'gift_level' => 6,
     'price' => 600,
     'stages' => 5,
     'trade_for' => false,
     'id' => 1012,
     'collect_in' => 43200,
     'type' => 'trees',
     'giftable' => false,
     'tree_spacing' => 4,
     'name' => 'Cotton Tree',
     'tall_object' => true,
     'map_object' => true,
     'level' => 15,
     'size_y' => 3,
     'tall_object' => true,
     'offset_x' => 0,
     'offset_y' => 72,
  ),
  1013 => 
  (object)array(
     'type' => 'products',
     'producer' => 1012,
     'can_make_feed'  => true,
     'feed_mill_rate' => 10,
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Cotton',
     'sell_for' => 20,
     'exp' => 1,
     'map_object' => false,
     'id' => 1013,
  ),
*/
  1014 => 
  (object)array(
     'type' => 'trees',
     'tree_spacing' => 4,
     'map_object' => true,
     'tall_object' => true,
     'stages' => 5,
     'trade_for' => false,
     'level' => 6,
     'name' => 'Chocolate Tree',
     'tall_object' => true,
     'id' => 1014,
     'rp_price' => 12,
     'collect_in' => 3600,
     'collect_exp' => 5,
     'water' =>5,
     'sell_price' => 120,
     'exp' => 3,
     'product_num' => 3,
     'product' => 1015,
     'size_x' => 4,
     'size_y' => 4,
     'offset_x' => 0,
     'offset_y' => 72,
  ),
  1015 => 
  (object)array(
     'type' => 'products', 
     'can_make_feed'  => true,
     'map_object' => false,
     'giftable' => false,
     'buyable' => false,
     'producer' => 1014,
     'name' => 'Chocolate',
     'id' => 1015,
     'sell_for' => 80,
     'feed_mill_rate' => 5,
     'rp_price' => 2, 
  ),



# ========================== animals products   ====================#
  2000 => 
  (object)array(
     'type' => 'products',
     'producer' => 600002,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Milk',
     'sell_for' => 85,
     'exp' => 1,
     'map_object' => false,
     'trade_for' => false,
     'id' => 2000,
  ),
  2001 => 
  (object)array(
     'type' => 'products',
     'producer' => 600002,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Swiss cheese',
     'sell_for' => 100,
     'exp' => 1,
     'map_object' => false,
     'id' => 2001,
  ),
  2002 => 
  (object)array(
     'type' => 'products',
     'producer' => 600012,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Egg',
     'sell_for' => 60,
     'exp' => 1,
     'map_object' => false,
     'trade_for' => false,
     'id' => 2002,
  ),
  2003 => 
  (object)array(
     'type' => 'products',
     'producer' => 600012,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Brown egg',
     'sell_for' => 90,
     'exp' => 1,
     'map_object' => false,
     'id' => 2003,
  ),
  2004 => 
  (object)array(
     'type' => 'products',
     'producer' => 600022,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Wool',
     'sell_for' => 90,
     'exp' => 1,
     'map_object' => false,
     'id' => 2004,
  ),
  2005 => 
  (object)array(
     'type' => 'products',
     'producer' => 600022,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Fine rabbit wool',
     'sell_for' => 150,
     'exp' => 1,
     'map_object' => false,
     'id' => 2005,
  ),
  2006 => 
  (object)array(
     'type' => 'products',
     'producer' => 600042,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Bacon',
     'sell_for' => 65,
     'exp' => 1,
     'map_object' => false,
     'id' => 2006,
  ),
  2007 => 
  (object)array(
     'type' => 'products',
     'producer' => 600042,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Sausage',
     'sell_for' => 150,
     'exp' => 1,
     'map_object' => false,
     'id' => 2007,
  ),
  2008 => 
  (object)array(
     'type' => 'products',
     'producer' => 600052,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Feather',
     'sell_for' => 35,
     'exp' => 1,
     'map_object' => false,
     'id' => 2008,
  ),
  2009 => 
  (object)array(
     'type' => 'products',
     'producer' => 600052,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Fine eiderdown',
     'sell_for' => 35,
     'exp' => 1,
     'map_object' => false,
     'id' => 2009,
  ),
  2010 => 
  (object)array(
     'type' => 'products',
     'producer' => 600062,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Goat milk',
     'sell_for' => 90,
     'exp' => 1,
     'map_object' => false,
     'id' => 2010,
  ),
  2011 => 
  (object)array(
     'type' => 'products',
     'producer' => 600062,      #  成年动物ID；
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Goat cheese',
     'sell_for' => 110,
     'exp' => 1,
     'map_object' => false,
     'id' => 2011,
  ),

# ////// drop items 
  3000 => 
  (object)array(
     'type' => 'products',
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Red Egg',
     'sell_for' => 75,
     'exp' => 1,
     'map_object' => false,
     'id' => 3000,
  ),
  3001 => 
  (object)array(
     'type' => 'products',
     'rp_price' => 2, 
     'giftable' => false,
     'buyable' => false,
     'name' => 'Cheese',
     'sell_for' => 90,
     'exp' => 1,
     'map_object' => false,
     'id' => 3001,
  ),


#=================kitchen recipes=================#
  10000 => 
  (object)array(
     'type' => 'food',
     'producer' =>  100,      #  cookbook 中的编号；
     'giftable' => false,
     'buyable' => false,
     'name' => 'Butter',
     'sell_for' => 172,
     'exp' => 2,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10000,
  ),
  10009 => 
  (object)array(
     'type' => 'food',
     'producer' =>  101,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Orange lcing',
     'sell_for' => 223,
     'exp' => 4,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10009,
  ),
  10010 => 
  (object)array(
     'type' => 'food',
     'producer' =>  102,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Orange Crepes',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 580,
     'exp' => 7,    
     'map_object' => false,
     'trade_for' => false,
     'id' => 10010,
  ),

  10074 => 
  (object)array(
     'type' => 'food',
     'producer' =>  140,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Tomato Cup',
     'sell_for' => 55,
     'exp' => 3,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10074,
  ),
  10075 => 
  (object)array(
     'type' => 'food',
     'producer' =>  141,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Egg In Tomato',
     'sell_for' => 465,
     'exp' => 5,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10075,
  ),
  10076 => 
  (object)array(
     'type' => 'food',
     'producer' =>  142,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Baked Egg In Tomato Cup',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 820,
     'exp' => 9,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10076,
  ),
### 
  10053 => 
  (object)array(
     'type' => 'food',
     'producer' =>  106,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Flour',
     'sell_for' => 85,
     'exp' => 4,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10053,
  ),

  10006 => 
  (object)array(
     'type' => 'food',
     'producer' =>  107,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Batter',
     'sell_for' => 270,
     'exp' => 8,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10006,
  ),
  10025 => 
  (object)array(
     'type' => 'food',
     'producer' =>  130,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Chocolate Cake',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 2100,
     'exp' => 18,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10025,
  ),

  10077=> 
  (object)array(
     'type' => 'food',
     'producer' =>  143,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Pie Crust',
     'sell_for' =>586,
     'exp' => 4,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10077,
  ),
  10078 => 
  (object)array(
     'type' => 'food',
     'producer' =>  144,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Apple Filling',
     'sell_for' => 249,
     'exp' => 7,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10078,
  ),
  10079 => 
  (object)array(
     'type' => 'food',
     'producer' =>  145,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Apple Pie',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 1120,
     'exp' => 13,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10079,
  ),

  10080 => 
  (object)array(
     'type' => 'food',
     'producer' =>  146,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Whipped Cream',
     'sell_for' => 880,
     'exp' => 3,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10080,
  ),
  10081 => 
  (object)array(
     'type' => 'food',
     'producer' =>  147,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Basic Cake',
     'sell_for' => 1140,
     'exp' => 6,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10081,
  ),
  10082 => 
  (object)array(
     'type' => 'food',
     'producer' =>  148,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Strawberry Cream Cake',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 1400,
     'exp' => 11,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10082,
  ),

  10026 => 
  (object)array(
     'type' => 'food',
     'producer' =>  118,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Lemon water',
     'sell_for' => 45,
     'exp' => 2,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10026,
  ),
  10027 => 
  (object)array(
     'type' => 'food',
     'producer' =>  119,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Lemonade',
     'sell_for' => 120,
     'exp' => 4,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10027,
  ),
  10028 => 
  (object)array(
     'type' => 'food',
     'producer' =>  120,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Watermelon Lemonade',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 310,
     'exp' => 10,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10028,
  ),

  10002 => 
  (object)array(
     'type' => 'food',
     'producer' =>  149,          
     'giftable' => false,
     'buyable' => false,
     'name' => 'Corn Meal',
     'sell_for' => 120,
     'exp' => 3,
     'map_object' => false,
     'trade_for' => false,  
     'id' => 10002,
  ),

  10001 => 
  (object)array(
     'type' => 'food',
     'producer' =>  150,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Buttermilk',
     'sell_for' => 430,
     'exp' => 6,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10001,
  ),

  10003 => 
  (object)array(
     'type' => 'food',
     'producer' =>  151,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Corn Popovers',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 580,
     'exp' => 11,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10003,
  ),

#  new kitchen recipes

  10090 => 
  (object)array(
     'type' => 'food',
     'producer' =>  190,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Batter fried strawberry',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 400,
     'exp' => 4,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10090,
  ),

  10089 => 
  (object)array(
     'type' => 'food',
     'producer' =>  189,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Floating Island',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 485,
     'exp' => 7,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10089,
  ),

  10088 => 
  (object)array(
     'type' => 'food',
     'producer' =>  188,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Chocolate Mosse',
     'isfinal' => 1,   //   
     'sell_for' => 815,
     'exp' => 15,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10088,
  ),

  10091 => 
  (object)array(
     'type' => 'food',
     'producer' =>  191,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Lemon Yogurt',
     'sell_for' => 530,
     'exp' => 6,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10091,
  ),
    10092 => 
  (object)array(
     'type' => 'food',
     'producer' =>  192,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Lemon Yogurt Filling',
     'sell_for' => 690,
     'exp' => 10,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10092,
  ),
    10093 => 
  (object)array(
     'type' => 'food',
     'producer' =>  193,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Lemon Yogurt Muffins',
     'isfinal' => 1,   //   
     'sell_for' => 1000,
     'exp' => 21,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10093,
  ),


    10085 => 
  (object)array(
     'type' => 'food',
     'producer' =>  185,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Mixed Butter', 
     'sell_for' => 990,
     'exp' => 12,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10085,
  ),
      10086 => 
  (object)array(
     'type' => 'food',
     'producer' =>  186,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Cheese Quiche',
     'isfinal' => 1,   //   
     'sell_for' => 1300,
     'exp' => 15,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10086,
  ),
      10087 => 
  (object)array(
     'type' => 'food',
     'producer' =>  187,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Cheese Fondue',
     'isfinal' => 1,   //   
     'sell_for' => 5500,
     'exp' => 18,
     'map_object' => false,
     'trade_for' => false,
     'id' => 10087,
  ),


#========================== workshop recipes =========================#
  20000 => 
  (object)array(
     'type' => 'utensil',
     'producer' =>  100,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Spatula',
     'isfinal' => 1,   //   是否为最终的产品
     'desc' => 'used for cooking',
     'rp_price' => 5,
     'constructible' =>  false,
     'exp' => 3,
     'map_object' => false,
     'trade_for' => false,
     'id' => 20000,
     'limit_num'    => 1,
  ),
  20001 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  101,          
     'giftable' => false,
     'buyable' => false,
     'name' => 'Wool bolt',
     'sell_for' => 630,
     'exp' => 5,
     'map_object' => false,
     'trade_for' => false,  
     'id' => 20001,
  ),
  20002 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  102,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Wool handkerchief',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 1300,
     'exp' => 7,
     'map_object' => false,
     'trade_for' => false,
     'id' => 20002,
  ),
  20003 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  103,          
     'giftable' => false,
     'buyable' => false,
     'name' => 'Red dye',
     'sell_for' => 270,
     'exp' => 6,
     'map_object' => false,
     'trade_for' => false,  
     'id' => 20003,
  ),
  20004 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  104,          
     'giftable' => false,
     'buyable' => false,
     'name' => 'Red wool bolt',
     'sell_for' => 960,
     'exp' => 11,
     'map_object' => false,
     'trade_for' => false,  
     'id' => 20004,
  ),
  20005 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  105,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Red beret',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 2030,
     'exp' => 16,
     'map_object' => false,
     'trade_for' => false,
     'id' => 20005,
  ),
  20006 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  106,          
     'giftable' => false,
     'buyable' => false,
     'name' => 'Golden dye',
     'sell_for' => 150,
     'exp' => 7,
     'map_object' => false,
     'trade_for' => false,  
     'id' => 20006,
  ),
  20007 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  107,          
     'giftable' => false,
     'buyable' => false,
     'name' => 'Golden wool bolt',
     'sell_for' => 810,
     'exp' => 12,
     'map_object' => false,
     'trade_for' => false,  
     'id' => 20007,
  ),
  20008 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  108,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Golden bow',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 1040,
     'exp' => 15,
     'map_object' => false,
     'trade_for' => false,
     'id' => 20008,
  ),
  20009 => 
  (object)array(
     'type' => 'utensil',
     'producer' =>  109,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Rolling pin',
     'isfinal' => 1,   //   是否为最终的产品
     'desc' => 'used for cooking',
     'rp_price' => 5,
     'constructible' =>  false,
     'exp' => 5,
     'map_object' => false,
     'trade_for' => false,
     'id' => 20009,
     'limit_num'    => 1,
  ),
  20010 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  110,          
     'giftable' => false,
     'buyable' => false,
     'name' => 'Wool thread spindle',
     'sell_for' => 390,
     'exp' => 5,
     'map_object' => false,
     'trade_for' => false,  
     'id' => 20010,
  ),
  20011 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  111,          
     'giftable' => false,
     'buyable' => false,
     'name' => 'Red thread spindle',
     'sell_for' => 690,
     'exp' => 8,
     'map_object' => false,
     'trade_for' => false,  
     'id' => 20011,
  ),
  20012 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  112,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Wool sweater ',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 3100,
     'exp' => 18,
     'map_object' => false,
     'trade_for' => false,
     'id' => 20012,
  ),
  20013 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  113,          
     'giftable' => false,
     'buyable' => false,
     'name' => 'Brown dye',
     'sell_for' => 240,
     'exp' => 9,
     'map_object' => false,
     'trade_for' => false,  
     'id' => 20013,
  ),
  20014 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  114,          
     'giftable' => false,
     'buyable' => false,
     'name' => 'Brown thread spindle',
     'sell_for' => 740,
     'exp' => 13,
     'map_object' => false,
     'trade_for' => false,  
     'id' => 20014,
  ),
  20015 => 
  (object)array(
     'type' => 'utensil',
     'producer' =>  115,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Egg timer',
     'isfinal' => 1,   //   是否为最终的产品
     'desc' => 'used for cooking',
     'rp_price' => 5,
     'constructible' =>  false,
     'exp' => 6,
     'map_object' => false,
     'trade_for' => false,
     'id' => 20015,
     'limit_num'    => 1,
  ),
  20016 => 
  (object)array(
     'type' => 'parts',
     'producer' =>  116,
     'giftable' => false,
     'buyable' => false,
     'name' => 'Teddy bear',
     'isfinal' => 1,   //   是否为最终的产品
     'sell_for' => 4000,
     'exp' => 16,
     'map_object' => false,
     'trade_for' => false,
     'id' => 20016,
  ),

# =================== decors ========================#
  30000 => 
  (object)array(
     'rp_price' => 3,
     'trade_for' => false,
     'exp' => 15,
     'buyable' => true,
     'price' => 0,
     'store_pos' => 3,
     'sell_price' => 300,
     'buy_gift' => true,
     'id' => 30000,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Brown Fence',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 5,
     'level' => 5,
     'size_y' => 2,
     'new_giftable' => true,
     'offset_x' => 1,
     'offset_y' => 17,
  ),
  30001 => 
  (object)array(
     'sell_price' => 23,
     'exp' => 5,
     'buyable' => true,
     'price' => 225,
     'store_pos' => 2,
     'id' => 30001,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'White Fence',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 5,
     'level' => 5,
     'size_y' => 2,
     'offset_x' => 1,
     'offset_y' => 17,
  ),
  30010 => 
  (object)array(
     'sell_price' => 100,
     'exp' => 7,
     'buyable' => true,
     'price' => 1000,
     'store_pos' => 6,
     'id' => 30010,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Direction Post',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 2,
     'level' => 5,
     'size_y' => 2,
     'offset_x' => 0,
     'offset_y' => 50,
  ),
  30011 => 
  (object)array(
     'sell_price' => 30,
     'exp' => 5,
     'buyable' => true,
     'price' => 300,
     'store_pos' => 4,
     'id' => 30011,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Mailbox',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 2,
     'level' => 6,
     'size_y' => 2,
     'offset_x' => 4,
     'offset_y' => 38,
  ),
  30012 => 
  (object)array(
     'sell_price' => 25,
     'exp' => 4,
     'buyable' => true,
     'price' => 250,
     'store_pos' => 7,
     'id' => 30012,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Old Pump',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 3,
     'level' => 6,
     'size_y' => 3,
     'offset_x' => 0,
     'offset_y' => 28,
  ),
  30020 => 
  (object)array(
     'sell_price' => 5,
     'exp' => 1,
     'buyable' => true,
     'price' => 50,
     'store_pos' => 5,
     'id' => 30020,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Stone Floor',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 5,
     'level' => 7,
     'size_y' => 5,
     'offset_x' => 0,
     'offset_y' => 0,
  ),
  30021 => 
  (object)array(
     'sell_price' => 5,
     'exp' => 1,
     'buyable' => true,
     'price' => 50,
     'store_pos' => 8,
     'id' => 30021,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Deco Floor',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 5,
     'level' => 7,
     'size_y' => 5,
     'offset_x' => 0,
     'offset_y' => 0,
  ),
  30030 => 
  (object)array(
     'sell_price' => 7,
     'exp' => 1,
     'buyable' => true,
     'price' => 75,
     'store_pos' => 9,
     'id' => 30030,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Logs',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 3,
     'level' => 8,
     'size_y' => 2,
     'offset_x' => 0,
     'offset_y' => 12,
  ),
  30031 => 
  (object)array(
     'sell_price' => 200,
     'exp' => 24,
     'buyable' => true,
     'price' => 2000,
     'store_pos' => 10,
     'id' => 30031,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Barrel',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 8,
     'level' => 8,
     'size_y' => 6,
     'offset_x' => 6,
     'offset_y' => 10,
  ),
  30032 => 
  (object)array(
     'sell_price' => 120,
     'exp' => 10,
     'buyable' => true,
     'price' => 1200,
     'store_pos' => 11,
     'id' => 30032,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Wine Box',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 4,
     'level' => 9,
     'size_y' => 6,
     'offset_x' => 2,
     'offset_y' => 18,
  ),
  30040 => 
  (object)array(
     'sell_price' => 20,
     'exp' => 4,
     'buyable' => true,
     'price' => 200,
     'store_pos' => 12,
     'id' => 30040,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Purple Flower',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 3,
     'level' => 10,
     'size_y' => 4,
     'offset_x' => 4,
     'offset_y' => 3,
  ),
  30041 => 
  (object)array(
     'sell_price' => 5,
     'exp' => 1,
     'buyable' => true,
     'price' => 50,
     'store_pos' => 13,
     'id' => 30041,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Plant',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 3,
     'level' => 10,
     'size_y' => 2,
     'offset_x' => 4,
     'offset_y' => 5,
  ),
  30042 => 
  (object)array(
     'sell_price' => 5,
     'exp' => 1,
     'buyable' => true,
     'price' => 50,
     'store_pos' => 15,
     'id' => 30042,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Stone',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 2,
     'level' => 11,
     'size_y' => 2,
     'offset_x' => 6,
     'offset_y' => 3,
  ),
  30050 => 
  (object)array(
     'sell_price' => 250,
     'exp' => 27,
     'buyable' => true,
     'price' => 2500,
     'store_pos' => 14,
     'id' => 30050,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Dry Well',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 5,
     'level' => 11,
     'size_y' => 6,
     'offset_x' => 7,
     'offset_y' => 40,
  ),
  30051 => 
  (object)array(
     'sell_price' => 700,
     'exp' => 23,
     'buyable' => true,
     'price' => 0,
     'rp_price' => 7,
     'store_pos' => 16,
     'id' => 30051,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Swing',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 2,
     'level' => 12,
     'size_y' => 4,
     'offset_x' => -6.8,
     'offset_y' => 14.1,
  ),
  30052 => 
  (object)array(
     'sell_price' => 650,
     'exp' => 62,
     'buyable' => true,
     'price' => 6500,
     'store_pos' => 17,
     'id' => 30052,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Car',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 8,
     'level' => 13,
     'size_y' => 7,
     'offset_x' => -2.8,
     'offset_y' => 12.1,
  ),
  30060 => 
  (object)array(
     'sell_price' => 400,
     'exp' => 19,
     'buyable' => true,
     'price' => 0,
     'rp_price'=>4,
     'store_pos' => 18,
     'id' => 30060,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Wood Sign',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 2,
     'level' => 14,
     'size_y' => 4,
     'offset_x' => 0.6,
     'offset_y' => 30,
  ),
  30061 => 
  (object)array(
     'sell_price' => 400,
     'exp' => 19,
     'buyable' => true,
     'rp_price'=> 4,
     'store_pos' => 0,
     'id' => 30061,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Farm Sign',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 2,
     'level' => 4,
     'size_y' => 2,
     'offset_x' => 17.2,
     'offset_y' => 40.1,
  ),
  30062 => 
  (object)array(
     'sell_price' => 20,
     'exp' => 5,
     'buyable' => true,
     'price' => 200,
     'store_pos' => 1,
     'id' => 30062,
     'type' => 'decorations',
     'giftable' => false,
     'name' => 'Farm Sign2',
     'flipable' => true,
     'map_object' => true,
     'size_x' => 2,
     'level' => 4,
     'size_y' => 5,
     'offset_x' => -1.8,
     'offset_y' => 32.1,
  ),
  
#=====================others==================#   
  400001 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'coins',
     'currency price' => 'USD 1.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 1600,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400001,
     'desc' => '1600',
     'name' => 'Stacks of Coins',
     'map_object' => false,
     'store_pos' => 0,
     'price' => 2,
     'ios_product_id' => 'com.funplus.familyfarm.coins1600',
     'google_play_product_id' => 'com.funplus.familyfarm.coins.astack',
  ),
  400002 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'coins',
     'currency price' => 'USD 4.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 4500,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400002,
     'desc' => '4500',
     'name' => 'Pouch of Coins',
     'map_object' => false,
     'store_pos' => 1,
     'price' => 5,
     'ios_product_id' => 'com.funplus.familyfarm.coins4500',
     'google_play_product_id' => 'com.funplus.familyfarm.coins.apouch',
  ),
  400003 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'coins',
     'currency price' => 'USD 19.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 22000,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400003,
     'desc' => '22000',
     'name' => 'Chest of Coins',
     'map_object' => false,
     'store_pos' => 3,
     'price' => 20,
     'ios_product_id' => 'com.funplus.familyfarm.coins22000',
     'google_play_product_id' => 'com.funplus.familyfarm.coins.achest',
  ),
  400011 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'rc',
     'currency price' => 'USD 7.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 80,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400011,
     'desc' => '80 RC',
     'name' => 'Stack of RC',
     'map_object' => false,
     'store_pos' => 1,
     'price' => 8,
     'ios_product_id' => 'com.funplus.familyfarm.rc80',
     'google_play_product_id' => 'com.funplus.familyfarm.rc.astack',
  ),
  400012 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'rc',
     'currency price' => 'USD 14.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 170,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400012,
     'desc' => '170 RC',
     'name' => 'Pouch of RC',
     'map_object' => false,
     'store_pos' => 2,
     'price' => 15,
     'ios_product_id' => 'com.funplus.familyfarm.rc170',
     'google_play_product_id' => 'com.funplus.familyfarm.rc.apouch',
  ),
  400013 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'rc',
     'currency price' => 'USD 99.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 1500,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400013,
     'desc' => '1500 RC',
     'name' => 'Chest of RC',
     'map_object' => false,
     'store_pos' => 5,
     'price' => 60,
     'ios_product_id' => 'com.funplus.familyfarm.rc1500',
     'google_play_product_id' => 'com.funplus.familyfarm.rc.achest',
  ),

/*
  400000 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'coins',
     'currency price' => 'USD 1.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 1600,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400000,
     'desc' => '1600',
     'name' => 'Stack of Coins',
     'map_object' => false,
     'store_pos' => 0,
     'price' => 2,
     'ios_product_id' => 'com.funplus.familyfarm.coins1600',
     'google_play_product_id' => 'com.funplus.familyfarm.coins.astack',
  ),
  400001 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'coins',
     'currency price' => 'USD 9.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 10000,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400001,
     'desc' => '10000',
     'name' => 'Sack of Coins',
     'map_object' => false,
     'store_pos' => 2,
     'price' => 10,
     'ios_product_id' => 'com.funplus.familyfarm.coins10000',
     'google_play_product_id' => 'com.funplus.familyfarm.coins.asack',
  ),
  400001 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'rc',
     'currency price' => 'USD 2.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 12,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400001,
     'desc' => '12 RC',
     'name' => 'Bunch of RC',
     'map_object' => false,
     'store_pos' => 0,
     'price' => 3,
     'ios_product_id' => 'com.funplus.familyfarm.rc12',
     'google_play_product_id' => 'com.funplus.familyfarm.coins.astack',
  ),
  400002 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'coins',
     'currency price' => 'USD 4.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 4500,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400002,
     'desc' => '4500',
     'name' => 'Pouch of Coins',
     'map_object' => false,
     'store_pos' => 1,
     'price' => 5,
     'ios_product_id' => 'com.funplus.familyfarm.coins4500',
     'google_play_product_id' => 'com.funplus.familyfarm.coins.apouch',
  ),

  400004 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'coins',
     'currency price' => 'USD 19.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 22000,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400004,
     'desc' => '22000',
     'name' => 'Chest of Coins',
     'map_object' => false,
     'store_pos' => 3,
     'price' => 20,
     'ios_product_id' => 'com.funplus.familyfarm.coins22000',
     'google_play_product_id' => 'com.funplus.familyfarm.coins.achest',
  ),
  400005 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'rc',
     'currency price' => 'USD 7.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 35,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400005,
     'desc' => '35 RC',
     'name' => 'Stack of RC',
     'map_object' => false,
     'store_pos' => 1,
     'price' => 8,
     'ios_product_id' => 'com.funplus.familyfarm.rc35',
     'google_play_product_id' => 'com.funplus.familyfarm.rc.astack',
  ),
  400006 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'rc',
     'currency price' => 'USD 14.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 75,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400006,
     'desc' => '75 RC',
     'name' => 'Pouch of RC',
     'map_object' => false,
     'store_pos' => 2,
     'price' => 15,
     'ios_product_id' => 'com.funplus.familyfarm.rc75',
     'google_play_product_id' => 'com.funplus.familyfarm.rc.apouch',
  ),
  400007 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'rc',
     'currency price' => 'USD 28.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 160,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400007,
     'desc' => '160 RC',
     'name' => 'Sack of RC',
     'map_object' => false,
     'store_pos' => 3,
     'price' => 29,
     'ios_product_id' => 'com.funplus.familyfarm.rc160',
     'google_play_product_id' => 'com.funplus.familyfarm.rc.asack',
  ),
  400008 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'rc',
     'currency price' => 'USD 69.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 500,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400008,
     'desc' => '500 RC',
     'name' => 'Box of RC',
     'map_object' => false,
     'store_pos' => 4,
     'price' => 54,
     'ios_product_id' => 'com.funplus.familyfarm.rc500',
     'google_play_product_id' => 'com.funplus.familyfarm.rc.abox',
  ),
  400009 => 
  (object)array(
     'type' => 'currency',
     'kind' => 'rc',
     'currency price' => 'USD 99.99',
     'rp_price' => 0,
     'buyable' => true,
     'quantity' => 750,
     'exp' => 0,
     'trade_for' => false,
     'id' => 400009,
     'desc' => '750 RC',
     'name' => 'Chest of RC',
     'map_object' => false,
     'store_pos' => 5,
     'price' => 60,
     'ios_product_id' => 'com.funplus.familyfarm.rc750',
     'google_play_product_id' => 'com.funplus.familyfarm.rc.achest',
  ),
  400010 =>
  (object)array(
	'type' => 'currency',
	'kind' => 'rc',
	'currency price' => 'USD 0.99',
	'buyable' => true,
	'quantity' => 10,
    'name' => '10 RC',
    'desc' => '10 RC',
	'id' => 400010,
	'ios_product_id' => 'com.funplus.familyfarm.newpayer.first',
	'google_play_product_id' => '',
  ),
  400011 =>
  (object)array(
	'type' => 'currency',
	'kind' => 'rc',
	'currency price' => 'USD 3.99',
	'buyable' => true,
	'quantity' => 30,
    'name' => '30 RC',
    'desc' => '30 RC',    
	'id' => 400011,
	'ios_product_id' => 'com.funplus.familyfarm.newpayer.second',
	'google_play_product_id' => '',
 ),
 400012 =>
 (object)array(
	'type' => 'currency',
	'kind' => 'rc',
	'currency price' => 'USD 8.99',
	'buyable' => true,
	'quantity' => 45,
    'name' => '45 RC',
    'desc' => '45 RC',     
	'id' => 400012,
	'ios_product_id' => 'com.funplus.familyfarm.newpayer.third',
	'google_play_product_id' => '',
 ),
 400013 =>
 (object)array(
	'type' => 'currency',
	'kind' => 'rc',
	'currency price' => 'USD 17.99',
	'buyable' => true,
	'quantity' => 110,
    'name'     => '110RC',
    'desc' => '110 RC',
	'id' => 400013,
	'ios_product_id' => 'com.funplus.familyfarm.newpayer.fourth',
	'google_play_product_id' => '',
 ),
 400014 =>
 (object)array(
	'type' => 'currency',
	'kind' => 'rc',
	'currency price' => 'USD 5.99',
	'buyable' => true,
	'quantity' =>20,
    'name' => '20 RC',
    'desc' => '20 RC',      
	'id' => 400014,
	'ios_product_id' => 'com.funplus.familyfarm.starterpack',
	'google_play_product_id' => '',
  ),
*/  


#========================animals===========================#    
600001 => 
      (object)array(
         'isadult'       => 0,       //是否成年
         'feed_times'    => 4,       //未成年时候需要吃几次奶可以长成成熟的动物
         'feed_interval' => 3,       //吃奶间隔（秒）
         'milk_exp'      => 1,       //一次喂奶获得的经验
         'feed_num'  => 3,       	//该动物每次吃的饲料数量
         'eat_interval'  => 300,      //吃饲料的间隔
         'feed_exp'      => 2,      //一次喂食获得的经验
         'product'       => 2000,      //产出产品的ID
         'product_num'   => 1,       //产品的数量 
         'high_eat_times' => 100,
         'high_eat_num' => 300,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 86400,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 50,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2001,  //第三阶段之后的产出产品
         'high_product_num'  => 1,   //第三阶段产出产品数量
         'exp' => 0,                //购买的时候增加的经验            
         'price' => 1500,            //购买价格
         'store_pos' => 2,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600001,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'cow',
		 'tip_offset_y' => 3,
         'giftable' => false,        //不是免费礼物
         'name' => 'Baby Holstein Cow',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 5,
         'level' => 3,
         'size_y' => 5,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 20,
         'yogurt' => 1,          // 酸奶
         'yogurt_rate' => 0.99,  // 产出概率
      ),  

600002 => 
      (object)array(
         'isadult'       => 1,       //是否成年
         'feed_num'  => 3,      //该动物每次吃的饲料数量
         'eat_interval'  => 300,     //吃饲料的间隔
         'feed_exp' => 2,           //一次喂食获得的经验
         'product' => 2000,            //产出产品的ID
         'product_num' => 1,         //产品的数量 
         'high_eat_times' => 100,
         'high_eat_num' => 300,        //到达第三阶段需要吃多少次食物
         'high_eat_interval' => 86400,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 50,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2001,  //第三阶段之后的产出产品
         'high_product_num'  => 1,   //第三阶段产出产品数量
         'exp' => 4,                //购买的时候增加的经验            
         'rp_price' => 12,            //购买价格
         'store_pos' => 3,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600002,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'cow',
         'giftable' => false,        //不是免费礼物
         'name' => 'Holstein Cow',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 5, 
         'level' => 3,
         'size_y' => 5,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 18,
         'yogurt' => 1,          // 酸奶
         'yogurt_rate' => 0.99,  // 产出概率

      ),  
600011 => 
      (object)array(
         'isadult'       => 0,       //是否成年
         'feed_times'    => 3,       //未成年时候需要吃几次奶可以长成成熟的动物
         'feed_interval' => 3,       //吃奶间隔（秒）
         'milk_exp'      => 1,       //一次喂奶获得的经验
         'feed_num'  => 2,          //该动物每次吃的饲料数量
         'eat_interval'  => 120,      //吃饲料的间隔
         'feed_exp'      => 2,      //一次喂食获得的经验
         'product'       => 2002,      //产出产品的ID
         'product_num'   => 1,       //产品的数量 
         'high_eat_times' => 100,
         'high_eat_num' => 200,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 86400,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 50,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2003,  //第三阶段之后的产出产品
         'high_product_num'  => 1,   //第三阶段产出产品数量
         'exp' => 0,                //购买的时候增加的经验            
         'price' => 1000,            //购买价格
         'store_pos' => 0,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600011,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'chicken',
         'tip_offset_y' => 3,
         'giftable' => false,        //不是免费礼物
         'name' => 'Baby Chicken',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 4,
         'level' => 1,
         'size_y' => 4,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 40,
		 'mayonnaise' => 1,
		 'mayonnaise_rate' => 0.9,
      ),  

600012 => 
      (object)array(
         'isadult'       => 1,       //是否成年
         'feed_num'  => 2,          //该动物每次吃的饲料数量
         'eat_interval'  => 120,      //吃饲料的间隔
         'feed_exp'      => 2,      //一次喂食获得的经验
         'product'       => 2002,      //产出产品的ID
         'product_num'   => 1,       //产品的数量 
         'high_eat_times' => 100,
         'high_eat_num' => 200,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 86400,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 50,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2003,  //第三阶段之后的产出产品
         'high_product_num'  => 1,   //第三阶段产出产品数量
         'exp' => 5,                //购买的时候增加的经验            
         'rp_price' => 10,            //购买价格
         'store_pos' => 1,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600012,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'chicken',
         'giftable' => false,        //不是免费礼物
         'name' => 'Chicken',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 4,
         'level' => 1,
         'size_y' => 4,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 40,
		 'mayonnaise' => 1,
		 'mayonnaise_rate' => 0.9,
      ),  
600021 => 
      (object)array(
         'isadult'       => 0,       //是否成年
         'feed_times'    => 6,       //未成年时候需要吃几次奶可以长成成熟的动物
         'feed_interval' => 3,       //吃奶间隔（秒）
         'milk_exp'      => 1,       //一次喂奶获得的经验
         'feed_num'  => 6,          //该动物每次吃的饲料数量
         'eat_interval'  => 3600,      //吃饲料的间隔
         'feed_exp'      => 6,      //一次喂食获得的经验
         'product'       => 2004,      //产出产品的ID
         'product_num'   => 2,       //产品的数量 
         'high_eat_times' => 100,
         'high_eat_num' => 600,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 86400,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 45,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2005,  //第三阶段之后的产出产品
         'high_product_num'  => 1,   //第三阶段产出产品数量
         'exp' => 0,                //购买的时候增加的经验            
         'price' => 10000,            //购买价格
         'store_pos' => 7,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600021,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'rabbit',
         'tip_offset_y' => 3,
         'giftable' => false,        //不是免费礼物
         'name' => 'Baby Rabbit',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 4,
         'level' => 11,
         'size_y' => 4,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 40,
      ),  

600022 => 
      (object)array(
         'isadult'       => 1,       //是否成年
         'feed_num'  => 6,          //该动物每次吃的饲料数量
         'eat_interval'  => 3600,      //吃饲料的间隔
         'feed_exp'      => 6,      //一次喂食获得的经验
         'product'       => 2004,      //产出产品的ID
         'product_num'   => 2,       //产品的数量 
         'high_eat_times' => 100,
         'high_eat_num' => 600,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 86400,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 45,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2005,  //第三阶段之后的产出产品
         'high_product_num'  => 1,   //第三阶段产出产品数量
         'exp' => 8,                //购买的时候增加的经验            
         'rp_price' => 48,            //购买价格
         'store_pos' => 8,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600022,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'rabbit',
         'giftable' => false,        //不是免费礼物
         'name' => 'Rabbit',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 4,
         'level' => 11,
         'size_y' => 4,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 55,
      ),  
/*
600031 => 
      (object)array(
         'isadult'       => 0,       //是否成年
         'feed_times'    => 5,       //未成年时候需要吃几次奶可以长成成熟的动物
         'feed_interval' => 3,       //吃奶间隔（秒）
         'milk_exp'      => 2,       //一次喂奶获得的经验
         'feed_num'  => 10,          //该动物每次吃的饲料数量
         'eat_interval'  => 900,      //吃饲料的间隔
         'feed_exp'      => 3,      //一次喂食获得的经验
         'product'       => 2000,      //产出产品的ID
         'product_num'   => 2,       //产品的数量 
         'high_eat_times' => 40,
         'high_eat_num' => 200,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 72000,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 110,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2001,  //第三阶段之后的产出产品
         'high_product_num'  => 1,   //第三阶段产出产品数量
         'exp' => 8,                //购买的时候增加的经验            
         'price' => 9000,            //购买价格
         'store_pos' => 7,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600031,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'cow',
         'tip_offset_y' => 3,
         'giftable' => false,        //不是免费礼物
         'name' => 'Baby Montbeliard Cow',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 4,
         'level' => 9,
         'size_y' => 4,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 20,
      ),  

600032 => 
      (object)array(
         'isadult'       => 1,       //是否成年
         'feed_num'  => 10,          //该动物每次吃的饲料数量
         'eat_interval'  => 900,      //吃饲料的间隔
         'feed_exp'      => 3,      //一次喂食获得的经验
         'product'       => 2000,      //产出产品的ID
         'product_num'   => 2,       //产品的数量 
         'high_eat_times' => 40,
         'high_eat_num' => 200,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 72000,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 110,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2001,  //第三阶段之后的产出产品
         'high_product_num'  => 1,   //第三阶段产出产品数量
         'exp' => 8,                //购买的时候增加的经验            
         'rp_price' => 15,            //购买价格
         'store_pos' => 8,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600032,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'cow',
         'giftable' => false,        //不是免费礼物
         'name' => 'Montbeliard Cow',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 4,
         'level' => 9,
         'size_y' => 4,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 18,
      ),  
*/
600041 => 
      (object)array(
         'isadult'       => 0,       //是否成年
         'feed_times'    => 5,       //未成年时候需要吃几次奶可以长成成熟的动物
         'feed_interval' => 3,       //吃奶间隔（秒）
         'milk_exp'      => 2,       //一次喂奶获得的经验
         'feed_num'  => 8,          //该动物每次吃的饲料数量
         'eat_interval'  => 14400,      //吃饲料的间隔
         'feed_exp'      => 7,      //一次喂食获得的经验
         'product'       => 2006,      //产出产品的ID
         'product_num'   => 2,       //产品的数量 
         'high_eat_times' => 100,
         'high_eat_num' => 700,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 86400,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 55,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2007,  //第三阶段之后的产出产品
         'high_product_num'  => 2,   //第三阶段产出产品数量
         'exp' => 0,                //购买的时候增加的经验            
         'price' => 12600,            //购买价格
         'store_pos' => 9,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600041,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'pig',
         'tip_offset_y' => 3,
         'giftable' => false,        //不是免费礼物
         'name' => 'Baby Pig',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 4,
         'level' => 14,
         'size_y' => 4,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 18,
      ),  

600042 => 
      (object)array(
         'isadult'       => 1,       //是否成年
         'feed_num'  => 8,          //该动物每次吃的饲料数量
         'eat_interval'  => 14400,      //吃饲料的间隔
         'feed_exp'      => 7,      //一次喂食获得的经验
         'product'       => 2006,      //产出产品的ID
         'product_num'   => 2,       //产品的数量 
         'high_eat_times' => 88,
         'high_eat_num' => 700,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 86400,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 55,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2007,  //第三阶段之后的产出产品
         'high_product_num'  => 2,   //第三阶段产出产品数量
         'exp' => 9,                //购买的时候增加的经验            
         'rp_price' => 52,            //购买价格
         'store_pos' => 10,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600042,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'pig',
         'giftable' => false,        //不是免费礼物
         'name' => 'Pig',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 4,
         'level' => 15,
         'size_y' => 4,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 18,
      ), 
600061 => 
      (object)array(
         'isadult'       => 0,       //是否成年
         'feed_times'    => 5,       //未成年时候需要吃几次奶可以长成成熟的动物
         'feed_interval' => 3,       //吃奶间隔（秒）
         'milk_exp'      => 2,       //一次喂奶获得的经验
         'feed_num'  => 10,          //该动物每次吃的饲料数量
         'eat_interval'  => 600,      //吃饲料的间隔
         'feed_exp'      => 3,      //一次喂食获得的经验
         'product'       => 2010,      //产出产品的ID
         'product_num'   => 2,       //产品的数量 
         'high_eat_times' => 100,
         'high_eat_num' => 1000,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 86400,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 60,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2011,  //第三阶段之后的产出产品
         'high_product_num'  => 1,   //第三阶段产出产品数量
         'exp' => 8,                //购买的时候增加的经验            
         'price' => 5000,            //购买价格
         'store_pos' => 5,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600061,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'goat',
         'tip_offset_y' => 3,
         'giftable' => false,        //不是免费礼物
         'name' => 'Baby Boer Goat',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 4,
         'level' => 7,
         'size_y' => 4,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 20,
         'yogurt' => 1,          // 酸奶
         'yogurt_rate' => 0.99,  // 产出概率         
      ),  

600062 => 
      (object)array(
         'isadult'       => 1,       //是否成年
         'feed_num'  => 10,          //该动物每次吃的饲料数量
         'eat_interval'  => 600,      //吃饲料的间隔
         'feed_exp'      => 3,      //一次喂食获得的经验
         'product'       => 2010,      //产出产品的ID
         'product_num'   => 2,       //产品的数量 
         'high_eat_times' => 100,
         'high_eat_num' => 1000,     //到达第三阶段需要吃多少食物
         'high_eat_interval' => 86400,  //第三阶段吃食物的间隔
         'high_feed_exp'     => 60,   //到达第三阶段后喂养一次的经验
         'high_product'      => 2011,  //第三阶段之后的产出产品
         'high_product_num'  => 1,   //第三阶段产出产品数量
         'exp' => 8,                //购买的时候增加的经验            
         'rp_price' => 27,            //购买价格
         'store_pos' => 6,        //该属性控制的是物品在商店中的排序位置，数值越小，在该类别下，排越前面
         'id' => 600062,             //物品的ID
         'type' => 'animals',        //类型
         'kind' => 'goat',
         'giftable' => false,        //不是免费礼物
         'name' => 'Boer Goat',  
         'flipable' => true,
         'map_object' => true,
         'size_x' => 4,
         'level' => 7,
         'size_y' => 4,
         'offset_x' => 0,
         'offset_y' => 0,
         'walk_speed' => 18,
         'yogurt' => 1,          // 酸奶
         'yogurt_rate' => 0.99,  // 产出概率         
      ),   


#=============================materials==============================#

  7000001 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000001,
     'level' => 1,
     'map_object' => false,
     'name' => 'Metal',
     'rp_price' => 4,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000002 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000002,
     'level' => 1,
     'map_object' => false,
     'name' => 'Wood',
     'rp_price' => 3,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000003 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000003,
     'level' => 1,
     'map_object' => false,
     'name' => 'Nails',
     'rp_price' => 3,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000004 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000004,
     'level' => 1,
     'map_object' => false,
     'name' => 'Stone',
     'rp_price' => 3,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000005 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000005,
     'level' => 1,
     'map_object' => false,
     'name' => 'Rope',
     'rp_price' => 3,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000006 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000006,
     'level' => 1,
     'map_object' => false,
     'name' => 'Salt',
     'rp_price' => 4,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000007 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000007,
     'level' => 1,
     'map_object' => false,
     'name' => 'Sugar',
     'rp_price' => 4,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000008 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000008,
     'level' => 1,
     'map_object' => false,
     'name' => 'Ground pepper',
     'rp_price' => 4,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
/*
  7000009 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000009,
     'level' => 1,
     'map_object' => false,
     'name' => 'Blue mold',
     'rp_price' => 2,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
*/
  7000011 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000011,
     'level' => 1,
     'map_object' => false,
     'name' => 'Flask',
     'rp_price' => 4,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000012 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000012,
     'level' => 1,
     'map_object' => false,
     'name' => 'Hammer',
     'rp_price' => 4,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000013 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000013,
     'level' => 1,
     'map_object' => false,
     'name' => 'Silver',
     'rp_price' => 4,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000014 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000014,
     'level' => 1,
     'map_object' => false,
     'name' => 'Toolbox',
     'rp_price' => 4,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),
  7000015 => (object)array(
     'buy_gift' => true,
     'buyable' => true,
     'exp' => 0,
     'gift_level' => 1,
     'gift_priority' => 2,
     'giftable' => true,
     'id' => 7000015,
     'level' => 1,
     'map_object' => false,
     'name' => 'Paint',
     'rp_price' => 4,
     'trade_for' => false,
     'request' => true,
     'type' => 'materials',
     'store_pos' => 0,
  ),

#=============== land ==================#
  
5900001 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' =>  5900001,
    'name' => 'Coming Soon',
    ),

5900002 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' =>  5900002,
    'name' => 'Coming Soon',
    ),

5900003 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900003,
    'name' => 'Coming Soon',
    ),

5900004 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900004,
    'name' => 'Coming Soon',
    ),

5900005 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900005,
    'name' => 'Coming Soon',
    ),

5900006 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900006,
    'name' => 'Coming Soon',
    ),

5900007 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900007,
    'name' => 'Coming Soon',
    ),

5900008 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900008,
    'name' => 'Coming Soon',
    ),

5900009 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900009,
    'name' => 'Coming Soon',
    ),
    
5900010 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900010,
    'name' => 'Coming Soon',
    ),
    
5900011 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900011,
    'name' => 'Coming Soon',
    ),
    
5900012 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900012,
    'name' => 'Coming Soon',
    ),
    
5900013 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900013,
    'name' => 'Coming Soon',
    ),
    
5900014 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900014,
    'name' => 'Coming Soon',
    ),
    
5900015 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900015,
    'name' => 'Coming Soon',
    ),
5900016 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900016,
    'name' => 'Coming Soon',
    ),
5900017 => (object)array(
    'type'=>'block',
    'plot_num' => 5,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900017,
    'name' => 'Land6:Baby cow',
    ),
5900018 => (object)array(
    'type'=>'block',
    'plot_num' => 5,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900018,
    'name' => 'Land5:Fruit Trees',
    ),
5900019 => (object)array(
    'type'=>'block',
    'plot_num' => 5,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900019,
    'name' => 'Land4:Workshop',
    ),
5900020 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900020,
    'name' => 'Coming Soon',
    ),
5900021 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900021,
    'name' => 'Coming Soon',
    ),
5900022 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900022,
    'name' => 'Coming Soon',
    ),
5900023 => (object)array(
    'type'=>'block',
    'plot_num' => 5,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900023,
    'name' => 'Land1:Old Kitchen',
    ),
5900024 => (object)array(
    'type'=>'block',
    'plot_num' => 5,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900024,
    'name' => 'Land3:Silo',
    ),
5900025 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900025,
    'name' => 'Coming Soon',
    ),
5900026 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900026,
    'name' => 'Coming Soon',
    ),
5900027 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900027,
    'name' => 'Coming Soon',
    ),
5900028 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900028,
    'name' => 'Coming Soon',
    ),
5900029 => (object)array(
    'type'=>'block',
    'plot_num' => 5,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900029,
    'name' => 'Land2:Water Well',
    ),
5900030 => (object)array(
    'type'=>'block',
    'plot_num' => 7,
    'buyable'=>false,
    'size_x'=>20,
    'size_y'=>20,
    'id' => 5900030,
    'name' => 'Coming Soon',
    ),



# =================== consumables====================#
# fire
8000001 => (object)array(
	'kind' => 'fire',
	'trade_for' => false,
    'quantity' => 1,
	'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
	'buy_gift' => true,
	'id' => 8000001,
	'desc' => 'Crafting buidings need fire!',
	'giftable' => true,
    'buyable' => false,
	'show_name' => false,
	'type' => 'automation',
	'map_object' => false,
	'store_pos' => -1,
	'name' => '1 Fire', 
),
8000002 => (object)array(
    'rp_price' => 6,
    'kind' => 'fire',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 2,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000002,
    'desc' => 'Crafting buidings need fire!',
    'giftable' => false,
    'show_name' => false,
    'type' => 'automation',
    //'buyable' => true,
    'map_object' => false,
    'store_pos' => 1,
    'name' => '2 Fire',
),
8000003 => (object)array(
    'rp_price' => 16,
    'kind' => 'fire',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 10,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000003,
    'desc' => 'Crafting buidings need fire!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 2,
    'name' => '10 Fire',
),
8000004 => (object)array(
    'rp_price' => 20,
    'kind' => 'fire',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 15,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000004,
    'desc' => 'Crafting buidings need fire!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 3,
    'name' => '15 Fire',
),

# water
8000011 => (object)array(
	'kind' => 'water',
	'trade_for' => false,
	'quantity' => 1,
	'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
	'buy_gift' => true,
	'id' => 8000011,
    'desc' => 'Water is vital for crops and crafting!',
	'giftable' => true,
    'buyable' => false,
	'show_name' => false,
	'type' => 'automation',
	'map_object' => false,
	'store_pos' => -1,
	'name' => '1 Water',
),
8000012 => (object)array(
    'rp_price' => 6,
    'kind' => 'water',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 5,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000012,
    'desc' => 'Water is vital for crops and crafting!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 1,
    'name' => '5 Water',
),
8000013 => (object)array(
    'rp_price' => 10,
    'kind' => 'water',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 10,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000013,
    'desc' => 'Water is vital for crops and crafting!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 2,
    'name' => '10 Water',
),
8000014 => (object)array(
    'rp_price' => 26,
    'kind' => 'water',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 30,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000014,
    'desc' => 'Water is vital for crops and crafting!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 3,
    'name' => '30 Water',
),
#baby bottle
8000021 => (object)array(
    'kind' => 'food',
    'trade_for' => false,
    'quantity' => 1,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000021,
    'dest_id' => 8000021,
    'desc' => 'Feed hungry baby animals!',
    'giftable' => true,
    'buyable' => false,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => -1,
    'name' => 'Baby bottle',
),
8000022 => (object)array(
    'rp_price' => 6,
    'kind' => 'food',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 2,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000022,
    'dest_id' => 8000021,
    'desc' => 'Feed hungry baby animals!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 1,
    'name' => '2 Baby bottles',
),
8000023 => (object)array(
    'rp_price' => 14,
    'kind' => 'food',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 5,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000023,
    'dest_id' => 8000021,
    'desc' => 'Feed hungry baby animals!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 2,
    'name' => '5 Baby bottles',
),
8000024 => (object)array(
    'rp_price' => 20,
    'kind' => 'food',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 10,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000024,
    'dest_id' => 8000021,
    'desc' => 'Feed hungry baby animals!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 3,
    'name' => '10 Baby bottles',
),
# feeds
8000031 => (object)array(
    'kind' => 'forage',
    'trade_for' => false,
    'quantity' => 1,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000031,
    'desc' => 'Adult animals crave feed!',
    'giftable' => true,
    'buyable' => false,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => -1,
    'name' => '1 Feed',
),  
8000032 => (object)array(
    'rp_price' => 2,
    'kind' => 'forage',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 5,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000032,
    'desc' => 'Adult animals crave feed!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 4,
    'name' => '5 Feed',
),  
8000033 => (object)array(
    'rp_price' => 4,
    'kind' => 'forage',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 15,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000033,
    'desc' => 'Adult animals crave feed!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 5,
    'name' => '15 Feed',
),  
8000034 => (object)array(
    'rp_price' => 6,
    'kind' => 'forage',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 25,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000034,
    'desc' => 'Adult animals crave feed!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'automation',
    'map_object' => false,
    'store_pos' => 6,
    'name' => '25 Feed',
),  

#fertilizer
8000041 => (object)array(
    'kind' => 'fertilizer',
    'trade_for' => false,
    'quantity' => 25,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000041,
	'add_object' => 8100001,
    'desc' => 'Fertilizer allows bigger harvest!',
    'giftable' => true,
    'buyable' => false,
    'show_name' => false,
    'type' => 'special_events',
    'effect' => 'double',
    'map_object' => false,
    'store_pos' => -1,
    'name' => '1 Double Fertilizer',
),  
8000042 => (object)array(
    'rp_price' => 4,
    'kind' => 'fertilizer',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 2,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000042,
	'add_object' => 8100001,
    'desc' => 'Fertilizer allows bigger harvest!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'special_events',
    'effect' => 'double',
    'map_object' => false,
    'store_pos' => 4,
    'name' => '2 Double Fertilizer',
),  
8000043 => (object)array(
    'rp_price' => 16,
    'kind' => 'fertilizer',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 10,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000043,
	'add_object' => 8100001,
    'desc' => 'Fertilizer allows bigger harvest!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'special_events',
    'effect' => 'double',
    'map_object' => false,
    'store_pos' => 5,
    'name' => '10 Double Fertilizer',
),  
8000044 => (object)array(
    'rp_price' => 30,
    'kind' => 'fertilizer',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 25,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000044,
	'add_object' => 8100001,
    'desc' => 'Fertilizer allows bigger harvest!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'special_events',
    'effect' => 'double',
    'map_object' => false,
    'store_pos' => 6,
    'name' => '25 Double Fertilizer',
),  

#speedgrow
8000051 => (object)array(
    'kind' => 'fertilizer',
    'trade_for' => false,
    'quantity' => 1,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000051,
	'add_object' => 8100002,
    'desc' => 'Speed-grow makes crops ready to harvest instantly!',
    'giftable' => true,
    'buyable' => false,
    'show_name' => false,
    'type' => 'special_events',
    'effect' => 'finish',
    'map_object' => false,
    'store_pos' => -1,
    'name' => '1 Speed-grow',
),  
8000052 => (object)array(
    'rp_price' => 6,
    'kind' => 'fertilizer',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 2,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000052,
	'add_object' => 8100002,
    'desc' => 'Speed-grow makes crops ready to harvest instantly!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'special_events',
    'effect' => 'finish',
    'map_object' => false,
    'store_pos' => 7,
    'name' => '2 Speed-grow',
),  
8000053 => (object)array(
    'rp_price' => 20,
    'kind' => 'fertilizer',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 10,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000053,
	'add_object' => 8100002,
    'desc' => 'Speed-grow makes crops ready to harvest instantly!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'special_events',
    'effect' => 'finish',
    'map_object' => false,
    'store_pos' => 8,
    'name' => '10 Speed-grow',
),  
8000054 => (object)array(
    'rp_price' => 40,
    'kind' => 'fertilizer',
    'exp' => 10,
    'trade_for' => false,
    'quantity' => 25,
    'price' => 0,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',    //barn or inventory
    'buy_gift' => true,
    'id' => 8000054,
	'add_object' => 8100002,
    'desc' => 'Speed-grow makes crops ready to harvest instantly!',
    'giftable' => false,
    //'buyable' => true,
    'show_name' => false,
    'type' => 'special_events',
    'effect' => 'finish',
    'map_object' => false,
    'store_pos' => 9,
    'name' => '25 Speed-grow',
),  

# ========================== fertilizer ============================# 
8100001 => 
  (object)array(
     'kind' => 'fertilizer',
     'action' => 'fertilize',
     'id' => 8100001,
     'desc' => 'double products',
     'giftable' => false,
     'name' => 'Double Fertilizer',
     'trade_for' => false,
     'type' => 'fertilizer',
	 'effect' => 'double',
     'map_object' => true,
	 'limit_num'	=> 1,
     'size_x' => 4,
     'size_y' => 4,
     'offset_x' => -3,
     'offset_y' => 16,
     'buyable' => false,
     'source' => (object)array(
        0 => 8000041,
        1 => 8000042,
        2 => 8000043,
        3 => 8000044,
    ),
),
8100002 => 
  (object)array(
     'kind' => 'fertilizer',
     'action' => 'fertilize',
     'id' => 8100002,
     'desc' => 'finish products',
     'giftable' => false,
     'name' => 'Finish Fertilizer',
     'trade_for' => false,
     'type' => 'fertilizer',
	 'effect' => 'finish',
     'map_object' => true,
	 'limit_num'	=> 1,
     'size_x' => 4,
     'size_y' => 4,
     'offset_x' => -3,
     'offset_y' => 16,
     'buyable' => false,
     'source' => (object)array(
        0 => 8000051,
        1 => 8000052,
        2 => 8000053,
        3 => 8000054,
    ),
  ),

8100003 => 
  (object)array(
     'id' => 8100003,
     'desc' => 'Make feed for your hungry animals!',
     'giftable' => false,
     'name' => 'Feedmachine',
     'trade_for' => false,
     'type' => 'feeder',
     'map_object' => true,
	 'limit_num'	=> 1,
     'size_x' => 11,
     'size_y' => 7,
     'buyable' => false,
     'img_width' => 221,
     'img_height' => 259,
  ),
8100004 => 
  (object)array(
     'id' => 8100004,
     'giftable' => false,
     'name' => 'Kitchen',
     'trade_for' => false,
     'type' => 'kitchen',
     'map_object' => true,
	 'limit_num'	=> 1,
     'size_x' => 10,
     'size_y' => 10,
     'buyable' => false,
     'flipable' => true,
     'img_width' => 316,
     'img_height' => 294,
  ),
8100005 => 
  (object)array(
     'id' => 8100005,
     'giftable' => false,
     'name' => 'Market',
     'trade_for' => false,
     'type' => 'market',
     'map_object' => true,
	 'limit_num'	=> 1,
     'size_x' => 5,
     'size_y' => 5,
     'buyable' => false,
     'flipable' => true,          
  ),

#==============================buildings===========================#

8100006 => 
  (object)array(
     'id' => 8100006,
     'giftable' => false,
     'name' => 'Workshop',
     'class_name' => 'workshop',
     'type' => 'workshop',
     'constructible' =>  true,
     'tall_object' => true,
     'need_neighbor_num' => 4,
     'neighbor_price' => 1,
     'need_invite' => true,
     'materials' => (object)array(
         '7000001' => 3,
         '7000002' => 3,
         '7000003' => 3,    
         ),
     'map_object' => true,
	 'limit_num'	=> 1,
     'size_x' => 10,
     'size_y' => 10,
     'buyable' => false,
     'flipable' => true,
     'img_width' => 253,
     'img_height' => 301,
	),
# stove
8100007 => 
  (object)array(
     'id' => 8100007,
     'name' => 'Stove',
     'store_pos'=>0,
     'desc' => 'Harvest 10 more fire!',
     'class_name' => 'stove',
     'tall_object' => true,
     'type' => 'construction',
     'rp_price' => 40,
     'price' => 8000,
     "level" =>13,
     'level_price' => (object)array(
         1 => 8000,
         2 => 12000,
         3 => 20000,
         4 => 30000,
         ),
     'level_num'=> (object)array(   //等级3-4时最多拥有1个，等级5-14时最多拥有2个，等级15-24时最多拥有3个，等级大于等于25时最多拥有4个
         1 => (object)array(
             'min'=>13,'max'=>20
             ),
         2 => (object)array(
             'min' => 21,'max' => 30
             ),
         3 => (object)array(
            'min' => 31,'max' => 40
             ),
         4 => (object)array(
            'min' => 41
             ),
         ),    
     'constructible' =>  true,
     'need_neighbor_num' => 4,
     'neighbor_price' => 2,
     'need_invite' => true,
     'materials' => (object)array(
         '7000015' => 4,
         '7000001' => 4,
         '7000002' => 4,
         ),
     'buyable' => true,
     'map_object' => true,
	 'interval' => 14400,
	 'max_fire'=> 10,
     'size_x' => 5,
     'size_y' => 10,
     'flipable' => true,
     'img_width' => 253,
     'img_height' => 301,
	),

# well
8100008 => 
  (object)array(
     'id' => 8100008,
     'name' => 'Well',
     'store_pos'=>2,
     'desc' => 'Harvest 10 more water!',
     'class_name' => 'well',
     'tall_object' => true,
     'type' => 'construction',
     'rp_price' => 40,
     'price' => 10000,
     'level'=> 18,
	 'level_price' => (object)array(
		 1 => 10000,
		 2 => 25000,
		 3 => 40000,
		 4 => 50000,
		 ),
     'level_num'=> (object)array(   //等级3-4时最多拥有1个，等级5-14时最多拥有2个，等级15-24时最多拥有3个，等级大于等于25时最多拥有4个
         1 => (object)array(
             'min'=>7,'max'=>17
             ),
         2 => (object)array(
             'min' => 18,'max' => 24
             ),
         3 => (object)array(
            'min' => 25,'max' => 35
             ),
         4 => (object)array(
            'min' => 36
             ),
         ),
     'constructible' =>  true,
     'need_neighbor_num' => 2,
     'neighbor_price' => 2,
     'need_invite' => true,
     'materials' => (object)array(
         '7000004' => 2,
         '7000005' => 2,
         ),
     'buyable' => true,
     'map_object' => true,
	 'interval' => 14400,
	 'max_water'=> 10,
     'size_x' => 5,
     'size_y' => 5,
     'flipable' => true,
     'img_width' => 253,
     'img_height' => 301,     
	),

# silo
	8100009 => 
	(object)array(
		'id' => 8100009,
		'name' => 'Silo',
        'desc' => 'Increase Feed Capacity!',
		'type' => 'construction',
        'class_name' => 'feedsilo',
        'tall_object' => true,
		'constructible' =>  true,
		'need_neighbor_num' => 4,
		'neighbor_price' => 2,
		'buyable' => false,
        'price' => 10000,
        'level' => 21,
		'need_invite' => true,
		'map_object' => true,
		'size_x' => 5,
		'size_y' => 5,
		'flipable' => true,
		'img_width' => 253,
		'img_height' => 301,
         'level_num'=> (object)array(   //等级3-4时最多拥有1个，等级5-14时最多拥有2个，等级15-24时最多拥有3个，等级大于等于25时最多拥有4个
         1 => (object)array(
             'min'=>9,'max'=>100,
             ),
             ),    
		'materials' => (object)array(     // lv0--lv1
			'7000003' => 3,
			'7000002' => 3,
            '7000012' => 3,
			),

		'upgrade' => (object)array(
			'max_lv' => 3,
			'level' => (object)array(      // upgrade need player's lv
				'2' => 18,
				'3' => 30,
				),
			'materials' => (object)array(
				'2' => (object)array(
					'7000001' => 4,
                    '7000013' => 4,
                    '7000014' => 4,
					'coins' => 50000,
					),
				'3' => (object)array(
					'7000001' => 5,
                    '7000002' => 5,
                    '7000014' => 5,
					'coins' => 100000,
					),
				),
			),
		'skill' => (object)array(
			'1' => 5,
			'2' => 10,
			'3' => 15,
			),
		),

# waterthrough
	8100010 => 
	(object)array(
		'id' => 8100010,
		'name' => 'Animal Trough',
        'store_pos'=>1,
        'desc' => 'Increase Animal Population Capacity!',
		'type' => 'construction',
        'class_name' => 'watertrough',
        'tall_object' => true,
		'constructible' =>  true,
		'need_neighbor_num' => 4,
		'neighbor_price' => 2,
		'buyable' => true,
		'price' => 10000,
        'level' => 10,
        'need_invite' => true,
		'map_object' => true,
		'size_x' => 10,
		'size_y' => 10,
		'flipable' => true,
		'img_width' => 253,
		'img_height' => 301,
         'level_num'=> (object)array(   //等级3-4时最多拥有1个，等级5-14时最多拥有2个，等级15-24时最多拥有3个，等级大于等于25时最多拥有4个
         1 => (object)array(
             'min'=>10,'max'=>100
             ),
         ),    
		'materials' => (object)array(
			'7000001' => 3,
			'7000004' => 3,
            '7000015' => 3,
			),

		'upgrade' => (object)array(
			'max_lv' => 3,
			'level' => (object)array(
				'2' => 16,
				'3' => 25,
				),
			'materials' => (object)array(
				'2' => (object)array(
					'7000002' => 4,
                    '7000005' => 4,
                    '7000003' => 4,
					'coins' => 50000,
					),
				'3' => (object)array(
					'7000014' => 5,
                    '7000013' => 5,
                    '7000012' => 5,
					'coins' => 100000,
					),
				),
			),
		'skill' => (object)array(
			'1' => 5,
			'2' => 10,
			'3' => 15,
			),
		),

# yogurt machine

8100012 => 
  (object)array(
     'id' => 8100012,
     'name' => 'Yogurt Creamery',
     'class_name' => 'yogurt_machine',
     'tall_object' => true,
     'type' => 'construction',
     'constructible' =>  true,
     'need_neighbor_num' => 0,
     'neighbor_price' => 1,
     'need_invite' => false,
     'map_object' => true,
     'kind' => 'construction',
     'buyable' => false,
     'limit_num' => 1,
     'size_x' => 5,
     'size_y' => 5,
     'price' =>1,
     'level' => 1,
     'flipable' => true,
     'img_width' => 246,
     'img_height' => 261,
     'level_num'=> (object)array(   //等级3-4时最多拥有1个，等级5-14时最多拥有2个，等级15-24时最多拥有3个，等级大于等于25时最多拥有4个
             1 => (object)array(
             'min'=>7,'max'=>100,
             ),
         ),      
     'materials' => (object)array(
            '7000013' => 2,
            '7000014' => 2,
            '7000003' => 2,
     ),
     'cond' => (object)array(
            '8' => 2,      //   'level' 需要有多少成年 dairy 动物
            '50' => 5, 
     ),
     'product' => 4000,
     'amount' => 3,
     'milk_max' => 40,
     'support_kind' => 'cow,goat',   // 支持类型
),

8100013 => 
  (object)array(
     'id' => 8100013,
     'name' => 'mayonnaise_machine',
     'class_name' => 'mayonnaise_machine',
     'tall_object' => true,
     'type' => 'construction',
     'constructible' =>  true,
     'need_neighbor_num' => 0,
     'neighbor_price' => 1,
     'need_invite' => false,
     'map_object' => true,
     'kind' => 'construction',
     'buyable' => false,
     'limit_num' => 1,
     'size_x' => 5,
     'size_y' => 5,
     'price' =>1,
     'level' => 1,
     'flipable' => true,
     'img_width' => 246,
     'img_height' => 261,
     'level_num'=> (object)array(   //等级3-4时最多拥有1个，等级5-14时最多拥有2个，等级15-24时最多拥有3个，等级大于等于25时最多拥有4个
             1 => (object)array(
             'min'=>7,'max'=>100,
             ),
         ),      
     'materials' => (object)array(
            '7000013' => 2,
            '7000014' => 2,
            '7000003' => 2,
     ),
     'cond' => (object)array(
            '8' => 2,      //   'level' 需要有多少成年 dairy 动物
            '50' => 5, 
     ),
     'product' => 4001,
     'amount' => 3,
     'mayonnaise_max' => 10,
     'support_kind' => 'chicken',   // 支持类型
),

# 酸奶机产出

4000 => (object)array(
    'trade_for' => false,
    'producer' => 8100012,
    'rp_price' => 6,
    'quantity' => 1,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',     //barn or inventory
    'buy_gift' => true,
    'id' => 4000,
    'dest_id' => 4000,
    'desc' => 'yogurt',
    'giftable' => false,
    'buyable' => false,
    'show_name' => false,
    'type' => 'store_goods',
    'map_object' => false,
    'store_pos' => -1,
    'name' => 'yogurt',
    'sell_for'=> 100,
),
4001 => (object)array(
    'trade_for' => false,
    'producer' => 8100013,
    'rp_price' => 6,
    'quantity' => 1,
    'action'    => 'batch_buy',
    'stored_in' => 'inventory',     //barn or inventory
    'buy_gift' => true,
    'id' => 4001,
    'dest_id' => 4001,
    'desc' => 'mayonnaise',
    'giftable' => false,
    'buyable' => false,
    'show_name' => false,
    'type' => 'store_goods',
    'map_object' => false,
    'store_pos' => -1,
    'name' => 'mayonnaise',
    'sell_for'=> 100,
),

);
?>
