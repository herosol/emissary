<div class="sidebar-menu fixed">
    <div class="sidebar-menu-inner ps-container ps-active-y">
        <header class="logo-env">
            <div class="logo">
                <a href="<?=site_url(ADMIN.'/dashboard')?>">
                    <img src="<?= base_url().SITE_IMAGES.'images/'.$adminsite_setting->site_logo ?>" width="120" alt="">
                </a>
            </div>
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon">
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="opened <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/dashboard') ?>">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class=" <?= ($this->uri->segment(2) == 'sitecontent' || $this->uri->segment(2) == 'preferences') ? ' opened  active' : '' ?>">
                <a href="javascript:void(0)">
                    <i class="entypo-doc-text"></i>
                    <span class="title">Manage Pages</span>
                </a>
                <ul>
                    <li class=" <?= ($this->uri->segment(3) == 'home') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/home') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'about_us') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/about_us') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">About Us</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'privacy_policy') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/privacy_policy') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Privacy policy</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'faq') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/faq') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">FAQ's</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'contact') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/contact') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Contact Us</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" <?= ($this->uri->segment(2) == 'blog_categories' || $this->uri->segment(2) == 'blogs') ? ' opened  active' : '' ?>">
                <a href="javascript:void(0)">
                    <i class="entypo-doc-text"></i>
                    <span class="title">Manage Blogs</span>
                </a>
                <ul>
                    <li class=" <?= ($this->uri->segment(2) == 'blog_categories') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/blog_categories') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Blog Categories</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(2) == 'blogs') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/blogs') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Blogs</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="opened<?= $this->uri->segment('2') == 'partners' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/partners') ?>">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Partners</span>
                </a>
            </li>
            <li class="opened<?= $this->uri->segment('2') == 'faq' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/faq') ?>">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage FAQ's</span>
                </a>
            </li>
            <li class="opened<?= $this->uri->segment('2') == 'team' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/team') ?>">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Team</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'contact') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/contact') ?>">
                    <i class="fa fa-usd"></i>
                    <span class="title">Manage Contact Messages</span><span class="badge badge-danger"><?=new_messages()?></span>
                </a>
            </li>
            <li class="opened<?= $this->uri->segment('2') == 'newsletter' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/newsletter') ?>">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Newsletter Subscriptions</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment('2') == 'meta-info') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/meta-info') ?>">
                    <i class="fa fa-tag" aria-hidden="true"></i>
                    <span class="title">Site Meta</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'settings' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/settings') ?>">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Site Settings</span>
                </a>
            </li>
            <li class="opened">
                <a href="<?= site_url(ADMIN.'/settings/change') ?>">
                    <i class="fa fa-lock"></i>
                    <span class="title">Change Password</span>
                </a>
            </li>
        </ul>
    </div>
</div>