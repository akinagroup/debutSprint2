<?php

/* AkinaImmobilierBundle:Admin:detailBien.html.twig */
class __TwigTemplate_4e8d6e4bd344df291fea53a45d8b5b4fd08de7ad25c4d7eb8c013e6ad790b006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/layout.html.twig", "AkinaImmobilierBundle:Admin:detailBien.html.twig", 1);
        $this->blocks = array(
            'biens' => array($this, 'block_biens'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::LayoutAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d15b30a7c6f5bcb02b60a079e8d36bcc27ff6245b01150456c8563095b2f49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d15b30a7c6f5bcb02b60a079e8d36bcc27ff6245b01150456c8563095b2f49e->enter($__internal_3d15b30a7c6f5bcb02b60a079e8d36bcc27ff6245b01150456c8563095b2f49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:detailBien.html.twig"));

        $__internal_5e41f51810c0e28fca3ebd94087bcda3a17fd9290981caeb2826dd0d83b2faae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e41f51810c0e28fca3ebd94087bcda3a17fd9290981caeb2826dd0d83b2faae->enter($__internal_5e41f51810c0e28fca3ebd94087bcda3a17fd9290981caeb2826dd0d83b2faae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:detailBien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d15b30a7c6f5bcb02b60a079e8d36bcc27ff6245b01150456c8563095b2f49e->leave($__internal_3d15b30a7c6f5bcb02b60a079e8d36bcc27ff6245b01150456c8563095b2f49e_prof);

        
        $__internal_5e41f51810c0e28fca3ebd94087bcda3a17fd9290981caeb2826dd0d83b2faae->leave($__internal_5e41f51810c0e28fca3ebd94087bcda3a17fd9290981caeb2826dd0d83b2faae_prof);

    }

    // line 4
    public function block_biens($context, array $blocks = array())
    {
        $__internal_3cf2c3a423b1820c9c4c71dd15f8112ef8d469b077f375f789c9ed17c68d2d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf2c3a423b1820c9c4c71dd15f8112ef8d469b077f375f789c9ed17c68d2d47->enter($__internal_3cf2c3a423b1820c9c4c71dd15f8112ef8d469b077f375f789c9ed17c68d2d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_148b94d768367926524c70ae9e5619f603093f844a8ac76dbb8a822c0d3a7d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148b94d768367926524c70ae9e5619f603093f844a8ac76dbb8a822c0d3a7d15->enter($__internal_148b94d768367926524c70ae9e5619f603093f844a8ac76dbb8a822c0d3a7d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 5
        echo "
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  
  <style>

.tabu {

    border-radius:3px;
 
    height:400px;
    
 
}
span{
   
    
}

</style>
<h3>
Voir les détails sur :
</h3>
<div class=\"container tabu\">
<div id=\"tabs\">
  <ul>
    <li class=\"tabI\"><a href=\"#tabs-1\">Le bien</a></li>
    <li class=\"tabI\"><a href=\"#tabs-2\">Le propriétaire</a></li>
    <li class=\"tabI\"><a href=\"#tabs-3\">Le client</a></li>
    <li class=\"tabI\"><a href=\"#tabs-4\">La réservation</a></li>
  </ul>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detail"] ?? $this->getContext($context, "detail")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 37
            echo "  <div id=\"tabs-1\">
  <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["reserve"], "image", array()))), "html", null, true);
            echo "\" height=\"100px\" width=\"250px\">

  </div>
  <div id=\"tabs-2\">
  
  </div>
  <div id=\"tabs-3\">
  
  </div>
  <div id=\"tabs-4\">
   </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo " 
  </div>
</div>

  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
";
        
        $__internal_148b94d768367926524c70ae9e5619f603093f844a8ac76dbb8a822c0d3a7d15->leave($__internal_148b94d768367926524c70ae9e5619f603093f844a8ac76dbb8a822c0d3a7d15_prof);

        
        $__internal_3cf2c3a423b1820c9c4c71dd15f8112ef8d469b077f375f789c9ed17c68d2d47->leave($__internal_3cf2c3a423b1820c9c4c71dd15f8112ef8d469b077f375f789c9ed17c68d2d47_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:detailBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 50,  89 => 38,  86 => 37,  82 => 36,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::LayoutAdmin/layout.html.twig\" %}


  {% block biens %}

  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  
  <style>

.tabu {

    border-radius:3px;
 
    height:400px;
    
 
}
span{
   
    
}

</style>
<h3>
Voir les détails sur :
</h3>
<div class=\"container tabu\">
<div id=\"tabs\">
  <ul>
    <li class=\"tabI\"><a href=\"#tabs-1\">Le bien</a></li>
    <li class=\"tabI\"><a href=\"#tabs-2\">Le propriétaire</a></li>
    <li class=\"tabI\"><a href=\"#tabs-3\">Le client</a></li>
    <li class=\"tabI\"><a href=\"#tabs-4\">La réservation</a></li>
  </ul>
    {%for reserve in detail%}
  <div id=\"tabs-1\">
  <img src=\"{{ asset('uploads/images/' ~ reserve.image) }}\" height=\"100px\" width=\"250px\">

  </div>
  <div id=\"tabs-2\">
  
  </div>
  <div id=\"tabs-3\">
  
  </div>
  <div id=\"tabs-4\">
   </div>
 {%endfor%}
 
  </div>
</div>

  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
{% endblock %}", "AkinaImmobilierBundle:Admin:detailBien.html.twig", "/var/www/html/MyJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/detailBien.html.twig");
    }
}
