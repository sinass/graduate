<?php

/* ::base.html.twig */
class __TwigTemplate_c976fbf548d55337e0847ef882f0dab17611349c557436dc2561270c363a5182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "    
        <!-- Favicon -->
            <link rel=\"shortcut icon\" href=\"favicon.ico\" />
\t\t
        <!--[if lte IE 8]>
            <link rel=\"stylesheet\" href=\"css/ie.css\" />
            <script src=\"js/ie/html5.js\"></script>
\t\t\t<script src=\"js/ie/respond.min.js\"></script>
\t\t\t<script src=\"lib/flot/excanvas.min.js\"></script>
        <![endif]-->
\t\t
\t\t<script>
\t\t\t//* hide all elements & show preloader
\t\t\tdocument.documentElement.className += 'js';
\t\t</script>
    </head>
    <body>
\t\t<div id=\"loading_layer\" style=\"display:none\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/ajax_loader.gif"), "html", null, true);
        echo "\" alt=\"\" /></div>
\t\t<div class=\"style_switcher\">
\t\t\t<div class=\"sepH_c\">
\t\t\t\t<p>Colors:</p>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr blue_theme style_active\" title=\"blue\">blue</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr dark_theme\" title=\"dark\">dark</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr green_theme\" title=\"green\">green</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr brown_theme\" title=\"brown\">brown</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr eastern_blue_theme\" title=\"eastern_blue\">eastern blue</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr tamarillo_theme\" title=\"tamarillo\">tamarillo</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sepH_c\">
\t\t\t\t<p>Backgrounds:</p>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<span class=\"style_item jQptrn style_active ptrn_def\" title=\"\"></span>
\t\t\t\t\t<span class=\"ssw_ptrn_a style_item jQptrn\" title=\"ptrn_a\"></span>
\t\t\t\t\t<span class=\"ssw_ptrn_b style_item jQptrn\" title=\"ptrn_b\"></span>
\t\t\t\t\t<span class=\"ssw_ptrn_c style_item jQptrn\" title=\"ptrn_c\"></span>
\t\t\t\t\t<span class=\"ssw_ptrn_d style_item jQptrn\" title=\"ptrn_d\"></span>
\t\t\t\t\t<span class=\"ssw_ptrn_e style_item jQptrn\" title=\"ptrn_e\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sepH_c\">
\t\t\t\t<p>Layout:</p>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_layout\" id=\"ssw_layout_fluid\" value=\"\" checked /> Fluid</label>
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_layout\" id=\"ssw_layout_fixed\" value=\"gebo-fixed\" /> Fixed</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sepH_c\">
\t\t\t\t<p>Sidebar position:</p>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_sidebar\" id=\"ssw_sidebar_left\" value=\"\" checked /> Left</label>
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_sidebar\" id=\"ssw_sidebar_right\" value=\"sidebar_right\" /> Right</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sepH_c\">
\t\t\t\t<p>Show top menu on:</p>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_menu\" id=\"ssw_menu_click\" value=\"\" checked /> Click</label>
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_menu\" id=\"ssw_menu_hover\" value=\"menu_hover\" /> Hover</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"gh_button-group\">
\t\t\t\t<a href=\"\" id=\"showCss\" class=\"btn btn-primary btn-mini\">Show CSS</a>
\t\t\t\t<a href=\"\" id=\"resetDefault\" class=\"btn btn-mini\">Reset</a>
\t\t\t</div>
\t\t\t<div class=\"hide\">
\t\t\t\t<ul id=\"ssw_styles\">
\t\t\t\t\t<li class=\"small ssw_mbColor sepH_a\" style=\"display:none\">body {<span class=\"ssw_mColor sepH_a\" style=\"display:none\"> color: <span></span>;</span> <span class=\"ssw_bColor\" style=\"display:none\">background-color: <span></span> </span>}</li>
\t\t\t\t\t<li class=\"small ssw_lColor sepH_a\" style=\"display:none\">a { color: <span></span> }</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div id=\"maincontainer\" class=\"clearfix\">
\t\t\t<!-- header -->
            <header>
                <div class=\"navbar navbar-fixed-top\">
                    <div class=\"navbar-inner\">
                        <div class=\"container-fluid\">
                            <a class=\"brand\" href=\"dashboard.html\"><i class=\"icon-home icon-white\"></i> Gebo Admin</a>
                            <ul class=\"nav user_menu pull-right\">
                                <li class=\"hidden-phone hidden-tablet\">
                                    <div class=\"nb_boxes clearfix\">
                                        <a data-toggle=\"modal\" data-backdrop=\"static\" href=\"#myMail\" class=\"label ttip_b\" title=\"New messages\">25 <i class=\"splashy-mail_light\"></i></a>
                                        <a data-toggle=\"modal\" data-backdrop=\"static\" href=\"#myTasks\" class=\"label ttip_b\" title=\"New tasks\">10 <i class=\"splashy-calendar_week\"></i></a>
                                    </div>
                                </li>
\t\t\t\t\t\t\t\t<li class=\"divider-vertical hidden-phone hidden-tablet\"></li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle nav_condensed\" data-toggle=\"dropdown\"><i class=\"flag-gb\"></i> <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\"><i class=\"flag-de\"></i> Deutsch</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\"><i class=\"flag-fr\"></i> Français</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\"><i class=\"flag-es\"></i> Español</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\"><i class=\"flag-ru\"></i> Pусский</a></li>
                                    </ul>
                                </li>
                                <li class=\"divider-vertical hidden-phone hidden-tablet\"></li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Johny Smith <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"user_profile.html\">My Profile</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascrip:void(0)\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
\t\t\t\t\t\t\t<a data-target=\".nav-collapse\" data-toggle=\"collapse\" class=\"btn_menu\">
\t\t\t\t\t\t\t\t<span class=\"icon-align-justify icon-white\"></span>
\t\t\t\t\t\t\t</a>
                            <nav>
                                <div class=\"nav-collapse\">
                                    <ul class=\"nav\">
                                        <li class=\"dropdown\">
                                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"\"><i class=\"icon-list-alt icon-white\"></i> Forms <b class=\"caret\"></b></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"form_elements.html\">Form elements</a></li>
                                                <li><a href=\"form_extended.html\">Extended form elements</a></li>
                                                <li><a href=\"form_validation.html\">Form Validation</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"dropdown\">
                                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"\"><i class=\"icon-th icon-white\"></i> Components <b class=\"caret\"></b></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"alerts_btns.html\">Alerts & Buttons</a></li>
                                                <li><a href=\"icons.html\">Icons</a></li>
                                                <li><a href=\"notifications.html\">Notifications</a></li>
                                                <li><a href=\"tables.html\">Tables</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tables_more.html\">Tables (more examples)</a></li>
                                                <li><a href=\"tabs_accordion.html\">Tabs & Accordion</a></li>
                                                <li><a href=\"tooltips.html\">Tooltips, Popovers</a></li>
                                                <li><a href=\"typography.html\">Typography</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"widgets.html\">Widget boxes</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Sub menu <b class=\"caret-right\"></b></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Sub menu 1.1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Sub menu 1.2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Sub menu 1.3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Sub menu 1.4 <b class=\"caret-right\"></b></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Sub menu 1.4.1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Sub menu 1.4.2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Sub menu 1.4.3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
                                            </ul>
                                        </li>
                                        <li class=\"dropdown\">
                                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"\"><i class=\"icon-wrench icon-white\"></i> Plugins <b class=\"caret\"></b></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"charts.html\">Charts</a></li>
                                                <li><a href=\"calendar.html\">Calendar</a></li>
                                                <li><a href=\"datatable.html\">Datatable</a></li>
                                                <li><a href=\"file_manager.html\">File Manager</a></li>
                                                <li><a href=\"floating_header.html\">Floating List Header</a></li>
                                                <li><a href=\"google_maps.html\">Google Maps</a></li>
                                                <li><a href=\"gallery.html\">Gallery Grid</a></li>
                                                <li><a href=\"wizard.html\">Wizard</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"dropdown\">
                                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"\"><i class=\"icon-file icon-white\"></i> Pages <b class=\"caret\"></b></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"chat.html\">Chat</a></li>
                                                <li><a href=\"error_404.html\">Error 404</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"mailbox.html\">Mailbox</a></li>
                                                <li><a href=\"search_page.html\">Search page</a></li>
                                                <li><a href=\"user_profile.html\">User profile</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"user_static.html\">User profile (static)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                        </li>
                                        <li>
                                            <a href=\"documentation.html\"><i class=\"icon-book icon-white\"></i> Help</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class=\"modal hide fade\" id=\"myMail\">
                    <div class=\"modal-header\">
                        <button class=\"close\" data-dismiss=\"modal\">×</button>
                        <h3>New messages</h3>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"alert alert-info\">In this table jquery plugin turns a table row into a clickable link.</div>
                        <table class=\"table table-condensed table-striped\" data-rowlink=\"a\">
                            <thead>
                                <tr>
                                    <th>Sender</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Declan Pamphlett</td>
                                    <td><a href=\"javascript:void(0)\">Lorem ipsum dolor sit amet</a></td>
                                    <td>23/05/2012</td>
                                    <td>25KB</td>
                                </tr>
                                <tr>
                                    <td>Erin Church</td>
                                    <td><a href=\"javascript:void(0)\">Lorem ipsum dolor sit amet</a></td>
                                    <td>24/05/2012</td>
                                    <td>15KB</td>
                                </tr>
                                <tr>
                                    <td>Koby Auld</td>
                                    <td><a href=\"javascript:void(0)\">Lorem ipsum dolor sit amet</a></td>
                                    <td>25/05/2012</td>
                                    <td>28KB</td>
                                </tr>
                                <tr>
                                    <td>Anthony Pound</td>
                                    <td><a href=\"javascript:void(0)\">Lorem ipsum dolor sit amet</a></td>
                                    <td>25/05/2012</td>
                                    <td>33KB</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"modal-footer\">
                        <a href=\"javascript:void(0)\" class=\"btn\">Go to mailbox</a>
                    </div>
                </div>
                <div class=\"modal hide fade\" id=\"myTasks\">
                    <div class=\"modal-header\">
                        <button class=\"close\" data-dismiss=\"modal\">×</button>
                        <h3>New Tasks</h3>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"alert alert-info\">In this table jquery plugin turns a table row into a clickable link.</div>
                        <table class=\"table table-condensed table-striped\" data-rowlink=\"a\">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Summary</th>
                                    <th>Updated</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>P-23</td>
                                    <td><a href=\"javascript:void(0)\">Admin should not break if URL&hellip;</a></td>
                                    <td>23/05/2012</td>
                                    <td class=\"tac\"><span class=\"label label-important\">High</span></td>
                                    <td>Open</td>
                                </tr>
                                <tr>
                                    <td>P-18</td>
                                    <td><a href=\"javascript:void(0)\">Displaying submenus in custom&hellip;</a></td>
                                    <td>22/05/2012</td>
                                    <td class=\"tac\"><span class=\"label label-warning\">Medium</span></td>
                                    <td>Reopen</td>
                                </tr>
                                <tr>
                                    <td>P-25</td>
                                    <td><a href=\"javascript:void(0)\">Featured image on post types&hellip;</a></td>
                                    <td>22/05/2012</td>
                                    <td class=\"tac\"><span class=\"label label-success\">Low</span></td>
                                    <td>Updated</td>
                                </tr>
                                <tr>
                                    <td>P-10</td>
                                    <td><a href=\"javascript:void(0)\">Multiple feed fixes and&hellip;</a></td>
                                    <td>17/05/2012</td>
                                    <td class=\"tac\"><span class=\"label label-warning\">Medium</span></td>
                                    <td>Open</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"modal-footer\">
                        <a href=\"javascript:void(0)\" class=\"btn\">Go to task manager</a>
                    </div>
                </div>
            </header>
            
            <!-- main content -->
            <div id=\"contentwrapper\">
                <div class=\"main_content\">
                \t";
        // line 332
        $this->displayBlock('container', $context, $blocks);
        // line 334
        echo "                </div>
            </div>
            
\t\t\t<!-- sidebar -->
            <a href=\"javascript:void(0)\" class=\"sidebar_switch on_switch ttip_r\" title=\"Hide Sidebar\">Sidebar switch</a>
            <div class=\"sidebar\">
\t\t\t\t
\t\t\t\t<div class=\"antiScroll\">
\t\t\t\t\t<div class=\"antiscroll-inner\">
\t\t\t\t\t\t<div class=\"antiscroll-content\">
\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar_inner\">
\t\t\t\t\t\t\t\t<form action=\"\" class=\"input-append\" method=\"post\" >
\t\t\t\t\t\t\t\t\t<input autocomplete=\"off\" name=\"query\" class=\"search_query input-medium\" size=\"16\" type=\"text\" placeholder=\"Search...\" /><button type=\"submit\" class=\"btn\"><i class=\"icon-search\"></i></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<div id=\"side_accordion\" class=\"accordion\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"accordion-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapseOne\" data-parent=\"side_accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-folder-close\"></i> Content
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-body collapse\" id=\"collapseOne\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Articles</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">News</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Newsletters</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Comments</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"accordion-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapseTwo\" data-parent=\"side_accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-th\"></i> Modules
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-body collapse\" id=\"collapseTwo\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Content blocks</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Tags</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">FAQ</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Formbuilder</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Location</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Profiles</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"accordion-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapseThree\" data-parent=\"side_accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-user\"></i> Account manager
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-body collapse\" id=\"collapseThree\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Members</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Members groups</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Users</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Users groups</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"accordion-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapseFour\" data-parent=\"side_accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-cog\"></i> Configuration
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-body collapse\" id=\"collapseFour\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-header\">People</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"javascript:void(0)\">Account Settings</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">IP Adress Blocking</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-header\">System</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Site information</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Actions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Cron</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\">Help</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"accordion-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapseLong\" data-parent=\"side_accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-leaf\"></i> Long content (scrollbar)
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-body collapse\" id=\"collapseLong\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\t\t\t\t\t\tSome text to show sidebar scroll bar<br>
\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rhoncus, orci ac fermentum imperdiet, purus sapien pharetra diam, at varius nibh tellus tristique sem. Nulla congue odio ut augue volutpat congue. Nullam id nisl ut augue posuere ullamcorper vitae eget nunc. Quisque justo turpis, tristique non fermentum ac, feugiat quis lorem. Ut pellentesque, turpis quis auctor laoreet, nibh erat volutpat est, id mattis mi elit non massa. Suspendisse diam dui, fringilla id pretium non, dapibus eget enim. Duis fermentum quam a leo luctus tincidunt euismod sit amet arcu. Duis bibendum ultricies libero sed feugiat. Duis ut sapien risus. Morbi non nulla sit amet eros fringilla blandit id vel augue. Nam placerat ligula lacinia tellus molestie molestie vestibulum leo tincidunt.
\t\t\t\t\t\t\t\t\t\t\t\tDuis auctor varius risus vitae commodo. Fusce nec odio massa, ut dapibus justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dapibus, mauris sit amet feugiat tempor, nulla diam gravida magna, in facilisis sapien tellus non ligula. Mauris sapien turpis, sodales ac lacinia sit amet, porttitor in lacus. Pellentesque tincidunt malesuada magna, in egestas augue sodales vel. Praesent iaculis sapien at ante sodales facilisis.
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"accordion-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapse7\" data-parent=\"side_accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\">
\t\t\t\t\t\t\t\t\t\t\t   <i class=\"icon-th\"></i> Calculator
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-body collapse in\" id=\"collapse7\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<form name=\"Calc\" id=\"calc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"formSep control-group input-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" style=\"width:142px\" name=\"Input\" /><button type=\"button\" class=\"btn\" name=\"clear\" value=\"c\" onclick=\"Calc.Input.value = ''\"><i class=\"icon-remove\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"seven\" value=\"7\" onclick=\"Calc.Input.value += '7'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"eight\" value=\"8\" onclick=\"Calc.Input.value += '8'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"nine\" value=\"9\" onclick=\"Calc.Input.value += '9'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"div\" value=\"/\" onclick=\"Calc.Input.value += ' / '\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"four\" value=\"4\" onclick=\"Calc.Input.value += '4'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"five\" value=\"5\" onclick=\"Calc.Input.value += '5'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"six\" value=\"6\" onclick=\"Calc.Input.value += '6'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"times\" value=\"x\" onclick=\"Calc.Input.value += ' * '\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"one\" value=\"1\" onclick=\"Calc.Input.value += '1'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"two\" value=\"2\" onclick=\"Calc.Input.value += '2'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"three\" value=\"3\" onclick=\"Calc.Input.value += '3'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"minus\" value=\"-\" onclick=\"Calc.Input.value += ' - '\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"formSep control-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"dot\" value=\".\" onclick=\"Calc.Input.value += '.'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"zero\" value=\"0\" onclick=\"Calc.Input.value += '0'\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"DoIt\" value=\"=\" onclick=\"Calc.Input.value = Math.round( eval(Calc.Input.value) * 1000)/1000\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-large\" name=\"plus\" value=\"+\" onclick=\"Calc.Input.value += ' + '\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\tContributed by <a href=\"http://themeforest.net/user/maumao\">maumao</a>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"push\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t<div class=\"sidebar_info\">
\t\t\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"act act-warning\">65</span>
\t\t\t\t\t\t\t\t\t\t<strong>New comments</strong>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"act act-success\">10</span>
\t\t\t\t\t\t\t\t\t\t<strong>New articles</strong>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"act act-danger\">85</span>
\t\t\t\t\t\t\t\t\t\t<strong>New registrations</strong>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t
\t\t</div>
\t\t";
        // line 512
        $this->displayBlock('javascripts', $context, $blocks);
        // line 554
        echo "\t</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <!-- Bootstrap framework -->
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
        <!-- gebo blue theme-->
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/css/blue.css"), "html", null, true);
        echo "\" id=\"link_theme\" />
        <!-- breadcrumbs-->
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/jBreadcrumbs/css/BreadCrumb.css"), "html", null, true);
        echo "\" />
        <!-- tooltips-->
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/qtip2/jquery.qtip.min.css"), "html", null, true);
        echo "\" />
        <!-- colorbox -->
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/colorbox/colorbox.css"), "html", null, true);
        echo "\" />    
        <!-- code prettify -->
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/google-code-prettify/prettify.css"), "html", null, true);
        echo "\" />    
        <!-- notifications -->
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/sticky/sticky.css"), "html", null, true);
        echo "\" />    
        <!-- splashy icons -->
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/splashy/splashy.css"), "html", null, true);
        echo "\" />
\t\t<!-- flags -->
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/flags/flags.css"), "html", null, true);
        echo "\" />\t
\t\t<!-- calendar -->
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/fullcalendar/fullcalendar_gebo.css"), "html", null, true);
        echo "\" />
            
        <!-- main styles -->
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/css/style.css"), "html", null, true);
        echo "\" />
\t\t\t
            <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=PT+Sans\" />
\t
        ";
    }

    // line 332
    public function block_container($context, array $blocks = array())
    {
        // line 333
        echo "                \t";
    }

    // line 512
    public function block_javascripts($context, array $blocks = array())
    {
        // line 513
        echo "            
            <script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- smart resize event -->
\t\t\t<script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/jquery.debouncedresize.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- hidden elements width/height -->
\t\t\t<script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/jquery.actual.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- js cookie plugin -->
\t\t\t<script src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/jquery.cookie.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- main bootstrap js -->
\t\t\t<script src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- tooltips -->
\t\t\t<script src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/qtip2/jquery.qtip.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- jBreadcrumbs -->
\t\t\t<script src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- lightbox -->
            <script src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/colorbox/jquery.colorbox.min.js"), "html", null, true);
        echo "\"></script>
            <!-- fix for ios orientation change -->
\t\t\t<script src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/ios-orientationchange-fix.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- scrollbar -->
\t\t\t<script src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/antiscroll/antiscroll.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/antiscroll/jquery-mousewheel.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- common functions -->
\t\t\t<script src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/gebo_common.js"), "html", null, true);
        echo "\"></script>
\t\t\t
\t\t\t<script src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/lib/jquery-ui/jquery-ui-1.8.20.custom.min.js"), "html", null, true);
        echo "\"></script>
            <!-- touch events for jquery ui-->
            <script src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/forms/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
            <!-- multi-column layout -->
            <script src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/jquery.imagesloaded.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/jquery.wookmark.js"), "html", null, true);
        echo "\"></script>
            <!-- responsive table -->
            <script src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/jquery.mediaTable.min.js"), "html", null, true);
        echo "\"></script>
            <!--<script src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/js/gebo_dashboard.js"), "html", null, true);
        echo "\"></script> -->
            <script>
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t//* show all elements & remove preloader
\t\t\t\t\tsetTimeout('\$(\"html\").removeClass(\"js\")',1000);
\t\t\t\t});
\t\t\t</script>
            
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 545,  693 => 544,  688 => 542,  684 => 541,  679 => 539,  674 => 537,  669 => 535,  664 => 533,  660 => 532,  655 => 530,  650 => 528,  645 => 526,  640 => 524,  635 => 522,  630 => 520,  625 => 518,  620 => 516,  615 => 514,  612 => 513,  609 => 512,  605 => 333,  602 => 332,  593 => 32,  587 => 29,  582 => 27,  577 => 25,  572 => 23,  567 => 21,  562 => 19,  557 => 17,  552 => 15,  547 => 13,  542 => 11,  538 => 10,  535 => 9,  532 => 8,  526 => 6,  521 => 554,  519 => 512,  339 => 334,  337 => 332,  56 => 54,  37 => 37,  35 => 8,  30 => 6,  23 => 1,);
    }
}