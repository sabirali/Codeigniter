<?php 

//print_r($_FILES['image']['name']);
$this->load->library('upload');
$path = base_url().'uploads';

$config = array();
$config['upload_path'] = '/opt/lampp/htdocs/CI-crude/uploads';
//$config['upload_path'] = $this->config->item('base_path') . 'uploads';  // Dynamic 
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = '11110000';           // Always check upload image size
$config['max_width'] = '0';
$config['max_height'] = '0';

$this->upload->initialize($config);

if ($this->upload->do_upload('image')){
    $data1['image'] = $this->upload->data();
    $data['image'] = $data1['image']['file_name'];
}else {
    $data['image']= '';
}