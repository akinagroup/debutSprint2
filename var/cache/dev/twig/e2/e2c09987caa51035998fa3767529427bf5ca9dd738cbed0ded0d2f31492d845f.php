<?php

/* WaldoDatatableBundle:Main:index.html.twig */
class __TwigTemplate_19aefc8e7cd0f14c8265511ef6ca3876f01adb1dd0ad8e9e5b600418c3f5a12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4acb499b46326d07de4d3da0c9036cc26dcf032ccabe96edc30b01bbe9035c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4acb499b46326d07de4d3da0c9036cc26dcf032ccabe96edc30b01bbe9035c2->enter($__internal_e4acb499b46326d07de4d3da0c9036cc26dcf032ccabe96edc30b01bbe9035c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Main:index.html.twig"));

        $__internal_729e976c4fca11a50906b991f514a56e896cb840d390c20fbae8ca6618fdb8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729e976c4fca11a50906b991f514a56e896cb840d390c20fbae8ca6618fdb8af->enter($__internal_729e976c4fca11a50906b991f514a56e896cb840d390c20fbae8ca6618fdb8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WaldoDatatableBundle:Main:index.html.twig"));

        // line 1
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_e4acb499b46326d07de4d3da0c9036cc26dcf032ccabe96edc30b01bbe9035c2->leave($__internal_e4acb499b46326d07de4d3da0c9036cc26dcf032ccabe96edc30b01bbe9035c2_prof);

        
        $__internal_729e976c4fca11a50906b991f514a56e896cb840d390c20fbae8ca6618fdb8af->leave($__internal_729e976c4fca11a50906b991f514a56e896cb840d390c20fbae8ca6618fdb8af_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_0a9b83af427190a243bdab57aeb1ca44493cf425156dce37dc4fc34e3e90378e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9b83af427190a243bdab57aeb1ca44493cf425156dce37dc4fc34e3e90378e->enter($__internal_0a9b83af427190a243bdab57aeb1ca44493cf425156dce37dc4fc34e3e90378e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ddfa74eebea38ed89eccc113d76af5fa41af239cf007acd9e80139aa5067d9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfa74eebea38ed89eccc113d76af5fa41af239cf007acd9e80139aa5067d9d3->enter($__internal_ddfa74eebea38ed89eccc113d76af5fa41af239cf007acd9e80139aa5067d9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 2
        echo "    ";
        $this->loadTemplate("WaldoDatatableBundle:Main:datatableHtml.html.twig", "WaldoDatatableBundle:Main:index.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("WaldoDatatableBundle:Main:datatableJs.html.twig", "WaldoDatatableBundle:Main:index.html.twig", 3)->display($context);
        
        $__internal_ddfa74eebea38ed89eccc113d76af5fa41af239cf007acd9e80139aa5067d9d3->leave($__internal_ddfa74eebea38ed89eccc113d76af5fa41af239cf007acd9e80139aa5067d9d3_prof);

        
        $__internal_0a9b83af427190a243bdab57aeb1ca44493cf425156dce37dc4fc34e3e90378e->leave($__internal_0a9b83af427190a243bdab57aeb1ca44493cf425156dce37dc4fc34e3e90378e_prof);

    }

    public function getTemplateName()
    {
        return "WaldoDatatableBundle:Main:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block main %}
    {% include \"WaldoDatatableBundle:Main:datatableHtml.html.twig\" %}
    {% include \"WaldoDatatableBundle:Main:datatableJs.html.twig\" %}
{% endblock  %}
", "WaldoDatatableBundle:Main:index.html.twig", "/var/www/html/MyJoob/vendor/waldo/datatable-bundle/Resources/views/Main/index.html.twig");
    }
}
