Codeigniter Facebook App Skeleton
===================================

This is a starting code if you are writing a Facebook app using Codeigniter. 

It uses following tools/technologies

* Codeigniter 2.1.1     	
* Twitter Bootstrap 2.0.4
* Facebook PHP SDK v3.0.1


Setting Up
------

1. Create your Facebook app [here](https://developers.facebook.com/apps) and get your AppId and App Secret
2. Update the AppId and App Secret in the Facebook.config file in the Application/config/facebook.php file
3. Use the following code in the constructor of any controller where you wish to use Facebook api


> `parent::__construct();` 
> `parse_str( $_SERVER['QUERY_STRING'], $_REQUEST );` 
> `$CI = & get_instance();`
> `$CI->config->load("facebook",TRUE);`
> `$config = $CI->config->item('facebook');`
> `$this->load->library('Facebook', $config);`
