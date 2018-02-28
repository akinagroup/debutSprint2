<?php

/* AkinaImmobilierBundle:Admin:add.html.twig */
class __TwigTemplate_92f2f0da088a49daabbdd3feaf88317bf11c247cb9629b680c8676e266430dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/layout.html.twig", "AkinaImmobilierBundle:Admin:add.html.twig", 1);
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
        $__internal_50e6bd991fea5f61bf855382c45dc2590d8c21cfa410bfc65d79eeab19503052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e6bd991fea5f61bf855382c45dc2590d8c21cfa410bfc65d79eeab19503052->enter($__internal_50e6bd991fea5f61bf855382c45dc2590d8c21cfa410bfc65d79eeab19503052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:add.html.twig"));

        $__internal_af6e386fbb330f2d5740c03fcb3626a8059c53c91967c411dcbad00ca973a9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6e386fbb330f2d5740c03fcb3626a8059c53c91967c411dcbad00ca973a9a6->enter($__internal_af6e386fbb330f2d5740c03fcb3626a8059c53c91967c411dcbad00ca973a9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e6bd991fea5f61bf855382c45dc2590d8c21cfa410bfc65d79eeab19503052->leave($__internal_50e6bd991fea5f61bf855382c45dc2590d8c21cfa410bfc65d79eeab19503052_prof);

        
        $__internal_af6e386fbb330f2d5740c03fcb3626a8059c53c91967c411dcbad00ca973a9a6->leave($__internal_af6e386fbb330f2d5740c03fcb3626a8059c53c91967c411dcbad00ca973a9a6_prof);

    }

    // line 2
    public function block_biens($context, array $blocks = array())
    {
        $__internal_70cdff3cb939be7d474c2aa5535099e2fb852b641bf1f15c94a57483f411b252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70cdff3cb939be7d474c2aa5535099e2fb852b641bf1f15c94a57483f411b252->enter($__internal_70cdff3cb939be7d474c2aa5535099e2fb852b641bf1f15c94a57483f411b252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_c76ec57a43ac4fd755c73f8b1ac108e2193a85d71554e60ec18c6bf57b7b1758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76ec57a43ac4fd755c73f8b1ac108e2193a85d71554e60ec18c6bf57b7b1758->enter($__internal_c76ec57a43ac4fd755c73f8b1ac108e2193a85d71554e60ec18c6bf57b7b1758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 3
        echo "  <style>
  .btn {
      float:right;
  }
  </style>

<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">

<h1>Ajout de bien avec ses photos</h1>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formI"] ?? $this->getContext($context, "formI")), 'form_start');
        echo " 
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["formI"] ?? $this->getContext($context, "formI")), 'widget');
        echo "
            <input class=\"btn btn-dark\" type=\"submit\" value=\"Enregistrer\" /> 
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formI"] ?? $this->getContext($context, "formI")), 'form_end');
        echo "
        </div>

<div class=\"form-group list-group-item\" style=\"margin-top:50px;padding-bottom:30px;margin-bottom:20px;\">
<h1>Ajout de bien</h1>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formB"] ?? $this->getContext($context, "formB")), 'form_start');
        echo " 
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["formB"] ?? $this->getContext($context, "formB")), 'widget');
        echo "
            <input class=\"btn btn-dark\" type=\"submit\" value=\"Enregistrer\" /> 
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formB"] ?? $this->getContext($context, "formB")), 'form_end');
        echo "
        </div>
";
        
        $__internal_c76ec57a43ac4fd755c73f8b1ac108e2193a85d71554e60ec18c6bf57b7b1758->leave($__internal_c76ec57a43ac4fd755c73f8b1ac108e2193a85d71554e60ec18c6bf57b7b1758_prof);

        
        $__internal_70cdff3cb939be7d474c2aa5535099e2fb852b641bf1f15c94a57483f411b252->leave($__internal_70cdff3cb939be7d474c2aa5535099e2fb852b641bf1f15c94a57483f411b252_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  81 => 21,  77 => 20,  69 => 15,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
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
  <style>
  .btn {
      float:right;
  }
  </style>

<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">

<h1>Ajout de bien avec ses photos</h1>
{{form_start(formI)}} 
            {{form_widget(formI)}}
            <input class=\"btn btn-dark\" type=\"submit\" value=\"Enregistrer\" /> 
        {{form_end(formI)}}
        </div>

<div class=\"form-group list-group-item\" style=\"margin-top:50px;padding-bottom:30px;margin-bottom:20px;\">
<h1>Ajout de bien</h1>
{{form_start(formB)}} 
            {{form_widget(formB)}}
            <input class=\"btn btn-dark\" type=\"submit\" value=\"Enregistrer\" /> 
        {{form_end(formB)}}
        </div>
{% endblock %}
", "AkinaImmobilierBundle:Admin:add.html.twig", "/var/www/html/MyJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/add.html.twig");
    }
}
