<?php
//pics_model.php
class Pics_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
    public function get_pics($slug = FALSE)
    {
        if ($slug === FALSE)
        { 
            $tags = 'natur';
        }else{
            $tags = $slug;   
        }
           
            $api_key = 'cd5ebac9b12d153cd23f24b55fe51d8a';
            $perPage = 10;
            $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
            $url.= '&api_key=' . $api_key;
            $url.= '&tags=' . $tags;
            $url.= '&per_page=' . $perPage;
            $url.= '&format=json';
            $url.= '&nojsoncallback=1';
            
            $response = json_decode(file_get_contents($url));
            $pics = $response->photos->photo;
            return $pics;
    }
    
}