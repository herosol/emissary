<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json');
        $this->load->model('Pages_model', 'page');
    }

    function home()
    {
        $meta = $this->page->getMetaContent('home');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('home');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->data['partners']  = $this->master->get_data_rows('partners', ['status'=> '1']); 
            $this->data['blogs']     = $this->master->getRows('blogs', ['status'=> 1], 0, 3, 'DESC', 'id');
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function privacy_policy()
    {
        $meta = $this->page->getMetaContent('privacy_policy');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('privacy_policy');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function disclaimer()
    {
        $meta = $this->page->getMetaContent('disclaimer');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('disclaimer');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function faqs()
    {
        $meta = $this->page->getMetaContent('faq');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('faq');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->data['faqs']      = $this->master->getRows('faqs', ['status'=> 1], '', '', 'asc', 'sort_order');
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function about_us()
    {
        $meta = $this->page->getMetaContent('about_us');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('about_us');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->data['team']      = $this->master->getRows('team', ['status'=> 1], '', '', 'asc', 'id');
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function blogs($cat_id)
    {
        $meta = $this->page->getMetaContent('blogs');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('blogs');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            if($cat_id > 0)
            {
                $this->data['blogs'] = $this->master->getRows('blogs', ['status'=> 1, 'blog_cat'=> $cat_id], '', '', 'desc', 'id');
            }
            else
            {
                $this->data['blogs'] = $this->master->getRows('blogs', ['status'=> 1], '', '', 'desc', 'id');
            }

            if($cat_id > 0)
            {
                $cats = $this->master->getRows('blog_categories', ['status'=> 1, 'id <>'=> $cat_id], '', '', 'asc', 'id');
            }
            else
            {
                $cats = $this->master->getRows('blog_categories', ['status'=> 1], '', '', 'asc', 'id');
            }

            $this->data['cats'] = [];
            foreach($cats as $index => $cat):
                if($this->master->num_rows('blogs', ['blog_cat'=> $cat->id]) > 0)
                    $this->data['cats'][] = $cat;
            endforeach;


            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }
    
    function blog_detail($id)
    {
        $meta = $this->page->getMetaContent('blog_detail');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('blog_detail');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $cats = $this->master->getRows('blog_categories', ['status'=> 1], '', '', 'asc', 'id');
            $this->data['cats'] = [];
            foreach($cats as $index => $cat):
                if($this->master->num_rows('blogs', ['blog_cat'=> $cat->id]) > 0)
                    $this->data['cats'][] = $cat;
            endforeach;
            $this->data['blog'] = $this->master->getRow('blogs', ['id'=> $id]);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function job_detail($id)
    {
        $meta = $this->page->getMetaContent('job_detail');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('job_detail');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            // $cats = $this->master->getRows('blog_categories', ['status'=> 1], '', '', 'asc', 'id');
            // $this->data['cats'] = [];
            // foreach($cats as $index => $cat):
            //     if($this->master->num_rows('blogs', ['blog_cat'=> $cat->id]) > 0)
            //         $this->data['cats'][] = $cat;
            // endforeach;
            $this->data['job'] = $this->master->getRow('jobs', ['id'=> $id]);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function terms_and_conditions()
    {
        $meta = $this->page->getMetaContent('terms_and_conditions');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('terms_and_conditions');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function jobs()
    {
        $meta = $this->page->getMetaContent('jobs');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('jobs');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $cats     = $this->master->getRows('job_categories', ['status'=> 1], '', '', 'asc', 'id');
            $this->data['cats'] = [];
            foreach($cats as $index => $cat):
                $num = $this->master->num_rows('jobs', ['job_cat'=> $cat->id]);
                if($num > 0)
                {
                    $cat->count = $num; 
                    $this->data['cats'][] = $cat;
                }
            endforeach;

            $types = ['Full Time', 'Part Time'];
            $this->data['types'] = [];
            foreach($types as $index => $type):
                $num = $this->master->num_rows('jobs', ['job_type'=> trim($type)]);
                if($num > 0)
                {
                    $t = new stdClass();
                    $t->type  = $type;
                    $t->count = $num;
                    $this->data['types'][] = $t;
                }
            endforeach;

            $cities = $this->page->getJobCities();
            $this->data['cities'] = [];
            foreach($cities as $index => $city):
                $num = $this->master->num_rows('jobs', ['city'=> $city->city]);
                if($num > 0)
                {
                    $city->count = $num; 
                    $this->data['cities'][] = $city;
                }
            endforeach;

            $this->data['jobs'] = $this->master->getRows('jobs', ['status'=> 1], '', '', 'desc', 'id');
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function contact_us()
    {
        $meta = $this->page->getMetaContent('contact');
        $this->data['page_title'] = $meta->page_name.' - '.$this->data['site_settings']->site_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('contact');
        if ($data) 
        {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            http_response_code(200);
            echo json_encode($this->data);
        } 
        else
        {
            http_response_code(404);
        }
        exit;
    }

    function save_contact_message()
    {
        if($this->input->post())
        {
            $res = [];
            $res['status'] = 0;
            $res['validationErrors'] = '';
            
            $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[30]', ['min_length'=> 'Please enter full name.', 'max_length'=> 'Name too long.']);
            $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'trim|required|min_length[10]|max_length[100]', ['min_length'=> 'Please enter a complete Subject.', 'max_length'=> '100 character limit reached.']);
            $this->form_validation->set_rules('msg', 'Comment', 'trim|required|min_length[10]|max_length[1000]', ['min_length'=> 'Please enter a complete Comment.', 'max_length'=> '1000 character limit reached.']);
            if ($this->form_validation->run() === FALSE) {
                $res['validationErrors'] = validation_errors();
            }
            else
            {
                $post = html_escape($this->input->post());
                unset($post['callback']);
                $is_added = $this->master->save('contact', $post);
                if($is_added)
                {
                    $res['status'] = 1;
                }
            }
            echo json_encode($res);
            exit;
        }
    }
    
    function subs_newsletter()
    {
        if($this->input->post())
        {
            $res = [];
            $res['status'] = 0;
            $res['validationErrors'] = '';
            
            $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[newsletter.email]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already joined.'
            ));

            if ($this->form_validation->run() === FALSE) {
                $res['validationErrors'] = validation_errors();
            }
            else
            {
                $post = html_escape($this->input->post());
                if($this->master->save('newsletter', ['email'=> $post['email']]))
                {
                    $res['status'] = 1;
                }
                else
                {
                    $res['msg'] = showMsg('error', 'Something went wrong please try again.');
                    $res['status'] = 0;
                }
            }
            echo json_encode($res);
            exit;
        }
    }


    function fetch_jobs_data()
    {
        if($this->input->post())
        {
            $res = [];
            $res['status'] = 0;
            $post = $this->input->post();
            // pr($post);
            $res['jobs'] = $this->page->fetch_jobs_data($post);
            $res['status'] = 1;
            echo json_encode($res);
            exit;
        }
    }

}
