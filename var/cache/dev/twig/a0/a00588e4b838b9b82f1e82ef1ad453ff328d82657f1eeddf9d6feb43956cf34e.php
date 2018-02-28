<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b4154067ebb861e533cdb73216edd00eef0b68426047e9a5820fef7f2e4fcdbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_423378d9779a551202e51751390f86a657abc4d4d5226acbe019356b4af1c71a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423378d9779a551202e51751390f86a657abc4d4d5226acbe019356b4af1c71a->enter($__internal_423378d9779a551202e51751390f86a657abc4d4d5226acbe019356b4af1c71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_35fab7e28e6eca43f207eaabc5266747ebf3adc6d028348d5d12befe0c934113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fab7e28e6eca43f207eaabc5266747ebf3adc6d028348d5d12befe0c934113->enter($__internal_35fab7e28e6eca43f207eaabc5266747ebf3adc6d028348d5d12befe0c934113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_423378d9779a551202e51751390f86a657abc4d4d5226acbe019356b4af1c71a->leave($__internal_423378d9779a551202e51751390f86a657abc4d4d5226acbe019356b4af1c71a_prof);

        
        $__internal_35fab7e28e6eca43f207eaabc5266747ebf3adc6d028348d5d12befe0c934113->leave($__internal_35fab7e28e6eca43f207eaabc5266747ebf3adc6d028348d5d12befe0c934113_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2fc0afe676d8a6c4914742902cc04e65875193f6d47fb3761afe849d5b8862b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fc0afe676d8a6c4914742902cc04e65875193f6d47fb3761afe849d5b8862b->enter($__internal_e2fc0afe676d8a6c4914742902cc04e65875193f6d47fb3761afe849d5b8862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1ec621877353aeacccf315bbca76d4b525dac3c799f9c63c95c627b4459e08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ec621877353aeacccf315bbca76d4b525dac3c799f9c63c95c627b4459e08d->enter($__internal_c1ec621877353aeacccf315bbca76d4b525dac3c799f9c63c95c627b4459e08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c1ec621877353aeacccf315bbca76d4b525dac3c799f9c63c95c627b4459e08d->leave($__internal_c1ec621877353aeacccf315bbca76d4b525dac3c799f9c63c95c627b4459e08d_prof);

        
        $__internal_e2fc0afe676d8a6c4914742902cc04e65875193f6d47fb3761afe849d5b8862b->leave($__internal_e2fc0afe676d8a6c4914742902cc04e65875193f6d47fb3761afe849d5b8862b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
