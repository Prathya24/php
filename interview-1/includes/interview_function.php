<?php
class interview_main
{
    public function __construct()
    {
        add_action('init', array($this, 'register_custom_post_type'));
        add_action('init', array($this, 'register_custom_taxonomy'));
        add_shortcode('interview_task1', array($this, 'fetch_and_display_data'));
        add_shortcode('interview_task2', array($this, 'get_id_by_title'));
        add_shortcode('interview_task3', array($this, 'print_titles_array'));
    }
    public function register_custom_post_type()
    {
        register_post_type('interview', array('labels' => array('name' => __('Interviews'),'singular_name' => __('Interviews'),),
        'public' => true,
        'has_archive' => true,
        'rewrite' =>array('slug' => 'interview'),) );
    }
    public function register_custom_taxonomy()
    {
        register_taxonomy('language', 'interview', array(
        'label' => __('Language'),
        'rewrite' => array('slug' => 'language'),
        'hierarchical' => true,));
    }
    public function fetch_and_display_data()
    {
        $ch = curl_init();

        $url = 'https://jsonplaceholder.typicode.com/posts';

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if(curl_errno($ch)){
         echo "Error:" . curl_error($ch);
         exit;
        }
        curl_close($ch);

        $data = json_decode($response);

        if ($data) {
            foreach ($data as $item) {
                echo 'Id: ' . $item->id;
                echo 'Body: ' . $item->body;
            }
        } else {
            echo 'No data found.';
        }
    }
    public function get_id_by_title()
    {
        $ch = curl_init();

        $url = 'https://jsonplaceholder.typicode.com/posts';

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if(curl_errno($ch)){
         echo "Error:" . curl_error($ch);
         exit;
        }
        curl_close($ch);

        $data = json_decode($response);
        $output = array_search('nesciunt quas odio', array_column($data, 'title'));
        if ($output !== false){ 
            echo 'Id is :'.$output;
        }
        else{
            echo 'Id is not found';
        }
    }  
    public function print_titles_array()
    {
        $ch = curl_init();

        $url = 'https://jsonplaceholder.typicode.com/posts';

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if(curl_errno($ch)){
         echo "Error:" . curl_error($ch);
         exit;
        }
        curl_close($ch);

        $data = json_decode($response);
        $titles = array_column($data, 'title');
        asort($titles);
        
      
    }       
}