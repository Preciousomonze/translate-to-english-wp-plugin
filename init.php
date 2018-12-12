<?php
/**
 * Plugin Name: Precious Change wp dashboard to english 
 * Plugin URI:
 * Description: This plugin easily helps to change the Wordpress dashboard to english when activated, deactivate or uninstall if you want to go back to Italian.
 * Version: 1.0
 * Author: Precious Omonzejele <me@codeexplorer.ninja>
 * Author URI: https://twitter.com/preciousomonze
 * Requires at least: 4.4
 * Tested up to: 4.9
 */
 if(!defined('ABSPATH'))
  exit();
 /** on activation */
 function pp_activation(){
     update_option('wplang','en_GB');
 }
 register_activation_hook(__FILE__,'pp_activation');
 /** on deactivation */
 function pp_deactivation(){
     update_option('wplang','it_IT');
 }hemai
 register_deactivation_hook(__FILE__,'pp_deactivation');
 register_uninstall_hook(__FILE__,'pp_deactivation');
 //that's all :)
