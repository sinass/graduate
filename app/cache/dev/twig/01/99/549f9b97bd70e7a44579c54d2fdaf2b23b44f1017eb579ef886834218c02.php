<?php

/* EnsatGraduateBundle:Default:index.html.twig */
class __TwigTemplate_0199549f9b97bd70e7a44579c54d2fdaf2b23b44f1017eb579ef886834218c02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Bonjour : sinayoko
";
    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_nav($context, array $blocks = array())
    {
        // line 12
        echo "<nav>
\t<div class=\"nav-collapse\">
        <ul class=\"nav\">
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-list-alt icon-white\"></i> GINF <b class=\"caret\"></b></a>
                ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == "GINF")) {
                // line 18
                echo "                \t
                \t<ul class=\"dropdown-menu\">
\t                \t";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "
                \t</ul>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-th icon-white\"></i> GSTR <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"alerts_btns.html\">Alerts & Buttons</a></li>
                    <li><a href=\"icons.html\">Icons</a></li>
                    <li><a href=\"notifications.html\">Notifications</a></li>
                    <li><a href=\"tables.html\">Tables</a></li>
\t\t\t\t\t<li><a href=\"tables_more.html\">Tables (more examples)</a></li>
                    <li><a href=\"tabs_accordion.html\">Tabs & Accordion</a></li>
                    <li><a href=\"tooltips.html\">Tooltips, Popovers</a></li>
                    <li><a href=\"typography.html\">Typography</a></li>
\t\t\t\t\t<li><a href=\"widgets.html\">Widget boxes</a></li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\">Sub menu <b class=\"caret-right\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Sub menu 1.1</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Sub menu 1.2</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Sub menu 1.3</a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Sub menu 1.4 <b class=\"caret-right\"></b></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Sub menu 1.4.1</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Sub menu 1.4.2</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Sub menu 1.4.3</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-wrench icon-white\"></i> GSEA <b class=\"caret\"></b></a>
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
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-file icon-white\"></i> GIND <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"chat.html\">Chat</a></li>
                    <li><a href=\"error_404.html\">Error 404</a></li>
\t\t\t\t\t<li><a href=\"mailbox.html\">Mailbox</a></li>
                    <li><a href=\"search_page.html\">Search page</a></li>
                    <li><a href=\"user_profile.html\">User profile</a></li>
\t\t\t\t\t<li><a href=\"user_static.html\">User profile (static)</a></li>
                </ul>
            </li>
     \t\t<li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-file icon-white\"></i> GEEEI <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"chat.html\">Chat</a></li>
                    <li><a href=\"error_404.html\">Error 404</a></li>
\t\t\t\t\t<li><a href=\"mailbox.html\">Mailbox</a></li>
                    <li><a href=\"search_page.html\">Search page</a></li>
                    <li><a href=\"user_profile.html\">User profile</a></li>
\t\t\t\t\t<li><a href=\"user_static.html\">User profile (static)</a></li>
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
";
    }

    public function getTemplateName()
    {
        return "EnsatGraduateBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  66 => 20,  62 => 18,  57 => 17,  50 => 12,  47 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
