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
    public function block_container_nav($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"row-fluid\">
\t<div class=\"span12\">
\t\t<ul class=\"dshb_icoNav tac\">
\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("filiere");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/multi-agents.png"), "html", null, true);
        echo ")\"> Promotion</a></li>
\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/world.png"), "html", null, true);
        echo ")\">Event</a></li>
\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("secteur");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/pie-chart.png"), "html", null, true);
        echo ")\">Secteur</a></li>
\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("administrateur");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/pie-chart.png"), "html", null, true);
        echo ")\">User</a></li>
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/pie-chart.png"), "html", null, true);
        echo ")\">Chart</a></li>
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/lab.png"), "html", null, true);
        echo ")\">Import</a>
\t\t\t<li><a href=\"javascript:void(0)\" style=\"background-image: url(";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensatgraduate/images/gCons/van.png"), "html", null, true);
        echo ")\"> Export</a></li>
\t\t</ul>
\t</div>
</div>

";
    }

    // line 26
    public function block_nav($context, array $blocks = array())
    {
        // line 27
        echo "<nav>
\t<div class=\"nav-collapse\">
        <ul class=\"nav\">
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-list-alt icon-white\"></i> GINF <b class=\"caret\"></b></a>
                \t<ul class=\"dropdown-menu\">
                \t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "ginf"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 34
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                \t</ul>                               
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-th icon-white\"></i> GSTR <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "gstr"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 42
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </ul>
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-wrench icon-white\"></i> GSEA <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "gsea"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 50
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </ul>
            </li>
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-file icon-white\"></i> GIND<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "gind"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 58
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </ul>
            </li>
     \t\t<li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><i class=\"icon-file icon-white\"></i> GEEEI <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "geeei"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 66
            echo "\t                \t<li><a href=\"#\">promotion ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promotion"), "html", null, true);
            echo "</a></li>
                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
        return array (  193 => 68,  184 => 66,  180 => 65,  173 => 60,  164 => 58,  160 => 57,  153 => 52,  144 => 50,  140 => 49,  133 => 44,  124 => 42,  120 => 41,  113 => 36,  104 => 34,  100 => 33,  92 => 27,  89 => 26,  79 => 17,  75 => 16,  71 => 15,  65 => 14,  59 => 13,  53 => 12,  47 => 11,  41 => 7,  38 => 6,  33 => 3,  30 => 2,);
    }
}
