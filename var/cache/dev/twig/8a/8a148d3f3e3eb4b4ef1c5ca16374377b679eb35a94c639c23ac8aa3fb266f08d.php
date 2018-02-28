<?php

/* ::LayoutAdmin/integration.html.twig */
class __TwigTemplate_7c6f1d362dddbb8deaf4d1f90c208f66fea62f517c0b31891eec72dbe1110bb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::LayoutAdmin/integration.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d9835ecd1b2177b2a28165e1c9dfda868567fc0db6d06c29b22e1e09d7ba33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9835ecd1b2177b2a28165e1c9dfda868567fc0db6d06c29b22e1e09d7ba33a->enter($__internal_1d9835ecd1b2177b2a28165e1c9dfda868567fc0db6d06c29b22e1e09d7ba33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::LayoutAdmin/integration.html.twig"));

        $__internal_634f72f8abddd5d7d3e29204d30497b952733af65dca50cf08294c93520339e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634f72f8abddd5d7d3e29204d30497b952733af65dca50cf08294c93520339e8->enter($__internal_634f72f8abddd5d7d3e29204d30497b952733af65dca50cf08294c93520339e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::LayoutAdmin/integration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d9835ecd1b2177b2a28165e1c9dfda868567fc0db6d06c29b22e1e09d7ba33a->leave($__internal_1d9835ecd1b2177b2a28165e1c9dfda868567fc0db6d06c29b22e1e09d7ba33a_prof);

        
        $__internal_634f72f8abddd5d7d3e29204d30497b952733af65dca50cf08294c93520339e8->leave($__internal_634f72f8abddd5d7d3e29204d30497b952733af65dca50cf08294c93520339e8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05101e950663c60659750dffbc8913e4e671864365a23786fa79bb0a5fceb9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05101e950663c60659750dffbc8913e4e671864365a23786fa79bb0a5fceb9a3->enter($__internal_05101e950663c60659750dffbc8913e4e671864365a23786fa79bb0a5fceb9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8e7489c538c31643ce2ba6bfed2344d18b0fd5a37a1215b2e40bc1b76a1a7b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7489c538c31643ce2ba6bfed2344d18b0fd5a37a1215b2e40bc1b76a1a7b0f->enter($__internal_8e7489c538c31643ce2ba6bfed2344d18b0fd5a37a1215b2e40bc1b76a1a7b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 
 <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon_1.ico"), "html", null, true);
        echo "\">

     
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        
 ";
        
        $__internal_8e7489c538c31643ce2ba6bfed2344d18b0fd5a37a1215b2e40bc1b76a1a7b0f->leave($__internal_8e7489c538c31643ce2ba6bfed2344d18b0fd5a37a1215b2e40bc1b76a1a7b0f_prof);

        
        $__internal_05101e950663c60659750dffbc8913e4e671864365a23786fa79bb0a5fceb9a3->leave($__internal_05101e950663c60659750dffbc8913e4e671864365a23786fa79bb0a5fceb9a3_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c1a6f75fe75c6d43e886dd6305d9fe2b533f6f6f07ca83248fd4b9449ec0d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1a6f75fe75c6d43e886dd6305d9fe2b533f6f6f07ca83248fd4b9449ec0d86->enter($__internal_8c1a6f75fe75c6d43e886dd6305d9fe2b533f6f6f07ca83248fd4b9449ec0d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a06b9a9bba9ddb0f71ae71724d203eebfa1abce45a73b570746597e3b32256b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a06b9a9bba9ddb0f71ae71724d203eebfa1abce45a73b570746597e3b32256b->enter($__internal_5a06b9a9bba9ddb0f71ae71724d203eebfa1abce45a73b570746597e3b32256b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
        
        <!-- Begin page -->
        <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right \">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu\">
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"thumb-md img-circle\">
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">John Doe <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul>
                            <li>
                                <a href=\"index.html\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"mail-inbox.html\">Inbox</a></li>
                                    <li><a href=\"mail-compose.html\">Compose Mail</a></li>
                                    <li><a href=\"mail-read.html\">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"calendar.html\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-panels.html\">Panels</a></li>
                                    <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-notification.html\">Notification</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"components-grid.html\">Grid</a></li>
                                    <li><a href=\"components-portlets.html\">Portlets</a></li>
                                    <li><a href=\"components-widgets.html\">Widgets</a></li>
                                    <li><a href=\"components-nestable-list.html\">Nesteble</a></li>
                                    <li><a href=\"components-rangeslider.html\">Sliders </a></li>
                                    <li><a href=\"components-gallery.html\">Gallery </a></li>
                                    <li><a href=\"components-pricing.html\">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"form-elements.html\">General Elements</a></li>
                                    <li><a href=\"form-validation.html\">Form Validation</a></li>
                                    <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                    <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                    <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                    <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                    <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                    <li><a href=\"form-xeditable.html\">X-editable</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                    <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                    <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                    <li><a href=\"charts-other.html\">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-profile.html\">Profile</a></li>
                                    <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                    <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                    <li><a href=\"pages-email-template.html\">Email template</a></li>
                                    <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                    <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                    <li><a href=\"pages-404.html\">404 Error</a></li>
                                    <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                    <li><a href=\"pages-500.html\">500 Error</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul>
                                    <li class=\"has_sub\">
                                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul style=\"\">
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">Welcome !</h4>
                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li class=\"active\">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class=\"row\">
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bx-shadow bg-info\">
                                    <span class=\"mini-stat-icon\"><i class=\"ion-social-usd\"></i></span>
                                    <div class=\"mini-stat-info text-right\">
                                        <span class=\"counter\">15852</span>
                                        Total Sales
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase text-white m-0\">Last week's Sales <span class=\"pull-right\">235</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bg-purple bx-shadow\">
                                    <span class=\"mini-stat-icon\"><i class=\"ion-ios7-cart\"></i></span>
                                    <div class=\"mini-stat-info text-right\">
                                        <span class=\"counter\">956</span>
                                        New Orders
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase text-white m-0\">Last week's Orders <span class=\"pull-right\">59</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bg-success bx-shadow\">
                                    <span class=\"mini-stat-icon\"><i class=\"ion-eye\"></i></span>
                                    <div class=\"mini-stat-info text-right\">
                                        <span class=\"counter\">20544</span>
                                        Unique Visitors
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase text-white m-0\">Last month's Visitors <span class=\"pull-right\">1026</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bg-primary bx-shadow\">
                                    <span class=\"mini-stat-icon\"><i class=\"ion-android-contacts\"></i></span>
                                    <div class=\"mini-stat-info text-right\">
                                        <span class=\"counter\">5210</span>
                                        New Users
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase text-white m-0\">Last month's Users <span class=\"pull-right\">136</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->


                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"portlet\"><!-- /portlet heading -->
                                    <div class=\"portlet-heading\">
                                        <h3 class=\"portlet-title text-dark text-uppercase\">
                                            Website Stats
                                        </h3>
                                        <div class=\"portlet-widgets\">
                                            <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet1\"><i class=\"ion-minus-round\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <div id=\"portlet1\" class=\"panel-collapse collapse in\">
                                        <div class=\"portlet-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div id=\"website-stats\" style=\"position: relative;height: 320px\"></div>
                                                    <div class=\"row text-center m-t-30\">
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">86,956</h4>
                                                            <small class=\"text-muted\"> Weekly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">86,69</h4>
                                                            <small class=\"text-muted\">Monthly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">948,16</h4>
                                                            <small class=\"text-muted\">Yearly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->

                            <div class=\"col-lg-4\">
                                <div class=\"portlet\"><!-- /portlet heading -->
                                    <div class=\"portlet-heading\">
                                        <h3 class=\"portlet-title text-dark text-uppercase\">
                                            Website Stats
                                        </h3>
                                        <div class=\"portlet-widgets\">
                                            <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet2\"><i class=\"ion-minus-round\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <div id=\"portlet2\" class=\"panel-collapse collapse in\">
                                        <div class=\"portlet-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div id=\"pie-chart\">
                                                        <div id=\"pie-chart-container\" class=\"flot-chart\" style=\"height: 320px\">
                                                        </div>
                                                    </div>

                                                    <div class=\"row text-center m-t-30\">
                                                        <div class=\"col-sm-6\">
                                                            <h4 class=\"counter\">86,956</h4>
                                                            <small class=\"text-muted\"> Weekly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <h4 class=\"counter\">86,69</h4>
                                                            <small class=\"text-muted\">Monthly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->
                        </div> <!-- End row -->


                        <div class=\"row\">
                            <!-- INBOX -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">Inbox</h4>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"inbox-widget nicescroll mx-box\">
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-1.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Chadengle</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">13:40 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-2.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Tomaslau</p>
                                                    <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                    <p class=\"inbox-item-date\">13:34 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-3.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Stillnotdavid</p>
                                                    <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                    <p class=\"inbox-item-date\">13:17 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-4.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Kurafire</p>
                                                    <p class=\"inbox-item-text\">Nice to meet you</p>
                                                    <p class=\"inbox-item-date\">12:20 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-5.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Shahedk</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-6.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Adhamdannaway</p>
                                                    <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                    <p class=\"inbox-item-date\">9:56 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-8.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Arashasghari</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-9.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Joshaustin</p>
                                                    <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                    <p class=\"inbox-item-date\">9:56 AM</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <!-- CHAT -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\"> 
                                        <h3 class=\"panel-title\">Chat</h3> 
                                    </div> 
                                    <div class=\"panel-body\"> 
                                        <div class=\"chat-conversation\">
                                            <ul class=\"conversation-list nicescroll\">
                                                <li class=\"clearfix\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"assets/images/avatar-1.jpg\" alt=\"male\">
                                                        <i>10:00</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>John Deo</i>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix odd\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"assets/images/users/avatar-5.jpg\" alt=\"Female\">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>Smith</i>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"assets/images/avatar-1.jpg\" alt=\"male\">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>John Deo</i>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix odd\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"assets/images/users/avatar-5.jpg\" alt=\"male\">
                                                        <i>10:02</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>Smith</i>
                                                            <p>
                                                                Wow that's great
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class=\"row\">
                                                <div class=\"col-sm-9 chat-inputbar\">
                                                    <input type=\"text\" class=\"form-control chat-input\" placeholder=\"Enter your text\">
                                                </div>
                                                <div class=\"col-sm-3 chat-send\">
                                                    <button type=\"submit\" class=\"btn btn-info btn-block waves-effect waves-light\">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> <!-- end col-->


                            <!-- TODOs -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\"> 
                                        <h3 class=\"panel-title\">Todo</h3> 
                                    </div> 
                                    <div class=\"panel-body todoapp\"> 
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <h4 id=\"todo-message\"><span id=\"todo-remaining\"></span> of <span id=\"todo-total\"></span> remaining</h4> 
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <a href=\"\" class=\"pull-right btn btn-primary btn-sm waves-effect waves-light\" id=\"btn-archive\">Archive</a>
                                            </div>
                                        </div>

                                        <ul class=\"list-group no-margn nicescroll todo-list\" style=\"max-height: 288px\" id=\"todo-list\"></ul>

                                         <form name=\"todo-form\" id=\"todo-form\" role=\"form\" class=\"m-t-20\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-9 todo-inputbar\">
                                                    <input type=\"text\" id=\"todo-input-text\" name=\"todo-input-text\" class=\"form-control\" placeholder=\"Add new todo\">
                                                </div>
                                                <div class=\"col-sm-3 todo-send\">
                                                    <button class=\"btn-primary btn-block btn waves-effect waves-light\" type=\"button\" id=\"todo-btn-submit\">Add</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div> 
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class=\"side-bar right-bar nicescroll\">
                <h4 class=\"text-center\">Chat</h4>
                <div class=\"contact-list nicescroll\">
                    <ul class=\"list-group contacts-list\">
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Chadengle</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Tomaslau</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Stillnotdavid</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Kurafire</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Shahedk</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Adhamdannaway</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Ok</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-8.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Arashasghari</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-9.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Joshaustin</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-10.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Sortino</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        

    
  ";
        
        $__internal_5a06b9a9bba9ddb0f71ae71724d203eebfa1abce45a73b570746597e3b32256b->leave($__internal_5a06b9a9bba9ddb0f71ae71724d203eebfa1abce45a73b570746597e3b32256b_prof);

        
        $__internal_8c1a6f75fe75c6d43e886dd6305d9fe2b533f6f6f07ca83248fd4b9449ec0d86->leave($__internal_8c1a6f75fe75c6d43e886dd6305d9fe2b533f6f6f07ca83248fd4b9449ec0d86_prof);

    }

    // line 796
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d5752711630297672ecedbc14af44ff229e3a82d54383a111a37bde08ba5662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5752711630297672ecedbc14af44ff229e3a82d54383a111a37bde08ba5662->enter($__internal_0d5752711630297672ecedbc14af44ff229e3a82d54383a111a37bde08ba5662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2d6adb99f112e4d5f2d6de55678f473aba699c0ab9af4ca0515a4ab42eb820e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6adb99f112e4d5f2d6de55678f473aba699c0ab9af4ca0515a4ab42eb820e7->enter($__internal_2d6adb99f112e4d5f2d6de55678f473aba699c0ab9af4ca0515a4ab42eb820e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 797
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 804
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 805
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 806
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 807
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 809
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 810
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 811
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 814
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.app.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 817
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 820
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 824
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
        
        
        <!-- flot Chart -->
        <script src=\"";
        // line 828
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 830
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 831
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 832
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 833
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 834
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 835
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 838
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 841
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
 ";
        
        $__internal_2d6adb99f112e4d5f2d6de55678f473aba699c0ab9af4ca0515a4ab42eb820e7->leave($__internal_2d6adb99f112e4d5f2d6de55678f473aba699c0ab9af4ca0515a4ab42eb820e7_prof);

        
        $__internal_0d5752711630297672ecedbc14af44ff229e3a82d54383a111a37bde08ba5662->leave($__internal_0d5752711630297672ecedbc14af44ff229e3a82d54383a111a37bde08ba5662_prof);

    }

    public function getTemplateName()
    {
        return "::LayoutAdmin/integration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1037 => 844,  1031 => 841,  1025 => 838,  1019 => 835,  1015 => 834,  1011 => 833,  1007 => 832,  1003 => 831,  999 => 830,  995 => 829,  991 => 828,  984 => 824,  978 => 821,  974 => 820,  968 => 817,  962 => 814,  957 => 812,  953 => 811,  949 => 810,  945 => 809,  941 => 808,  937 => 807,  933 => 806,  929 => 805,  925 => 804,  921 => 803,  911 => 797,  902 => 796,  212 => 116,  115 => 21,  106 => 20,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  63 => 8,  57 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
  {% block stylesheets %}
 {{ parent ()}}
 
 <link rel=\"shortcut icon\" href=\"{{asset('images/favicon_1.ico')}}\">

     
        <link href=\"{{asset('plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{asset('css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <script src=\"{{asset('js/modernizr.min.js')}}\"></script>

        
 {% endblock %}
  {% block body %}

        
        <!-- Begin page -->
        <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right \">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"{{asset('images/users/avatar-1.jpg')}}\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu\">
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"thumb-md img-circle\">
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">John Doe <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul>
                            <li>
                                <a href=\"index.html\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"mail-inbox.html\">Inbox</a></li>
                                    <li><a href=\"mail-compose.html\">Compose Mail</a></li>
                                    <li><a href=\"mail-read.html\">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"calendar.html\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-panels.html\">Panels</a></li>
                                    <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-notification.html\">Notification</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"components-grid.html\">Grid</a></li>
                                    <li><a href=\"components-portlets.html\">Portlets</a></li>
                                    <li><a href=\"components-widgets.html\">Widgets</a></li>
                                    <li><a href=\"components-nestable-list.html\">Nesteble</a></li>
                                    <li><a href=\"components-rangeslider.html\">Sliders </a></li>
                                    <li><a href=\"components-gallery.html\">Gallery </a></li>
                                    <li><a href=\"components-pricing.html\">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"form-elements.html\">General Elements</a></li>
                                    <li><a href=\"form-validation.html\">Form Validation</a></li>
                                    <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                    <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                    <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                    <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                    <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                    <li><a href=\"form-xeditable.html\">X-editable</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                    <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                    <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                    <li><a href=\"charts-other.html\">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-profile.html\">Profile</a></li>
                                    <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                    <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                    <li><a href=\"pages-email-template.html\">Email template</a></li>
                                    <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                    <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                    <li><a href=\"pages-404.html\">404 Error</a></li>
                                    <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                    <li><a href=\"pages-500.html\">500 Error</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul>
                                    <li class=\"has_sub\">
                                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul style=\"\">
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">Welcome !</h4>
                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li class=\"active\">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class=\"row\">
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bx-shadow bg-info\">
                                    <span class=\"mini-stat-icon\"><i class=\"ion-social-usd\"></i></span>
                                    <div class=\"mini-stat-info text-right\">
                                        <span class=\"counter\">15852</span>
                                        Total Sales
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase text-white m-0\">Last week's Sales <span class=\"pull-right\">235</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bg-purple bx-shadow\">
                                    <span class=\"mini-stat-icon\"><i class=\"ion-ios7-cart\"></i></span>
                                    <div class=\"mini-stat-info text-right\">
                                        <span class=\"counter\">956</span>
                                        New Orders
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase text-white m-0\">Last week's Orders <span class=\"pull-right\">59</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bg-success bx-shadow\">
                                    <span class=\"mini-stat-icon\"><i class=\"ion-eye\"></i></span>
                                    <div class=\"mini-stat-info text-right\">
                                        <span class=\"counter\">20544</span>
                                        Unique Visitors
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase text-white m-0\">Last month's Visitors <span class=\"pull-right\">1026</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bg-primary bx-shadow\">
                                    <span class=\"mini-stat-icon\"><i class=\"ion-android-contacts\"></i></span>
                                    <div class=\"mini-stat-info text-right\">
                                        <span class=\"counter\">5210</span>
                                        New Users
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase text-white m-0\">Last month's Users <span class=\"pull-right\">136</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->


                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"portlet\"><!-- /portlet heading -->
                                    <div class=\"portlet-heading\">
                                        <h3 class=\"portlet-title text-dark text-uppercase\">
                                            Website Stats
                                        </h3>
                                        <div class=\"portlet-widgets\">
                                            <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet1\"><i class=\"ion-minus-round\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <div id=\"portlet1\" class=\"panel-collapse collapse in\">
                                        <div class=\"portlet-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div id=\"website-stats\" style=\"position: relative;height: 320px\"></div>
                                                    <div class=\"row text-center m-t-30\">
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">86,956</h4>
                                                            <small class=\"text-muted\"> Weekly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">86,69</h4>
                                                            <small class=\"text-muted\">Monthly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">948,16</h4>
                                                            <small class=\"text-muted\">Yearly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->

                            <div class=\"col-lg-4\">
                                <div class=\"portlet\"><!-- /portlet heading -->
                                    <div class=\"portlet-heading\">
                                        <h3 class=\"portlet-title text-dark text-uppercase\">
                                            Website Stats
                                        </h3>
                                        <div class=\"portlet-widgets\">
                                            <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet2\"><i class=\"ion-minus-round\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <div id=\"portlet2\" class=\"panel-collapse collapse in\">
                                        <div class=\"portlet-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div id=\"pie-chart\">
                                                        <div id=\"pie-chart-container\" class=\"flot-chart\" style=\"height: 320px\">
                                                        </div>
                                                    </div>

                                                    <div class=\"row text-center m-t-30\">
                                                        <div class=\"col-sm-6\">
                                                            <h4 class=\"counter\">86,956</h4>
                                                            <small class=\"text-muted\"> Weekly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <h4 class=\"counter\">86,69</h4>
                                                            <small class=\"text-muted\">Monthly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->
                        </div> <!-- End row -->


                        <div class=\"row\">
                            <!-- INBOX -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">Inbox</h4>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"inbox-widget nicescroll mx-box\">
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-1.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Chadengle</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">13:40 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-2.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Tomaslau</p>
                                                    <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                    <p class=\"inbox-item-date\">13:34 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-3.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Stillnotdavid</p>
                                                    <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                    <p class=\"inbox-item-date\">13:17 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-4.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Kurafire</p>
                                                    <p class=\"inbox-item-text\">Nice to meet you</p>
                                                    <p class=\"inbox-item-date\">12:20 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-5.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Shahedk</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-6.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Adhamdannaway</p>
                                                    <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                    <p class=\"inbox-item-date\">9:56 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-8.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Arashasghari</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-9.jpg\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Joshaustin</p>
                                                    <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                    <p class=\"inbox-item-date\">9:56 AM</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <!-- CHAT -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\"> 
                                        <h3 class=\"panel-title\">Chat</h3> 
                                    </div> 
                                    <div class=\"panel-body\"> 
                                        <div class=\"chat-conversation\">
                                            <ul class=\"conversation-list nicescroll\">
                                                <li class=\"clearfix\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"assets/images/avatar-1.jpg\" alt=\"male\">
                                                        <i>10:00</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>John Deo</i>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix odd\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"assets/images/users/avatar-5.jpg\" alt=\"Female\">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>Smith</i>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"assets/images/avatar-1.jpg\" alt=\"male\">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>John Deo</i>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix odd\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"assets/images/users/avatar-5.jpg\" alt=\"male\">
                                                        <i>10:02</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>Smith</i>
                                                            <p>
                                                                Wow that's great
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class=\"row\">
                                                <div class=\"col-sm-9 chat-inputbar\">
                                                    <input type=\"text\" class=\"form-control chat-input\" placeholder=\"Enter your text\">
                                                </div>
                                                <div class=\"col-sm-3 chat-send\">
                                                    <button type=\"submit\" class=\"btn btn-info btn-block waves-effect waves-light\">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> <!-- end col-->


                            <!-- TODOs -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\"> 
                                        <h3 class=\"panel-title\">Todo</h3> 
                                    </div> 
                                    <div class=\"panel-body todoapp\"> 
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <h4 id=\"todo-message\"><span id=\"todo-remaining\"></span> of <span id=\"todo-total\"></span> remaining</h4> 
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <a href=\"\" class=\"pull-right btn btn-primary btn-sm waves-effect waves-light\" id=\"btn-archive\">Archive</a>
                                            </div>
                                        </div>

                                        <ul class=\"list-group no-margn nicescroll todo-list\" style=\"max-height: 288px\" id=\"todo-list\"></ul>

                                         <form name=\"todo-form\" id=\"todo-form\" role=\"form\" class=\"m-t-20\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-9 todo-inputbar\">
                                                    <input type=\"text\" id=\"todo-input-text\" name=\"todo-input-text\" class=\"form-control\" placeholder=\"Add new todo\">
                                                </div>
                                                <div class=\"col-sm-3 todo-send\">
                                                    <button class=\"btn-primary btn-block btn waves-effect waves-light\" type=\"button\" id=\"todo-btn-submit\">Add</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div> 
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class=\"side-bar right-bar nicescroll\">
                <h4 class=\"text-center\">Chat</h4>
                <div class=\"contact-list nicescroll\">
                    <ul class=\"list-group contacts-list\">
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Chadengle</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Tomaslau</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Stillnotdavid</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Kurafire</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Shahedk</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Adhamdannaway</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Ok</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-8.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Arashasghari</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-9.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Joshaustin</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-10.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Sortino</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        

    
  {% endblock %}
 {% block javascripts %}
 {{ parent ()}}
<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"{{asset('js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('js/detect.js')}}\"></script>
        <script src=\"{{asset('js/fastclick.js')}}\"></script>
        <script src=\"{{asset('js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('js/waves.js')}}\"></script>
        <script src=\"{{asset('js/wow.min.js')}}\"></script>
        <script src=\"{{asset('js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{asset('js/jquery.app.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{asset('plugins/moment/moment.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{asset('plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
        <script src=\"{{asset('plugins/counterup/jquery.counterup.min.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{asset('plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>
        
        
        <!-- flot Chart -->
        <script src=\"{{asset('plugins/flot-chart/jquery.flot.js')}}\"></script>
        <script src=\"{{asset('plugins/flot-chart/jquery.flot.time.js')}}\"></script>
        <script src=\"{{asset('plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
        <script src=\"{{asset('plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
        <script src=\"{{asset('plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
        <script src=\"{{asset('plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
        <script src=\"{{asset('plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
        <script src=\"{{asset('plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{asset('pages/jquery.todo.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{asset('pages/jquery.chat.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{asset('pages/jquery.dashboard.js')}}\"></script>
        
        <script type=\"text/javascript\">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
 {% endblock %}", "::LayoutAdmin/integration.html.twig", "/var/www/html/MyJoob/app/Resources/views/LayoutAdmin/integration.html.twig");
    }
}
