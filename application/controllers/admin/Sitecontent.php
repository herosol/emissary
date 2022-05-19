<?php
class Sitecontent extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(21);
        $this->table_name = 'sitecontent';
    }

    public function home()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_home';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'home'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 9; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if($i>=1 && $i <= 3)
                    {
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'thumb_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],800,'800p_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1400,'1400p_');
                    }
                    elseif($i>=4 && $i <= 6)
                    {
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],100,'thumb_');
                    }
                    else
                    {
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],300,'thumb_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],500,'500p_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],800,'800p_');
                    }
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'home');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/home");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'home'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function about_us()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_about_us';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'about_us'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 2; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if($i=== 1)
                    {
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'thumb_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],800,'800p_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],2000,'2000p_');
                    }
                    else
                    {
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],300,'thumb_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],500,'500p_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],800,'800p_');
                    }
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/400p_".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/600p_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'about_us');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/about_us");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'about_us'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function services()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_services';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'services'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if($i=== 1)
                    {
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'thumb_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],800,'800p_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],2000,'2000p_');
                    }
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'services');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/services");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'services'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function opportunities()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_opportunities';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'opportunities'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if($i=== 1)
                    {
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'thumb_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],800,'800p_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],2000,'2000p_');
                    }
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'opportunities');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/opportunities");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'opportunities'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function contact()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_contact';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if($i=== 1)
                    {
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'thumb_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],800,'800p_');
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],2000,'2000p_');
                    }
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'contact');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/contact");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function faq()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_faq';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'faq'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],200,'thumb_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],500,'500p_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],800,'800p_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'1000p_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'faq');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/faq");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'faq'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function privacy_policy()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_privacy_policy';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'privacy_policy'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],200,'thumb_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],500,'500p_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],800,'800p_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'1000p_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'privacy_policy');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/privacy_policy");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'privacy_policy'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }





    public function delete()
    {
        $arr = $this->input->post('delete');
        foreach ($arr as $key => $values) {
            $this->master->delete($this->table_name, 'id', $values);
        }
        redirect("admin/sitecontent/slider", 'refresh');
    }

    function remove_file($filepath)
    {
        if (is_file($filepath))
            unlink($filepath);
        return;
    }

}
?>