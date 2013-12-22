<?php

/* EnsatGraduateBundle:Default:index.html.twig */
class __TwigTemplate_0199549f9b97bd70e7a44579c54d2fdaf2b23b44f1017eb579ef886834218c02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsatGraduateBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'loader' => array($this, 'block_loader'),
            'container_nav' => array($this, 'block_container_nav'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsatGraduateBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Gestion des laureats
";
    }

    // line 6
    public function block_loader($context, array $blocks = array())
    {
        echo "<div id=\"loading_layer\" style=\"display:none\"><img src=\"img/ajax_loader.gif\" alt=\"\" /></div>";
    }

    // line 8
    public function block_container_nav($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"row-fluid\">
\t<div class=\"span12\">
\t\t<ul class=\"dshb_icoNav tac\">
\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("filiere");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/multi-agents.png"), "html", null, true);
        echo ")\"> Promotion</a></li>
\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/world.png"), "html", null, true);
        echo ")\">Event</a></li>
\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("secteur");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/pie-chart.png"), "html", null, true);
        echo ")\">Secteur</a></li>
\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("administrateur");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/pie-chart.png"), "html", null, true);
        echo ")\">User</a></li>
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/pie-chart.png"), "html", null, true);
        echo ")\">Chart</a></li>
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/lab.png"), "html", null, true);
        echo ")\">Import</a>
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/van.png"), "html", null, true);
        echo ")\"> Export</a></li>
\t\t</ul>
\t</div>
</div>

";
    }

    // line 28
    public function block_nav($context, array $blocks = array())
    {
        // line 29
        echo "<nav>
\t<div class=\"nav-collapse\">
        <ul class=\"nav\">
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-list-alt icon-white\"></i> GINF <b class=\"caret\"></b></a>
                \t<ul class=\"dropdown-menu\">
                \t";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "ginf"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 36
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                \t</ul>                               
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-th icon-white\"></i> GSTR <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "gstr"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 44
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </ul>
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-wrench icon-white\"></i> GSEA <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "gsea"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 52
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </ul>
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-file icon-white\"></i> GIND<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "gind"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 60
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </ul>
            </li>
     \t\t<li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-file icon-white\"></i> GEEEI <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "geeei"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 68
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </ul>
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
        return array (  200 => 70,  191 => 68,  187 => 67,  180 => 62,  171 => 60,  167 => 59,  160 => 54,  151 => 52,  147 => 51,  140 => 46,  131 => 44,  127 => 43,  120 => 38,  111 => 36,  107 => 35,  99 => 29,  96 => 28,  86 => 19,  82 => 18,  78 => 17,  66 => 15,  60 => 14,  54 => 13,  48 => 9,  45 => 8,  186 => 105,  182 => 104,  178 => 103,  173 => 102,  170 => 101,  164 => 98,  159 => 97,  156 => 96,  148 => 90,  135 => 83,  98 => 49,  76 => 32,  72 => 16,  69 => 30,  65 => 29,  42 => 8,  39 => 6,  34 => 3,  31 => 2,);
    }
}
