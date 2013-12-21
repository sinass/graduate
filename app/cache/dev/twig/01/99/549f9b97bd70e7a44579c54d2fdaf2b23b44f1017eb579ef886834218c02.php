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
            'container' => array($this, 'block_container'),
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
        echo "Bonjour : sinayoko
";
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"row-fluid\">
\t<div class=\"span12\">
\t\t<ul class=\"dshb_icoNav tac\">
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/multi-agents.png"), "html", null, true);
        echo ")\"> Promotion</a></li>
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/world.png"), "html", null, true);
        echo ")\">Event</a></li>
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/pie-chart.png"), "html", null, true);
        echo ")\">Charts</a></li>
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/lab.png"), "html", null, true);
        echo ")\">Import</a>
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/van.png"), "html", null, true);
        echo ")\"> Export</a></li>
\t\t</ul>
\t</div>
</div>

";
    }

    // line 22
    public function block_nav($context, array $blocks = array())
    {
        // line 23
        echo "<nav>
\t<div class=\"nav-collapse\">
        <ul class=\"nav\">
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-list-alt icon-white\"></i> GINF <b class=\"caret\"></b></a>
                \t<ul class=\"dropdown-menu\">
                \t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ginf"]) ? $context["ginf"] : $this->getContext($context, "ginf")));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 30
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                \t</ul>                               
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-th icon-white\"></i> GSTR <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gstr"]) ? $context["gstr"] : $this->getContext($context, "gstr")));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 38
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </ul>
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-wrench icon-white\"></i> GSEA <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gsea"]) ? $context["gsea"] : $this->getContext($context, "gsea")));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 46
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </ul>
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-file icon-white\"></i> GIND<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gind"]) ? $context["gind"] : $this->getContext($context, "gind")));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 54
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </ul>
            </li>
     \t\t<li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-file icon-white\"></i> GEEEI <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geeei"]) ? $context["geeei"] : $this->getContext($context, "geeei")));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 62
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        return array (  177 => 64,  168 => 62,  164 => 61,  157 => 56,  148 => 54,  144 => 53,  137 => 48,  128 => 46,  124 => 45,  117 => 40,  108 => 38,  104 => 37,  97 => 32,  88 => 30,  84 => 29,  76 => 23,  73 => 22,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  41 => 7,  38 => 6,  33 => 3,  30 => 2,);
    }
}
