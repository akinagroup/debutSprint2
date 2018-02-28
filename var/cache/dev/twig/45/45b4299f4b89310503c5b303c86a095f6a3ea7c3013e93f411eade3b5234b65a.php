<?php

/* AkinaImmobilierBundle:Admin:disponibilite.html.twig */
class __TwigTemplate_d96cd699dd2d3f27f2176a9aaff058322b1ab3c44f193f95a6db7a056f204d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AkinaImmobilierBundle:Admin:disponibilite.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ec5e840cf69907fe5bf100c253b2be3626b4fee73a77fb46959c44b9a6b04aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec5e840cf69907fe5bf100c253b2be3626b4fee73a77fb46959c44b9a6b04aa->enter($__internal_0ec5e840cf69907fe5bf100c253b2be3626b4fee73a77fb46959c44b9a6b04aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:disponibilite.html.twig"));

        $__internal_02feb28105f55cdfc657600b7d24ca89d4fe8f6186129372108994fff4cffd88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02feb28105f55cdfc657600b7d24ca89d4fe8f6186129372108994fff4cffd88->enter($__internal_02feb28105f55cdfc657600b7d24ca89d4fe8f6186129372108994fff4cffd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:disponibilite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ec5e840cf69907fe5bf100c253b2be3626b4fee73a77fb46959c44b9a6b04aa->leave($__internal_0ec5e840cf69907fe5bf100c253b2be3626b4fee73a77fb46959c44b9a6b04aa_prof);

        
        $__internal_02feb28105f55cdfc657600b7d24ca89d4fe8f6186129372108994fff4cffd88->leave($__internal_02feb28105f55cdfc657600b7d24ca89d4fe8f6186129372108994fff4cffd88_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_117a9bb95f41a2717261bdf2b6419f1175e7064b31ee11fb3ccbd81b3519cbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117a9bb95f41a2717261bdf2b6419f1175e7064b31ee11fb3ccbd81b3519cbb6->enter($__internal_117a9bb95f41a2717261bdf2b6419f1175e7064b31ee11fb3ccbd81b3519cbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56f39a210196dda05eacbf097aed61b08c0342a627dd68a5449b42afcc184f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f39a210196dda05eacbf097aed61b08c0342a627dd68a5449b42afcc184f83->enter($__internal_56f39a210196dda05eacbf097aed61b08c0342a627dd68a5449b42afcc184f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AkinaImmobilierBundle:Admin:disponibilite";
        
        $__internal_56f39a210196dda05eacbf097aed61b08c0342a627dd68a5449b42afcc184f83->leave($__internal_56f39a210196dda05eacbf097aed61b08c0342a627dd68a5449b42afcc184f83_prof);

        
        $__internal_117a9bb95f41a2717261bdf2b6419f1175e7064b31ee11fb3ccbd81b3519cbb6->leave($__internal_117a9bb95f41a2717261bdf2b6419f1175e7064b31ee11fb3ccbd81b3519cbb6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe0e3ea096acee70e141fe04f21844c8689c9fdb7711306fc1aaa2ee5bec6409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0e3ea096acee70e141fe04f21844c8689c9fdb7711306fc1aaa2ee5bec6409->enter($__internal_fe0e3ea096acee70e141fe04f21844c8689c9fdb7711306fc1aaa2ee5bec6409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d24b4ccc32da969ed231c1d16a42ff0665424568cb7ea9d1250bb06059d8bb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24b4ccc32da969ed231c1d16a42ff0665424568cb7ea9d1250bb06059d8bb85->enter($__internal_d24b4ccc32da969ed231c1d16a42ff0665424568cb7ea9d1250bb06059d8bb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Admin:disponibilite page</h1>
";
        
        $__internal_d24b4ccc32da969ed231c1d16a42ff0665424568cb7ea9d1250bb06059d8bb85->leave($__internal_d24b4ccc32da969ed231c1d16a42ff0665424568cb7ea9d1250bb06059d8bb85_prof);

        
        $__internal_fe0e3ea096acee70e141fe04f21844c8689c9fdb7711306fc1aaa2ee5bec6409->leave($__internal_fe0e3ea096acee70e141fe04f21844c8689c9fdb7711306fc1aaa2ee5bec6409_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:disponibilite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AkinaImmobilierBundle:Admin:disponibilite{% endblock %}

{% block body %}
<h1>Welcome to the Admin:disponibilite page</h1>
{% endblock %}
", "AkinaImmobilierBundle:Admin:disponibilite.html.twig", "/var/www/html/MyJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/disponibilite.html.twig");
    }
}
